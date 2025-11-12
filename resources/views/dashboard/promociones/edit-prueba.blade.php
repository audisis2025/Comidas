@extends('layouts.app')

@section('title', 'Editar Promoción')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Vista de Prueba - Editar Promoción') }}
        </h2>
    </div>

    {{-- Banner de prueba --}}
    <div class="mb-6 p-4 bg-[#241178] bg-opacity-10 border border-[#241178] rounded-lg">
        <div class="flex items-center">
            <x-heroicon-o-sparkles class="h-5 w-5 text-[#241178] mr-3" />
            <div>
                <p class="text-[#241178] font-medium">VISTA DE PRUEBA FUNCIONAL</p>
                <p class="text-[#241178] text-sm">Esta es una vista de prueba a la que llegaste al hacer clic en "Editar"</p>
            </div>
        </div>
    </div>

    {{-- Botón volver --}}
    <div class="mb-6">
        <a href="{{ route('promociones.index') }}" class="text-[#241178] hover:text-[#1a0d5a] font-medium flex items-center transition duration-200">
            <x-heroicon-o-arrow-left class="h-4 w-4 mr-2" />
            {{ __('Volver a Promociones') }}
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-6">
                Editando promoción #{{ request()->route('id') ?? '1' }}
            </h3>

            {{-- Información de la promoción --}}
            <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                <h4 class="font-medium text-gray-900 mb-3 flex items-center gap-2">
                    <x-heroicon-o-information-circle class="h-5 w-5 text-gray-600" />
                    Información de la promoción:
                </h4>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center gap-2">
                        <x-heroicon-o-hashtag class="h-4 w-4 text-gray-400" />
                        <strong>ID:</strong> {{ request()->route('id') ?? '1' }}
                    </li>
                    <li class="flex items-center gap-2">
                        <x-heroicon-o-tag class="h-4 w-4 text-gray-400" />
                        <strong>Nombre:</strong> Promoción de prueba
                    </li>
                    <li class="flex items-center gap-2">
                        <x-heroicon-o-check-badge class="h-4 w-4 text-green-500" />
                        <strong>Estado:</strong> Activa
                    </li>
                    <li class="flex items-center gap-2">
                        <x-heroicon-o-link class="h-4 w-4 text-gray-400" />
                        <strong>URL:</strong> {{ url()->current() }}
                    </li>
                </ul>
            </div>

            {{-- Formulario de prueba --}}
            <form action="#" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Nombre de la Promoción</label>
                        <input type="text" value="Promoción de Prueba #{{ request()->route('id') ?? '1' }}" 
                               class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#241178] focus:border-[#241178] transition duration-200">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tipo</label>
                        <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#241178] focus:border-[#241178] transition duration-200">
                            <option>2x1</option>
                            <option>Descuento</option>
                            <option>Envío Gratis</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
                    <textarea rows="3" 
                              class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#241178] focus:border-[#241178] transition duration-200">Esta es una descripción de prueba para la promoción #{{ request()->route('id') ?? '1' }}</textarea>
                </div>

                {{-- Fechas y horarios --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Fecha Inicio</label>
                        <input type="date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#241178] focus:border-[#241178] transition duration-200">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Fecha Fin</label>
                        <input type="date" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#241178] focus:border-[#241178] transition duration-200">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Horario</label>
                        <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#241178] focus:border-[#241178] transition duration-200">
                            <option>Todo el día</option>
                            <option>Horario específico</option>
                            <option>Fines de semana</option>
                        </select>
                    </div>
                </div>

                {{-- Configuración adicional --}}
                <div class="border-t border-gray-200 pt-6">
                    <h4 class="text-lg font-medium text-gray-900 mb-4 flex items-center gap-2">
                        <x-heroicon-o-cog-6-tooth class="h-5 w-5 text-gray-600" />
                        Configuración Adicional
                    </h4>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" id="active" checked class="h-4 w-4 text-[#241178] focus:ring-[#241178] border-gray-300 rounded">
                            <label for="active" class="ml-2 block text-sm text-gray-700">Promoción activa</label>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="featured" class="h-4 w-4 text-[#241178] focus:ring-[#241178] border-gray-300 rounded">
                            <label for="featured" class="ml-2 block text-sm text-gray-700">Destacar en página principal</label>
                        </div>
                    </div>
                </div>

                {{-- Botones --}}
                <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                    <a href="{{ route('promociones.index') }}" 
                       class="px-6 py-3 bg-gray-100 text-gray-700 rounded-md hover:bg-gray-200 transition duration-200 font-medium flex items-center gap-2">
                        <x-heroicon-o-x-mark class="h-4 w-4" />
                        {{ __('Cancelar') }}
                    </a>
                    <button type="button" 
                            onclick="alert('¡Funciona! Esta es una vista de prueba 🎉')" 
                            class="px-8 py-3 bg-[#DC6601] hover:bg-[#c45a01] text-white rounded-md transition duration-200 font-medium flex items-center gap-2">
                        <x-heroicon-o-check-circle class="h-4 w-4" />
                        {{ __('Probar Funcionalidad') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Información de desarrollo --}}
    <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <div class="flex items-start">
            <x-heroicon-o-code-bracket class="h-5 w-5 text-blue-600 mr-3 mt-0.5" />
            <div>
                <p class="text-blue-800 font-medium">Información para desarrollo</p>
                <p class="text-blue-700 text-sm mt-1">
                    Esta vista simula la funcionalidad de edición. En una implementación real, 
                    aquí se cargarían los datos de la promoción desde la base de datos y se 
                    procesaría el formulario de actualización.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection