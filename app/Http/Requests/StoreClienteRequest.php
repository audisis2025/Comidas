<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClienteRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta petición.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Obtiene las reglas de validación.
     */
    public function rules(): array
    {
        return [
            // --- Información Básica ---
            'nombre_negocio' => ['required', 'string', 'max:255'],
            'tipo_negocio' => ['required', 'string', 'in:Restaurante,Cafetería,Food Truck,Panadería,Bar,Otro'],
            'formalidad' => ['required', 'in:formal,informal'],
            'tipo_cuenta' => ['required', 'in:basica,premium'],
            'telefono' => ['required', 'string', 'max:20'],
            
            // --- Información Fiscal (Condicional) ---
            'rfc' => [
                Rule::requiredIf($this->formalidad === 'formal'), 
                'nullable', 'string', 'size:13', 'regex:/^[A-ZÑ&]{3,4}\d{6}[A-Z0-9]{3}$/'
            ],
            'razon_social' => [
                Rule::requiredIf($this->formalidad === 'formal'), 
                'nullable', 'string', 'max:255'
            ],
            'direccion_fiscal' => [
                Rule::requiredIf($this->formalidad === 'formal'), 
                'nullable', 'string', 'max:500'
            ],
            'ofrece_facturacion' => ['nullable', 'boolean'],
            
            // --- Dirección ---
            'direccion_completa' => ['required', 'string', 'max:500'],
            'ciudad' => ['required', 'string', 'max:100'],
            'estado' => ['required', 'string', 'max:100'],
            'codigo_postal' => ['required', 'string', 'max:10'],
            
            // --- Métodos de pago ---
            'metodos_pago' => ['nullable', 'array'],
            'metodos_pago.*' => ['string'],
            
            // --- REGLAS DE HORARIOS MEJORADAS ---
            'horarios.lunes_viernes.apertura' => ['required', 'date_format:H:i'],
            'horarios.lunes_viernes.cierre' => ['required', 'date_format:H:i', 'after:horarios.lunes_viernes.apertura'],
            
            'horarios.sabados.apertura' => ['nullable', 'date_format:H:i', 'required_with:horarios.sabados.cierre'],
            'horarios.sabados.cierre' => ['nullable', 'date_format:H:i', 'after:horarios.sabados.apertura', 'required_with:horarios.sabados.apertura'],
            
            'horarios.domingos.apertura' => ['nullable', 'date_format:H:i', 'required_with:horarios.domingos.cierre'],
            'horarios.domingos.cierre' => ['nullable', 'date_format:H:i', 'after:horarios.domingos.apertura', 'required_with:horarios.domingos.apertura'],
            
            // Regla condicional para festivos
            'horarios.festivos.apertura' => [
                Rule::requiredIf(!$this->boolean('cierra_dias_festivos')), // Requerido si NO cierra en festivos
                'nullable', 'date_format:H:i', 'required_with:horarios.festivos.cierre'
            ],
            'horarios.festivos.cierre' => [
                Rule::requiredIf(!$this->boolean('cierra_dias_festivos')), // Requerido si NO cierra en festivos
                'nullable', 'date_format:H:i', 'after:horarios.festivos.apertura', 'required_with:horarios.festivos.apertura'
            ],
            
            'cierra_dias_festivos' => ['nullable', 'boolean'],
        ];
    }

    /**
     * Mensajes de error personalizados.
     */
    public function messages(): array
    {
        return [
            // --- Mensajes de Info Básica y Fiscal ---
            'nombre_negocio.required' => 'El nombre del negocio es obligatorio.',
            'tipo_negocio.required' => 'Debes seleccionar un tipo de negocio.',
            'formalidad.required' => 'Debes indicar la formalidad del negocio.',
            'tipo_cuenta.required' => 'Debes seleccionar un tipo de cuenta.',
            'telefono.required' => 'El teléfono es obligatorio.',
            'direccion_completa.required' => 'La dirección completa es obligatoria.',
            'ciudad.required' => 'La ciudad es obligatoria.',
            'estado.required' => 'El estado es obligatorio.',
            'codigo_postal.required' => 'El código postal es obligatorio.',
            'rfc.required' => 'El RFC es obligatorio para negocios formales.',
            'razon_social.required' => 'La Razón Social es obligatoria para negocios formales.',
            
            // --- MENSAJES AMIGABLES PARA HORARIOS ---
            'horarios.lunes_viernes.apertura.required' => 'La apertura de Lunes a Viernes es obligatoria.',
            'horarios.lunes_viernes.cierre.required' => 'El cierre de Lunes a Viernes es obligatorio.',
            'horarios.lunes_viernes.cierre.after' => 'El cierre de Lunes a Viernes debe ser después de la apertura.',

            'horarios.sabados.cierre.after' => 'El cierre de Sábados debe ser después de la apertura.',
            'horarios.sabados.apertura.required_with' => 'Debes indicar la apertura de Sábados si indicaste un cierre.',
            'horarios.sabados.cierre.required_with' => 'Debes indicar el cierre de Sábados si indicaste una apertura.',

            'horarios.domingos.cierre.after' => 'El cierre de Domingos debe ser después de la apertura.',
            'horarios.domingos.apertura.required_with' => 'Debes indicar la apertura de Domingos si indicaste un cierre.',
            'horarios.domingos.cierre.required_with' => 'Debes indicar el cierre de Domingos si indicaste una apertura.',

            'horarios.festivos.cierre.after' => 'El cierre de Días Festivos debe ser después de la apertura.',
            'horarios.festivos.apertura.required' => 'La apertura de Días Festivos es obligatoria si no cierras ese día.',
            'horarios.festivos.cierre.required' => 'El cierre de Días Festivos es obligatorio si no cierras ese día.',
            'horarios.festivos.apertura.required_with' => 'Debes indicar la apertura de Días Festivos si indicaste un cierre.',
            'horarios.festivos.cierre.required_with' => 'Debes indicar el cierre de Días Festivos si indicaste una apertura.',
        ];
    }

    /**
     * Prepara los datos para la validación.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'ofrece_facturacion' => $this->boolean('ofrece_facturacion'),
            'cierra_dias_festivos' => $this->boolean('cierra_dias_festivos'),
        ]);
    }
}