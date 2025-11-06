@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Verificación de Datos Fiscales') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <h3 class="text-lg font-medium text-gray-900 mb-6">
                        {{ __('Estado de Verificación Fiscal') }}
                    </h3>

                    {{-- Tarjeta de estado de verificación --}}
                    <div class="mb-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            
                            {{-- Estado de verificación --}}
                            <div class="border rounded-lg p-6 text-center">
                                <div class="mb-4">
                                    @php
                                        $verificado = false; // Por defecto no verificado
                                    @endphp
                                    
                                    @if($verificado)
                                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                            <span class="text-2xl text-green-600">✓</span>
                                        </div>
                                        <h4 class="text-xl font-bold text-green-600">VERIFICADO</h4>
                                    @else
                                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                            <span class="text-2xl text-red-600">✗</span>
                                        </div>
                                        <h4 class="text-xl font-bold text-red-600">NO VERIFICADO</h4>
                                    @endif
                                </div>
                                <p class="text-gray-600 text-sm">
                                    @if($verificado)
                                        Tus datos fiscales han sido verificados correctamente
                                    @else
                                        Completa tu información fiscal para la verificación
                                    @endif
                                </p>
                            </div>

                            {{-- Información fiscal --}}
                            <div class="border rounded-lg p-6">
                                <h4 class="font-semibold text-gray-800 mb-4">Datos Fiscales Registrados</h4>
                                
                                @if($verificado)
                                    <div class="space-y-3">
                                        <div>
                                            <label class="text-sm text-gray-600">RFC:</label>
                                            <p class="font-medium">XAXX010101000</p>
                                        </div>
                                        <div>
                                            <label class="text-sm text-gray-600">Razón Social:</label>
                                            <p class="font-medium">MI EMPRESA SA DE CV</p>
                                        </div>
                                        <div>
                                            <label class="text-sm text-gray-600">Dirección Fiscal:</label>
                                            <p class="font-medium">Av. Principal #123, Col. Centro, CDMX</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="text-center py-4">
                                        <p class="text-gray-500 mb-4">No hay datos fiscales registrados</p>
                                        <a href="{{ route('registro.completar') }}" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded font-semibold transition duration-200">
                                            Completar Registro Fiscal
                                        </a>
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>

                    {{-- Proceso de verificación --}}
                    <div class="border-t pt-6">
                        <h4 class="font-semibold text-gray-800 mb-4">Proceso de Verificación</h4>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <span class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">1</span>
                                </div>
                                <div class="ml-4">
                                    <p class="font-medium text-gray-800">Completa tu información fiscal</p>
                                    <p class="text-sm text-gray-600">Ingresa tu RFC, razón social y dirección fiscal exacta</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <span class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">2</span>
                                </div>
                                <div class="ml-4">
                                    <p class="font-medium text-gray-800">Validación automática</p>
                                    <p class="text-sm text-gray-600">El sistema verifica tus datos con las autoridades fiscales</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <span class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center text-sm font-bold">3</span>
                                </div>
                                <div class="ml-4">
                                    <p class="font-medium text-gray-800">Verificación completada</p>
                                    <p class="text-sm text-gray-600">Recibirás un estatus "VERIFICADO" en tu perfil</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Acciones --}}
                    <div class="flex justify-end space-x-4 mt-8 pt-6 border-t">
                        @if($verificado)
                            <button class="px-6 py-3 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition duration-200 font-medium">
                                Descargar Constancia
                            </button>
                            <button class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200 font-medium">
                                Actualizar Datos
                            </button>
                        @else
                            <a href="{{ route('registro.completar') }}" 
                                class="px-6 py-3 text-white rounded transition duration-200 font-medium flex items-center justify-center"
                                style="background-color: #16a34a !important;">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    Completar Verificación
                            </a>
                            
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection