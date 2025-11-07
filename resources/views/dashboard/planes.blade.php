@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-[#000000] leading-tight">
        {{ __('Planes de Suscripción') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Grid de planes --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                
                {{-- Plan Básico --}}
                <div class="border-2 border-[#241178] rounded-lg p-6 bg-[#FFFFFF]">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold text-[#241178] mb-2">Plan Básico</h3>
                        <div class="text-3xl font-bold text-[#000000]">$299<span class="text-lg text-[#000000]">/mes</span></div>
                        <p class="text-[#4CAF50] font-semibold mt-2">✅ Plan Actual</p>
                    </div>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Datos básicos del negocio</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Gestión de menús</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Horarios de atención</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Tipos de pago aceptados</span>
                        </li>
                        <li class="flex items-center text-[#000000] opacity-50">
                            <span class="mr-2">✗</span>
                            <span>Promociones y anuncios</span>
                        </li>
                        <li class="flex items-center text-[#000000] opacity-50">
                            <span class="mr-2">✗</span>
                            <span>Banners destacados</span>
                        </li>
                    </ul>

                    <button class="w-full bg-gray-400 text-[#FFFFFF] py-3 rounded font-semibold cursor-not-allowed" disabled>
                        Plan Actual
                    </button>
                </div>

                {{-- Plan Premium --}}
                <div class="border-2 border-[#DC6601] rounded-lg p-6 bg-[#DC6601] bg-opacity-10 shadow-lg">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold text-[#DC6601] mb-2">Plan Premium</h3>
                        <div class="text-3xl font-bold text-[#000000]">$599<span class="text-lg text-[#000000]">/mes</span></div>
                        <p class="text-[#272800] font-semibold mt-2">🚀 Recomendado</p>
                    </div>

                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Todas las funciones del plan Básico</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Promociones ilimitadas</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Banners destacados</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Notificaciones push</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Sistema de calificaciones</span>
                        </li>
                        <li class="flex items-center">
                            <span class="text-[#4CAF50] mr-2">✓</span>
                            <span class="text-[#000000]">Compartir en redes sociales</span>
                        </li>
                    </ul>

                    {{-- Botón con fondo forzado --}}
                    <a href="{{ route('pagos.datos-bancarios') }}" 
                       class="w-full bg-[#DC6601] hover:bg-[#c45a01] text-[#FFFFFF] py-3 rounded font-semibold transition duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Actualizar a Premium
                    </a>
                </div>

            </div>

            {{-- Información adicional --}}
            <div class="bg-[#241178] bg-opacity-10 border border-[#241178] rounded-lg p-4">
                <h4 class="font-semibold text-[#241178] mb-2">💡 Información importante</h4>
                <ul class="text-[#000000] text-sm space-y-1">
                    <li>• Los cambios de plan se reflejan inmediatamente</li>
                    <li>• No hay reembolsos por cambios de plan</li>
                    <li>• Puedes cambiar de plan en cualquier momento</li>
                </ul>
            </div>

        </div>
    </div>
@endsection