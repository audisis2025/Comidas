<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Controlador para gestionar clientes/negocios.
 */
class ClienteController extends Controller
{
    /**
     * Muestra el listado de clientes.
     */
    public function index()
    {
        //
    }

    /**
     * Muestra el formulario para completar el registro.
     */
    public function create(): View
    {
        return view('dashboard.completar-registro');
    }

    /**
     * Almacena un nuevo cliente/negocio.
     */
    public function store(StoreClienteRequest $request): RedirectResponse
    {
        try {
            // Iniciar transacción
            DB::beginTransaction();

            // Preparar datos del cliente
            $datosCliente = [
                'user_id' => auth()->id(),
                'nombre_negocio' => $request->nombre_negocio,
                'tipo_negocio' => $request->tipo_negocio,
                'formalidad' => $request->formalidad,
                'tipo_cuenta' => $request->tipo_cuenta,
                'telefono' => $request->telefono,
                'direccion_completa' => $request->direccion_completa,
                'ciudad' => $request->ciudad,
                'estado' => $request->estado,
                'codigo_postal' => $request->codigo_postal,
                'metodos_pago' => $request->metodos_pago ?? [],
                'cierra_dias_festivos' => $request->boolean('cierra_dias_festivos'),
                'activo' => true,
                'verificado' => false,
            ];

            // Agregar información fiscal si es formal
            if ($request->formalidad === 'formal') {
                $datosCliente['rfc'] = $request->rfc;
                $datosCliente['razon_social'] = $request->razon_social;
                $datosCliente['direccion_fiscal'] = $request->direccion_fiscal;
                $datosCliente['ofrece_facturacion'] = $request->boolean('ofrece_facturacion');
            }

            // Procesar horarios
            $datosCliente['horarios'] = $this->procesarHorarios($request);

            // Crear el cliente
            $cliente = Cliente::create($datosCliente);

            // Confirmar transacción
            DB::commit();

            // Log de éxito
            Log::info('Cliente creado exitosamente', [
                'cliente_id' => $cliente->id,
                'user_id' => auth()->id(),
                'nombre' => $cliente->nombre_negocio,
            ]);

            // Redireccionar con mensaje de éxito
            return redirect()
                ->route('dashboard')
                ->with('success', '¡Registro completado exitosamente! Tu negocio ha sido registrado.');

        } catch (\Exception $e) {
            // Revertir transacción
            DB::rollBack();

            // Log del error
            Log::error('Error al crear cliente', [
                'user_id' => auth()->id(),
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Redireccionar con error
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Ocurrió un error al registrar el negocio. Por favor, intenta nuevamente.');
        }
    }

    // MÉTODO DE PRUEBA PARA EL CATCH - DETERMINA EL ERROR AL REGISTRAR
    /*
    public function store(StoreClienteRequest $request): RedirectResponse
    {
        try {
            // Iniciar transacción
            DB::beginTransaction();

            // Preparar datos del cliente
            $datosCliente = [
                'user_id' => auth()->id(),
                'nombre_negocio' => $request->nombre_negocio,
                'tipo_negocio' => $request->tipo_negocio,
                'formalidad' => $request->formalidad,
                'tipo_cuenta' => $request->tipo_cuenta,
                'telefono' => $request->telefono,
                'direccion_completa' => $request->direccion_completa,
                'ciudad' => $request->ciudad,
                'estado' => $request->estado,
                'codigo_postal' => $request->codigo_postal,
                'metodos_pago' => $request->metodos_pago ?? [],
                'cierra_dias_festivos' => $request->boolean('cierra_dias_festivos'),
                'activo' => true,
                'verificado' => false,
            ];

            // Agregar información fiscal si es formal
            if ($request->formalidad === 'formal') {
                $datosCliente['rfc'] = $request->rfc;
                $datosCliente['razon_social'] = $request->razon_social;
                $datosCliente['direccion_fiscal'] = $request->direccion_fiscal;
                $datosCliente['ofrece_facturacion'] = $request->boolean('ofrece_facturacion');
            }

            // Procesar horarios
            $datosCliente['horarios'] = $this->procesarHorarios($request);
            
            // --- Para depurar, podemos ver los datos justo antes de guardar ---
            // 1. Descomenta la siguiente línea si quieres ver el array exacto:
            // dd($datosCliente); 

            // Crear el cliente
            $cliente = Cliente::create($datosCliente); // <-- El error probablemente está aquí

            // Confirmar transacción
            DB::commit();

            // Log de éxito
            Log::info('Cliente creado exitosamente', [
                'cliente_id' => $cliente->id,
                'user_id' => auth()->id(),
                'nombre' => $cliente->nombre_negocio,
            ]);

            // Redireccionar con mensaje de éxito
            return redirect()
                ->route('dashboard')
                ->with('success', '¡Registro completado exitosamente! Tu negocio ha sido registrado.');

        } catch (\Exception $e) {
            // Revertir transacción
            DB::rollBack();

            // ----- MODIFICACIÓN DE DEPURACIÓN -----
            // 1. Comentamos el log y la redirección
            // Log::error('Error al crear cliente', [
            //     'user_id' => auth()->id(),
            //     'error' => $e->getMessage(),
            //     'trace' => $e->getTraceAsString(),
            // ]);
            // return redirect()
            //     ->back()
            //     ->withInput()
            //     ->with('error', 'Ocurrió un error al registrar el negocio. Por favor, intenta nuevamente.');
                
            // 2. "Escupimos" la excepción completa
            dd($e);
            
            // 3. (Alternativa) O simplemente relanzamos la excepción para ver la página de error de Laravel
            // throw $e; 
            // ----- FIN DE LA MODIFICACIÓN -----
        }
    }
    */
    /**
     * Muestra un cliente específico.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Muestra el formulario para editar un cliente.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Actualiza un cliente.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Elimina un cliente.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Procesa y estructura los horarios del formulario.
     * 
     * @param StoreClienteRequest $request
     * @return array
     */
    private function procesarHorarios(StoreClienteRequest $request): array
    {
        $horarios = [];

        // Lunes a Viernes
        if ($request->filled('horarios.lunes_viernes.apertura') && 
            $request->filled('horarios.lunes_viernes.cierre')) {
            $horarios['lunes_viernes'] = [
                'apertura' => $request->input('horarios.lunes_viernes.apertura'),
                'cierre' => $request->input('horarios.lunes_viernes.cierre'),
            ];
        }

        // Sábados
        if ($request->filled('horarios.sabados.apertura') && 
            $request->filled('horarios.sabados.cierre')) {
            $horarios['sabados'] = [
                'apertura' => $request->input('horarios.sabados.apertura'),
                'cierre' => $request->input('horarios.sabados.cierre'),
            ];
        }

        // Domingos
        if ($request->filled('horarios.domingos.apertura') && 
            $request->filled('horarios.domingos.cierre')) {
            $horarios['domingos'] = [
                'apertura' => $request->input('horarios.domingos.apertura'),
                'cierre' => $request->input('horarios.domingos.cierre'),
            ];
        }

        // Días festivos
        if ($request->filled('horarios.festivos.apertura') && 
            $request->filled('horarios.festivos.cierre')) {
            $horarios['festivos'] = [
                'apertura' => $request->input('horarios.festivos.apertura'),
                'cierre' => $request->input('horarios.festivos.cierre'),
            ];
        }

        return $horarios;
    }
}