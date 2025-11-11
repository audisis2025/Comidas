@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Dashboard') }}
        </h2>
    </div>

    <!-- Banner de registro incompleto -->
    <div class="mb-6">
        <div class="bg-white border border-green-200 rounded-lg p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="p-3 bg-green-100 rounded-lg mr-4">
                        <x-heroicon-o-exclamation-triangle class="h-6 w-6 text-green-600" />
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">¡Estás a un paso de comenzar!</h3>
                        <p class="text-green-600 text-sm">Completa tu información para activar todas las funciones</p>
                    </div>
                </div>
                <a href="{{ route('registro.completar') }}" class="bg-[#DC6601] hover:bg-[#c45a01] text-white font-semibold py-3 px-6 rounded-lg transition duration-200 flex items-center gap-2">
                    <x-heroicon-o-arrow-right class="h-5 w-5" />
                    {{ __('Terminar Registro') }}
                </a>
            </div>
        </div>
    </div>

    <!-- Contenido principal -->
    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">
                {{ __('Bienvenido a tu Dashboard') }}
            </h3>
            
            <p class="text-gray-600 mb-6">
                {{ __("Has iniciado sesión correctamente!") }}
            </p>

            <!-- Estadísticas -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Establecimientos -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center">
                        <div class="p-3 bg-[#241178] rounded-lg mr-4">
                            <x-heroicon-o-building-storefront class="h-6 w-6 text-white" />
                        </div>
                        <div>
                            <p class="text-gray-600 font-medium">Establecimientos</p>
                            <p class="text-2xl font-bold text-gray-900">0</p>
                            <p class="text-sm text-gray-500">Registrados</p>
                        </div>
                    </div>
                </div>
                
                <!-- Promociones -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center">
                        <div class="p-3 bg-[#4CAF50] rounded-lg mr-4">
                            <x-heroicon-o-tag class="h-6 w-6 text-white" />
                        </div>
                        <div>
                            <p class="text-gray-600 font-medium">Promociones</p>
                            <p class="text-2xl font-bold text-gray-900">0</p>
                            <p class="text-sm text-gray-500">Activas</p>
                        </div>
                    </div>
                </div>
                
                <!-- Suscripción -->
                <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                    <div class="flex items-center">
                        <div class="p-3 bg-[#DC6601] rounded-lg mr-4">
                            <x-heroicon-o-credit-card class="h-6 w-6 text-white" />
                        </div>
                        <div>
                            <p class="text-gray-600 font-medium">Suscripción</p>
                            <p class="text-2xl font-bold text-gray-900">Gratis</p>
                            <p class="text-sm text-gray-500">Plan actual</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección adicional (opcional) -->
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Actividad reciente -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h4 class="text-lg font-medium text-gray-900 mb-4">Actividad Reciente</h4>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <x-heroicon-o-check-circle class="h-4 w-4 text-green-500" />
                            <span>Sesión iniciada correctamente</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <x-heroicon-o-clock class="h-4 w-4 text-blue-500" />
                            <span>Último acceso: {{ now()->format('d/m/Y H:i') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Acciones rápidas -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h4 class="text-lg font-medium text-gray-900 mb-4">Acciones Rápidas</h4>
                    <div class="space-y-3">
                        <a href="{{ route('menus.index') }}" class="flex items-center gap-2 text-sm text-[#241178] hover:text-[#1a0d5a] transition-colors">
                            <x-heroicon-o-plus class="h-4 w-4" />
                            <span>Agregar establecimiento</span>
                        </a>
                        <a href="{{ route('promociones.create') }}" class="flex items-center gap-2 text-sm text-[#4CAF50] hover:text-[#3d8b40] transition-colors">
                            <x-heroicon-o-plus class="h-4 w-4" />
                            <span>Crear promoción</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection