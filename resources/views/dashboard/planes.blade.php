@extends('layouts.app')

@section('title', 'Gestión de Planes')

@section('content')
<x-dashboard.layout title="Planes de Suscripción" subtitle="Elige el plan que mejor se adapte a tu negocio">
    
    {{-- Grid de planes --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
        
        {{-- Plan Básico --}}
        <div class="border-2 border-blue-300 rounded-lg p-6 bg-white">
            <div class="text-center mb-6">
                <h3 class="text-2xl font-bold text-blue-600 mb-2">Plan Básico</h3>
                <div class="text-3xl font-bold text-gray-800">$299<span class="text-lg text-gray-600">/mes</span></div>
                <p class="text-green-600 font-semibold mt-2">✅ Plan Actual</p>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Datos básicos del negocio</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Gestión de menús</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Horarios de atención</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Tipos de pago aceptados</span>
                </li>
                <li class="flex items-center text-gray-400">
                    <span class="mr-2">✗</span>
                    <span>Promociones y anuncios</span>
                </li>
                <li class="flex items-center text-gray-400">
                    <span class="mr-2">✗</span>
                    <span>Banners destacados</span>
                </li>
            </ul>

            <button class="w-full bg-gray-400 text-white py-3 rounded font-semibold cursor-not-allowed" disabled>
                Plan Actual
            </button>
        </div>

        {{-- Plan Premium --}}
        <div class="border-2 border-purple-500 rounded-lg p-6 bg-purple-50 shadow-lg">
            <div class="text-center mb-6">
                <h3 class="text-2xl font-bold text-purple-600 mb-2">Plan Premium</h3>
                <div class="text-3xl font-bold text-gray-800">$599<span class="text-lg text-gray-600">/mes</span></div>
                <p class="text-orange-600 font-semibold mt-2">🚀 Recomendado</p>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Todas las funciones del plan Básico</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Promociones ilimitadas</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Banners destacados</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Notificaciones push</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Sistema de calificaciones</span>
                </li>
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    <span>Compartir en redes sociales</span>
                </li>
            </ul>

            <button class="w-full bg-purple-500 hover:bg-purple-600 text-white py-3 rounded font-semibold transition duration-200">
                Actualizar a Premium
            </button>
        </div>

    </div>

    {{-- Información adicional --}}
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
        <h4 class="font-semibold text-blue-800 mb-2">💡 Información importante</h4>
        <ul class="text-blue-700 text-sm space-y-1">
            <li>• Los cambios de plan se reflejan inmediatamente</li>
            <li>• No hay reembolsos por cambios de plan</li>
            <li>• Puedes cambiar de plan en cualquier momento</li>
        </ul>
    </div>

</x-dashboard.layout>
@endsection