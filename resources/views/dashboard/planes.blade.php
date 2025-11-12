@extends('layouts.app')

@section('title', 'Planes de Suscripción')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Planes de Suscripción') }}
        </h2>
        <p class="text-gray-600 mt-2">Elige el plan que mejor se adapte a las necesidades de tu negocio</p>
    </div>

    {{-- Grid de planes --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
        
        {{-- Plan Básico --}}
        <div class="bg-white border-2 border-[#241178] rounded-lg p-6 shadow-sm">
            <div class="text-center mb-6">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-[#241178] rounded-full mb-4">
                    <x-heroicon-o-sparkles class="h-6 w-6 text-white" />
                </div>
                <h3 class="text-2xl font-bold text-[#241178] mb-2">Plan Básico</h3>
                <div class="text-3xl font-bold text-gray-900">$299<span class="text-lg text-gray-600">/mes</span></div>
                <div class="mt-3">
                    <span class="inline-flex items-center gap-2 bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                        <x-heroicon-o-check-badge class="h-4 w-4" />
                        Plan Actual
                    </span>
                </div>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Datos básicos del negocio</span>
                </li>
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Gestión de menús</span>
                </li>
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Horarios de atención</span>
                </li>
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Tipos de pago aceptados</span>
                </li>
                <li class="flex items-center text-gray-400">
                    <x-heroicon-o-x-circle class="h-5 w-5 mr-3" />
                    <span>Promociones y anuncios</span>
                </li>
                <li class="flex items-center text-gray-400">
                    <x-heroicon-o-x-circle class="h-5 w-5 mr-3" />
                    <span>Banners destacados</span>
                </li>
            </ul>

            <button class="w-full bg-gray-300 text-gray-600 py-3 rounded-lg font-semibold cursor-not-allowed transition duration-200 flex items-center justify-center gap-2" disabled>
                <x-heroicon-o-check-badge class="h-5 w-5" />
                Plan Actual
            </button>
        </div>

        {{-- Plan Premium --}}
        <div class="bg-white border-2 border-[#DC6601] rounded-lg p-6 shadow-lg relative">
            {{-- Badge Recomendado --}}
            <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                <span class="bg-[#DC6601] text-white px-4 py-1 rounded-full text-sm font-medium flex items-center gap-1">
                    <x-heroicon-o-rocket-launch class="h-4 w-4" />
                    Recomendado
                </span>
            </div>

            <div class="text-center mb-6 pt-4">
                <div class="inline-flex items-center justify-center w-12 h-12 bg-[#DC6601] rounded-full mb-4">
                    <x-heroicon-o-star class="h-6 w-6 text-white" />
                </div>
                <h3 class="text-2xl font-bold text-[#DC6601] mb-2">Plan Premium</h3>
                <div class="text-3xl font-bold text-gray-900">$599<span class="text-lg text-gray-600">/mes</span></div>
                <p class="text-gray-600 mt-2">Ideal para negocios en crecimiento</p>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Todas las funciones del plan Básico</span>
                </li>
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Promociones ilimitadas</span>
                </li>
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Banners destacados</span>
                </li>
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Notificaciones push</span>
                </li>
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Sistema de calificaciones</span>
                </li>
                <li class="flex items-center">
                    <x-heroicon-o-check-circle class="h-5 w-5 text-green-500 mr-3" />
                    <span class="text-gray-700">Compartir en redes sociales</span>
                </li>
            </ul>

            <a href="{{ route('pagos.datos-bancarios') }}" 
               class="w-full bg-[#DC6601] hover:bg-[#c45a01] text-white py-3 rounded-lg font-semibold transition duration-200 flex items-center justify-center gap-2">
                <x-heroicon-o-arrow-up-circle class="h-5 w-5" />
                Actualizar a Premium
            </a>
        </div>
    </div>

    {{-- Información adicional --}}
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
        <div class="flex items-start">
            <x-heroicon-o-information-circle class="h-6 w-6 text-blue-600 mr-3 mt-0.5" />
            <div>
                <h4 class="font-semibold text-blue-900 mb-3">Información importante</h4>
                <ul class="text-blue-800 space-y-2">
                    <li class="flex items-center gap-2">
                        <x-heroicon-o-clock class="h-4 w-4" />
                        <span>Los cambios de plan se reflejan inmediatamente</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <x-heroicon-o-currency-dollar class="h-4 w-4" />
                        <span>No hay reembolsos por cambios de plan</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <x-heroicon-o-arrows-right-left class="h-4 w-4" />
                        <span>Puedes cambiar de plan en cualquier momento</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Comparación de planes --}}
    <div class="mt-8 bg-white rounded-lg border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Comparación detallada de planes</h3>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 font-medium text-gray-900">Característica</th>
                        <th class="px-4 py-3 font-medium text-[#241178] text-center">Básico</th>
                        <th class="px-4 py-3 font-medium text-[#DC6601] text-center">Premium</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-4 py-3 text-gray-700">Establecimientos</td>
                        <td class="px-4 py-3 text-center">1</td>
                        <td class="px-4 py-3 text-center">Ilimitados</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 text-gray-700">Promociones mensuales</td>
                        <td class="px-4 py-3 text-center">0</td>
                        <td class="px-4 py-3 text-center">Ilimitadas</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 text-gray-700">Banners destacados</td>
                        <td class="px-4 py-3 text-center">
                            <x-heroicon-o-x-circle class="h-4 w-4 text-red-500 inline" />
                        </td>
                        <td class="px-4 py-3 text-center">
                            <x-heroicon-o-check-circle class="h-4 w-4 text-green-500 inline" />
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 text-gray-700">Soporte prioritario</td>
                        <td class="px-4 py-3 text-center">
                            <x-heroicon-o-x-circle class="h-4 w-4 text-red-500 inline" />
                        </td>
                        <td class="px-4 py-3 text-center">
                            <x-heroicon-o-check-circle class="h-4 w-4 text-green-500 inline" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection