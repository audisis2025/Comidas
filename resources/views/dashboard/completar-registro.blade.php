@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-[#000000] leading-tight">
        {{ __('Completar Registro') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#FFFFFF] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-[#FFFFFF] border-b border-gray-200">
                    <h3 class="text-lg font-medium text-[#000000] mb-6">
                        {{ __('Completa tu información de negocio') }}
                    </h3>

                    {{-- ... (Bloque de errores y éxito - sin cambios) ... --}}
                    @if ($errors->any())
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">Por favor corrige los siguientes errores:</h3>
                                <ul class="mt-2 text-sm text-red-700 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="bg-green-50 border-l-4 border-green-500 p-4 mb-6">
                        {{-- ... (Tu código de éxito) ... --}}
                    </div>
                    @endif


                    {{-- INICIO DEL FORMULARIO --}}
                    <form action="{{ route('clientes.store') }}" method="POST" class="space-y-6">
                    @csrf
                        <div>
                            <label for="nombre_negocio" class="block text-sm font-medium text-[#000000]">Nombre del negocio *</label>
                            <input type="text" id="nombre_negocio" name="nombre_negocio" value="{{ old('nombre_negocio') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" placeholder="Ej: Mi Restaurante" required>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="tipo_negocio" class="block text-sm font-medium text-[#000000]">Tipo de negocio *</label>
                                <select id="tipo_negocio" name="tipo_negocio" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
                                    <option value="">Selecciona...</option>
                                    <option value="Restaurante" {{ old('tipo_negocio') == 'Restaurante' ? 'selected' : '' }}>Restaurante</option>
                                    <option value="Cafetería" {{ old('tipo_negocio') == 'Cafetería' ? 'selected' : '' }}>Cafetería</option>
                                    <option value="Food Truck" {{ old('tipo_negocio') == 'Food Truck' ? 'selected' : '' }}>Food Truck</option>
                                    <option value="Panadería" {{ old('tipo_negocio') == 'Panadería' ? 'selected' : '' }}>Panadería</option>
                                    <option value="Bar" {{ old('tipo_negocio') == 'Bar' ? 'selected' : '' }}>Bar</option>
                                    <option value="Otro" {{ old('tipo_negocio') == 'Otro' ? 'selected' : '' }}>Otro</option>
                                </select>
                            </div>
                            <div>
                                <label for="formalidad" class="block text-sm font-medium text-[#000000]">Formalidad del negocio *</label>
                                <select id="formalidad" name="formalidad" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
                                    <option value="">Selecciona...</option>
                                    <option value="formal" {{ old('formalidad') == 'formal' ? 'selected' : '' }}>Formal (con registro ante SAT)</option>
                                    <option value="informal" {{ old('formalidad') == 'informal' ? 'selected' : '' }}>Informal (sin registro formal)</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="tipo_cuenta" class="block text-sm font-medium text-[#000000]">Tipo de cuenta *</label>
                                <select id="tipo_cuenta" name="tipo_cuenta" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
                                    <option value="">Selecciona...</option>
                                    <option value="basica" {{ old('tipo_cuenta') == 'basica' ? 'selected' : '' }}>Básica (Gratuita)</option>
                                    <option value="premium" {{ old('tipo_cuenta') == 'premium' ? 'selected' : '' }}>Premium (De pago)</option>
                                </select>
                            </div>
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-[#000000]">Teléfono *</label>
                                <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" placeholder="+52 123 456 7890" required>
                            </div>
                        </div>

                        <!-- SECCIÓN FISCAL CONDICIONAL -->
                        <div id="seccion-fiscal" class="border-t pt-6" style="display: {{ old('formalidad') == 'formal' ? 'block' : 'none' }};">
                            <h4 class="text-md font-medium text-[#000000] mb-4">Información Fiscal</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="rfc" class="block text-sm font-medium text-[#000000]">RFC</label>
                                    <input type="text" id="rfc" name="rfc" value="{{ old('rfc') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" placeholder="Ej: XAXX010101000">
                                </div>
                                <div>
                                    <label for="razon_social" class="block text-sm font-medium text-[#000000]">Razón Social</label>
                                    <input type="text" id="razon_social" name="razon_social" value="{{ old('razon_social') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" placeholder="Nombre legal de la empresa">
                                </div>
                            </div>

                            <div class="mt-4">
                                <label for="direccion_fiscal" class="block text-sm font-medium text-[#000000]">Dirección Fiscal</label>
                                <textarea id="direccion_fiscal" name="direccion_fiscal" rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" placeholder="Dirección registrada ante el SAT">{{ old('direccion_fiscal') }}</textarea>
                            </div>

                            <div class="mt-4">
                                <label class="flex items-center">
                                    <input type="checkbox" id="ofrece_facturacion" name="ofrece_facturacion" value="1" {{ old('ofrece_facturacion') ? 'checked' : '' }} class="rounded border-gray-300 text-[#4CAF50] shadow-sm focus:border-[#4CAF50] focus:ring-[#4CAF50]">
                                    <span class="ml-2 text-sm text-[#000000]">Ofrece facturación a clientes</span>
                                </label>
                            </div>
                        </div>
                        <!-- FIN DE SECCIÓN FISCAL -->


                        <div class="border-t pt-6">
                            <h4 class="text-md font-medium text-[#000000] mb-4">Dirección del Establecimiento</h4>
                            
                            <div>
                                <label for="direccion_completa" class="block text-sm font-medium text-[#000000]">Dirección completa *</label>
                                <textarea id="direccion_completa" name="direccion_completa" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" placeholder="Calle, número, colonia, ciudad..." required>{{ old('direccion_completa') }}</textarea>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                                <div>
                                    <label for="ciudad" class="block text-sm font-medium text-[#000000]">Ciudad *</label>
                                    <input type="text" id="ciudad" name="ciudad" value="{{ old('ciudad') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
                                </div>
                                <div>
                                    <label for="estado" class="block text-sm font-medium text-[#000000]">Estado *</label>
                                    <input type="text" id="estado" name="estado" value="{{ old('estado') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
                                </div>
                                <div>
                                    <label for="codigo_postal" class="block text-sm font-medium text-[#000000]">Código Postal *</label>
                                    <input type="text" id="codigo_postal" name="codigo_postal" value="{{ old('codigo_postal') }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
                                </div>
                            </div>
                        </div>

                        <div class="border-t pt-6">
                           {{-- ... (Métodos de Pago - sin cambios) ... --}}
                            <h4 class="text-md font-medium text-[#000000] mb-4">Métodos de Pago Aceptados</h4>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                @php $metodos_pago_old = old('metodos_pago', []); @endphp
                                @foreach (['Efectivo', 'Tarjeta Débito', 'Tarjeta Crédito', 'Transferencia', 'Pago Móvil', 'PayPal', 'Mercado Pago', 'Otro'] as $metodo)
                                <label class="flex items-center">
                                    <input type="checkbox" name="metodos_pago[]" value="{{ $metodo }}" {{ in_array($metodo, $metodos_pago_old) ? 'checked' : '' }} class="rounded border-gray-300 text-[#4CAF50] shadow-sm focus:border-[#4CAF50] focus:ring-[#4CAF50]">
                                    <span class="ml-2 text-sm text-[#000000]">{{ $metodo }}</span>
                                </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="border-t pt-6">
                            {{-- ... (Horarios - sin cambios) ... --}}
                            <h4 class="text-md font-medium text-[#000000] mb-4">Horarios de Atención *</h4>
                            <div class="space-y-4">
                                <div class="flex flex-col md:flex-row md:items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm font-medium text-[#000000] mb-2 md:mb-0">Lunes a Viernes</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" name="horarios[lunes_viernes][apertura]" value="{{ old('horarios.lunes_viernes.apertura') }}" class="border-gray-300 rounded-md shadow-sm w-32 focus:border-[#241178] focus:ring-[#241178]" required>
                                        <span class="text-[#000000]">a</span>
                                        <input type="time" name="horarios[lunes_viernes][cierre]" value="{{ old('horarios.lunes_viernes.cierre') }}" class="border-gray-300 rounded-md shadow-sm w-32 focus:border-[#241178] focus:ring-[#241178]" required>
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row md:items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm font-medium text-[#000000] mb-2 md:mb-0">Sábados</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" name="horarios[sabados][apertura]" value="{{ old('horarios.sabados.apertura') }}" class="border-gray-300 rounded-md shadow-sm w-32 focus:border-[#241178] focus:ring-[#241178]">
                                        <span class="text-[#000000]">a</span>
                                        <input type="time" name="horarios[sabados][cierre]" value="{{ old('horarios.sabados.cierre') }}" class="border-gray-300 rounded-md shadow-sm w-32 focus:border-[#241178] focus:ring-[#241178]">
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row md:items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm font-medium text-[#000000] mb-2 md:mb-0">Domingos</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" name="horarios[domingos][apertura]" value="{{ old('horarios.domingos.apertura') }}" class="border-gray-300 rounded-md shadow-sm w-32 focus:border-[#241178] focus:ring-[#241178]">
                                        <span class="text-[#000000]">a</span>
                                        <input type="time" name="horarios[domingos][cierre]" value="{{ old('horarios.domingos.cierre') }}" class="border-gray-300 rounded-md shadow-sm w-32 focus:border-[#241178] focus:ring-[#241178]">
                                    </div>
                                </div>
                                <div class="flex flex-col md:flex-row md:items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm font-medium text-[#000000] mb-2 md:mb-0">Días Festivos</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" name="horarios[festivos][apertura]" value="{{ old('horarios.festivos.apertura') }}" class="border-gray-300 rounded-md shadow-sm w-32 focus:border-[#241178] focus:ring-[#241178]">
                                        <span class="text-[#000000]">a</span>
                                        <input type="time" name="horarios[festivos][cierre]" value="{{ old('horarios.festivos.cierre') }}" class="border-gray-300 rounded-md shadow-sm w-32 focus:border-[#241178] focus:ring-[#241178]">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <label class="flex items-center">
                                    <input type="checkbox" id="cierra_dias_festivos" name="cierra_dias_festivos" value="1" {{ old('cierra_dias_festivos') ? 'checked' : '' }} class="rounded border-gray-300 text-[#4CAF50] shadow-sm focus:border-[#4CAF50] focus:ring-[#4CAF50]">
                                    <span class="ml-2 text-sm text-[#000000]">Cerramos los días festivos</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex justify-between items-center pt-6 border-t">
                            {{-- ... (Botones - sin cambios) ... --}}
                            <div class="flex space-x-4">
                                <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-gray-300 text-[#000000] rounded-md hover:bg-gray-400 transition duration-200 font-medium">
                                    Cancelar
                                </a>
                                <button type="submit" name="action" value="save" class="px-6 py-3 bg-[#DC6601] hover:bg-[#c45a01] text-[#FFFFFF] rounded-md transition duration-200 font-medium flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- SCRIPT PARA OCULTAR/MOSTRAR SECCIÓN FISCAL --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const formalidadSelect = document.getElementById('formalidad');
            const seccionFiscal = document.getElementById('seccion-fiscal');

            // Función para mostrar/ocultar la sección fiscal
            function toggleFiscalSection() {
                if (formalidadSelect.value === 'formal') {
                    seccionFiscal.style.display = 'block';
                } else {
                    seccionFiscal.style.display = 'none';
                }
            }

            // Llamar a la función al cargar la página (para respetar el 'old value')
            toggleFiscalSection();

            // Escuchar cambios en el select
            formalidadSelect.addEventListener('change', toggleFiscalSection);
        });
    </script>
@endsection