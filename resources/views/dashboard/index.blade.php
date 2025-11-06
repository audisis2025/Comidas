@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Botón "Termina tu registro" -->
            <div class="mb-6">
                <div class="bg-white border border-green-200 rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            
                            <div>
                                <h3 class="text-lg font-medium text-green-800">¡Estás a un paso de comenzar!</h3>
                                <p class="text-green-600 text-sm">Completa tu información para activar todas las funciones</p>
                            </div>
                        </div>
                        <!-- Botón grande que redirige a nueva vista -->
                        <a href="{{ route('registro.completar') }}" class="!bg-green-600 !hover:bg-green-700 !text-white font-bold py-3 px-6 rounded-lg transition duration-200 flex items-center text-lg" style="background-color: #16a34a !important; color: white !important;">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Terminar Registro
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contenido existente del dashboard -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">
                        {{ __('Bienvenido a tu Dashboard') }}
                    </h3>
                    
                    <p class="text-gray-600">
                        {{ __("Has iniciado sesión correctamente!") }}
                    </p>

                    <!-- Aquí puedes agregar más contenido de tu dashboard -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-blue-600 font-semibold">Establecimientos</p>
                            <p class="text-2xl font-bold text-blue-700">0</p>
                            <p class="text-sm text-blue-600">Registrados</p>
                        </div>
                        
                        <div class="bg-green-50 p-4 rounded-lg">
                            <p class="text-green-600 font-semibold">Promociones</p>
                            <p class="text-2xl font-bold text-green-700">0</p>
                            <p class="text-sm text-green-600">Activas</p>
                        </div>
                        
                        <div class="bg-purple-50 p-4 rounded-lg">
                            <p class="text-purple-600 font-semibold">Suscripción</p>
                            <p class="text-2xl font-bold text-purple-700">Gratis</p>
                            <p class="text-sm text-purple-600">Plan actual</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection