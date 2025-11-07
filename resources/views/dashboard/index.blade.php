@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-[#000000] leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Botón "Termina tu registro" -->
            <div class="mb-6">
                <div class="bg-[#FFFFFF] border border-[#4CAF50] rounded-lg p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div>
                                <h3 class="text-lg font-medium text-[#272800]">¡Estás a un paso de comenzar!</h3>
                                <p class="text-[#4CAF50] text-sm">Completa tu información para activar todas las funciones</p>
                            </div>
                        </div>
                        <!-- Botón grande que redirige a nueva vista -->
                        <a href="{{ route('registro.completar') }}" class="bg-[#DC6601] hover:bg-[#c45a01] text-[#FFFFFF] font-bold py-3 px-6 rounded-lg transition duration-200 flex items-center text-lg">
                            Terminar Registro
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contenido existente del dashboard -->
            <div class="bg-[#FFFFFF] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-[#FFFFFF] border-b border-gray-200">
                    <h3 class="text-lg font-medium text-[#000000] mb-4">
                        {{ __('Bienvenido a tu Dashboard') }}
                    </h3>
                    
                    <p class="text-[#000000]">
                        {{ __("Has iniciado sesión correctamente!") }}
                    </p>

                    <!-- Aquí puedes agregar más contenido de tu dashboard -->
                    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-[#241178] p-4 rounded-lg">
                            <p class="text-[#FFFFFF] font-semibold">Establecimientos</p>
                            <p class="text-2xl font-bold text-[#FFFFFF]">0</p>
                            <p class="text-sm text-[#FFFFFF]">Registrados</p>
                        </div>
                        
                        <div class="bg-[#4CAF50] p-4 rounded-lg">
                            <p class="text-[#FFFFFF] font-semibold">Promociones</p>
                            <p class="text-2xl font-bold text-[#FFFFFF]">0</p>
                            <p class="text-sm text-[#FFFFFF]">Activas</p>
                        </div>
                        
                        <div class="bg-[#DC6601] p-4 rounded-lg">
                            <p class="text-[#FFFFFF] font-semibold">Suscripción</p>
                            <p class="text-2xl font-bold text-[#FFFFFF]">Gratis</p>
                            <p class="text-sm text-[#FFFFFF]">Plan actual</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection