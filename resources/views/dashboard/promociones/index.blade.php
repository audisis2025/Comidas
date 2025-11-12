@extends('layouts.app')

@section('title', 'Gestión de Promociones y Banners')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Marketing Digital') }}
        </h2>
        <p class="text-gray-600 mt-2">Gestiona promociones y banners publicitarios</p>
    </div>

    {{-- Pestañas de navegación --}}
    <div class="mb-6 border-b border-gray-200">
        <nav class="-mb-px flex space-x-8">
            <button id="tab-promociones" class="border-b-2 border-[#241178] text-[#241178] py-4 px-1 text-sm font-medium tab-button active" data-tab="promociones">
                {{ __('Promociones') }}
            </button>
            <button id="tab-banners" class="border-b-2 border-transparent text-gray-600 hover:text-[#241178] hover:border-[#241178] py-4 px-1 text-sm font-medium tab-button" data-tab="banners">
                {{ __('Banners') }}
            </button>
        </nav>
    </div>

    {{-- Contenido de Promociones --}}
    <div id="content-promociones" class="tab-content active">
        {{-- Botón de acción principal --}}
        <div class="mb-6">
            <a href="{{ route('promociones.create') }}" class="bg-[#DC6601] hover:bg-[#c45a01] text-white font-semibold py-2 px-4 rounded transition duration-200 inline-flex items-center gap-2">
                <x-heroicon-o-plus class="h-5 w-5" />
                {{ __('Nueva Promoción') }}
            </a>
        </div>

        {{-- Grid de promociones activas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            
            {{-- Promoción ejemplo 1 --}}
            <div class="bg-white border border-[#DC6601] rounded-lg p-6 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-bold text-lg text-gray-900">2x1 en Tacos</h3>
                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Activa</span>
                </div>
                <p class="text-gray-600 mb-4">Disfruta de 2x1 en todos nuestros tacos</p>
                <div class="text-sm text-gray-600 space-y-1">
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-calendar class="h-4 w-4 text-gray-400" />
                        <strong>Válido:</strong> Lunes a Viernes
                    </p>
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-clock class="h-4 w-4 text-gray-400" />
                        <strong>Horario:</strong> 14:00 - 18:00
                    </p>
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-exclamation-circle class="h-4 w-4 text-gray-400" />
                        <strong>Vence:</strong> 30/12/2024
                    </p>
                </div>
                <div class="mt-4 flex space-x-3">
                    <a href="{{ route('promociones.edit', 1) }}" class="text-[#241178] hover:text-[#1a0d5a] text-sm font-medium flex items-center gap-1">
                        <x-heroicon-o-pencil class="h-4 w-4" />
                        Editar
                    </a>
                    <button class="text-red-600 hover:text-red-800 text-sm font-medium flex items-center gap-1">
                        <x-heroicon-o-pause-circle class="h-4 w-4" />
                        Desactivar
                    </button>
                </div>
            </div>

            {{-- Promoción ejemplo 2 --}}
            <div class="bg-white border border-[#241178] rounded-lg p-6 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <h3 class="font-bold text-lg text-gray-900">Envío Gratis</h3>
                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Activa</span>
                </div>
                <p class="text-gray-600 mb-4">Envío gratis en pedidos mayores a $200</p>
                <div class="text-sm text-gray-600 space-y-1">
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-calendar class="h-4 w-4 text-gray-400" />
                        <strong>Válido:</strong> Todos los días
                    </p>
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-currency-dollar class="h-4 w-4 text-gray-400" />
                        <strong>Mínimo:</strong> $200.00
                    </p>
                    <p class="flex items-center gap-2">
                        <x-heroicon-o-exclamation-circle class="h-4 w-4 text-gray-400" />
                        <strong>Vence:</strong> 31/12/2024
                    </p>
                </div>
                <div class="mt-4 flex space-x-3">
                    <a href="{{ route('promociones.edit', 2) }}" class="text-[#241178] hover:text-[#1a0d5a] text-sm font-medium flex items-center gap-1">
                        <x-heroicon-o-pencil class="h-4 w-4" />
                        Editar
                    </a>
                    <button class="text-red-600 hover:text-red-800 text-sm font-medium flex items-center gap-1">
                        <x-heroicon-o-pause-circle class="h-4 w-4" />
                        Desactivar
                    </button>
                </div>
            </div>

        </div>

        {{-- Promociones inactivas --}}
        <div class="border-t border-gray-200 pt-6">
            <h3 class="font-semibold text-lg mb-4 text-gray-900">Promociones Inactivas</h3>
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <x-heroicon-o-inbox class="h-12 w-12 text-gray-400 mx-auto mb-3" />
                <p class="text-gray-600">No hay promociones inactivas</p>
            </div>
        </div>
    </div>

    {{-- Contenido de Banners --}}
    <div id="content-banners" class="tab-content hidden">
        {{-- Estadísticas --}}
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <p class="text-2xl font-bold text-[#241178]">5</p>
                <p class="text-sm text-gray-600">Banners Activos</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <p class="text-2xl font-bold text-[#4CAF50]">12</p>
                <p class="text-sm text-gray-600">Total de Clicks</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <p class="text-2xl font-bold text-[#DC6601]">1,245</p>
                <p class="text-sm text-gray-600">Impresiones</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <p class="text-2xl font-bold text-[#EE0000]">0.96%</p>
                <p class="text-sm text-gray-600">CTR</p>
            </div>
        </div>

        {{-- Botones de acción --}}
        <div class="flex flex-wrap gap-4 mb-6">
            <button class="px-4 py-2 bg-[#241178] text-white rounded-md hover:bg-[#1a0d5a] transition duration-200 flex items-center gap-2">
                <x-heroicon-o-plus class="h-4 w-4" />
                Crear Nuevo Banner
            </button>
            
            <button class="px-4 py-2 bg-[#4CAF50] text-white rounded-md hover:bg-[#45a049] transition duration-200 flex items-center gap-2">
                <x-heroicon-o-arrow-up-tray class="h-4 w-4" />
                Subir Imágenes
            </button>
            
            <button class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700 transition duration-200 flex items-center gap-2">
                <x-heroicon-o-chart-bar class="h-4 w-4" />
                Ver Reportes
            </button>
        </div>

        {{-- Lista de banners --}}
        <h3 class="text-lg font-medium text-gray-900 mb-4">Banners Activos</h3>
        
        <div class="space-y-4">
            {{-- Banner 1 --}}
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center">
                            <x-heroicon-o-photo class="h-8 w-8 text-gray-400" />
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Oferta Especial de Verano</p>
                            <p class="text-sm text-gray-600">Publicado: 05 Nov 2024</p>
                            <p class="text-sm text-gray-600">Vence: 05 Dic 2024</p>
                            <div class="flex items-center mt-1">
                                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full font-medium">Activo</span>
                                <span class="ml-2 text-xs text-gray-600">125 clicks • 2,450 vistas</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button class="px-3 py-1 bg-[#241178] text-white text-sm rounded hover:bg-[#1a0d5a] transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-pencil class="h-3 w-3" />
                            Editar
                        </button>
                        <button class="px-3 py-1 bg-[#DC6601] text-white text-sm rounded hover:bg-[#c45a01] transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-pause-circle class="h-3 w-3" />
                            Pausar
                        </button>
                        <button class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700 transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-trash class="h-3 w-3" />
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>

            {{-- Banner 2 --}}
            <div class="bg-white border border-gray-200 rounded-lg p-4">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center">
                            <x-heroicon-o-photo class="h-8 w-8 text-gray-400" />
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Promo 2x1 en Postres</p>
                            <p class="text-sm text-gray-600">Publicado: 01 Nov 2024</p>
                            <p class="text-sm text-gray-600">Vence: 30 Nov 2024</p>
                            <div class="flex items-center mt-1">
                                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full font-medium">Activo</span>
                                <span class="ml-2 text-xs text-gray-600">89 clicks • 1,780 vistas</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button class="px-3 py-1 bg-[#241178] text-white text-sm rounded hover:bg-[#1a0d5a] transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-pencil class="h-3 w-3" />
                            Editar
                        </button>
                        <button class="px-3 py-1 bg-[#DC6601] text-white text-sm rounded hover:bg-[#c45a01] transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-pause-circle class="h-3 w-3" />
                            Pausar
                        </button>
                        <button class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700 transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-trash class="h-3 w-3" />
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>

            {{-- Banner 3 (Pausado) --}}
            <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-20 h-20 bg-gray-200 rounded-lg flex items-center justify-center">
                            <x-heroicon-o-photo class="h-8 w-8 text-gray-500" />
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Happy Hour Nocturno</p>
                            <p class="text-sm text-gray-600">Publicado: 25 Oct 2024</p>
                            <p class="text-sm text-gray-600">Vence: 25 Nov 2024</p>
                            <div class="flex items-center mt-1">
                                <span class="px-2 py-1 bg-orange-100 text-orange-800 text-xs rounded-full font-medium">Pausado</span>
                                <span class="ml-2 text-xs text-gray-600">45 clicks • 890 vistas</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button class="px-3 py-1 bg-[#241178] text-white text-sm rounded hover:bg-[#1a0d5a] transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-pencil class="h-3 w-3" />
                            Editar
                        </button>
                        <button class="px-3 py-1 bg-[#4CAF50] text-white text-sm rounded hover:bg-[#45a049] transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-play-circle class="h-3 w-3" />
                            Activar
                        </button>
                        <button class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700 transition duration-200 flex items-center gap-1">
                            <x-heroicon-o-trash class="h-3 w-3" />
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Formulario rápido --}}
        <div class="mt-8 border-t border-gray-200 pt-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Crear Banner Rápido</h3>
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nombre del Banner</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" placeholder="Ej: Oferta de Temporada">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Fecha de Vencimiento</label>
                        <input type="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">URL de Destino</label>
                    <input type="url" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" placeholder="https://ejemplo.com/promocion">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Imagen del Banner</label>
                    <input type="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <button type="submit" class="px-4 py-2 bg-[#DC6601] text-white rounded-md hover:bg-[#c45a01] transition duration-200 flex items-center gap-2">
                    <x-heroicon-o-plus class="h-4 w-4" />
                    Crear Banner
                </button>
            </form>
        </div>
    </div>
</div>

{{-- Script para las pestañas --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
                
                // Actualizar botones
                tabButtons.forEach(btn => {
                    btn.classList.remove('active', 'border-[#241178]', 'text-[#241178]');
                    btn.classList.add('border-transparent', 'text-gray-600');
                });
                
                // Actualizar contenido
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    content.classList.add('hidden');
                });

                // Activar pestaña seleccionada
                button.classList.add('active', 'border-[#241178]', 'text-[#241178]');
                button.classList.remove('border-transparent', 'text-gray-600');
                
                document.getElementById(`content-${tabId}`).classList.add('active');
                document.getElementById(`content-${tabId}`).classList.remove('hidden');
            });
        });
    });
</script>

<style>
    .tab-button.active {
        border-bottom-color: #241178;
        color: #241178;
    }
    
    .tab-content {
        display: none;
    }
    
    .tab-content.active {
        display: block;
    }
</style>
@endsection