@extends('layouts.app')

@section('title', 'Gestión de Promociones y Banners')

@section('content')
<x-dashboard.layout title="Marketing Digital" subtitle="Gestiona promociones y banners publicitarios">
    
    {{-- Pestañas de navegación --}}
    <div class="mb-6 border-b border-gray-200">
        <nav class="-mb-px flex space-x-8">
            <button id="tab-promociones" class="border-b-2 border-blue-500 text-blue-600 py-4 px-1 text-sm font-medium tab-button active" data-tab="promociones">
                Promociones
            </button>
            <button id="tab-banners" class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-sm font-medium tab-button" data-tab="banners">
                Banners
            </button>
        </nav>
    </div>

    {{-- Contenido de Promociones --}}
    <div id="content-promociones" class="tab-content active">
        {{-- Botón de acción principal --}}
        <div class="mb-6">
            <a href="{{ route('promociones.create') }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 font-semibold inline-block">
                + Nueva Promoción
            </a>
        </div>

        {{-- Grid de promociones activas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            
            {{-- Promoción ejemplo 1 --}}
            <div class="border border-yellow-300 rounded-lg bg-yellow-50 p-4">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="font-bold text-lg text-yellow-800">2x1 en Tacos</h3>
                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Activa</span>
                </div>
                <p class="text-yellow-700 mb-2">Disfruta de 2x1 en todos nuestros tacos</p>
                <div class="text-sm text-yellow-600">
                    <p><strong>Válido:</strong> Lunes a Viernes</p>
                    <p><strong>Horario:</strong> 14:00 - 18:00</p>
                    <p><strong>Vence:</strong> 30/12/2024</p>
                </div>
                <div class="mt-4 flex space-x-2">
                    <a href="{{ route('promociones.edit', 1) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Editar</a>
                    <button class="text-red-600 hover:text-red-800 text-sm font-medium">Desactivar</button>
                </div>
            </div>

            {{-- Promoción ejemplo 2 --}}
            <div class="border border-blue-300 rounded-lg bg-blue-50 p-4">
                <div class="flex justify-between items-start mb-3">
                    <h3 class="font-bold text-lg text-blue-800">Envío Gratis</h3>
                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Activa</span>
                </div>
                <p class="text-blue-700 mb-2">Envío gratis en pedidos mayores a $200</p>
                <div class="text-sm text-blue-600">
                    <p><strong>Válido:</strong> Todos los días</p>
                    <p><strong>Mínimo:</strong> $200.00</p>
                    <p><strong>Vence:</strong> 31/12/2024</p>
                </div>
                <div class="mt-4 flex space-x-2">
                    <a href="{{ route('promociones.edit', 2) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">Editar</a>
                    <button class="text-red-600 hover:text-red-800 text-sm font-medium">Desactivar</button>
                </div>
            </div>

        </div>

        {{-- Promociones inactivas --}}
        <div class="border-t pt-6">
            <h3 class="font-semibold text-lg mb-4 text-gray-600">Promociones Inactivas</h3>
            <div class="bg-gray-100 p-4 rounded-lg">
                <p class="text-gray-600 text-center">No hay promociones inactivas</p>
            </div>
        </div>
    </div>

    {{-- Contenido de Banners --}}
    <div id="content-banners" class="tab-content hidden">
        <!-- Estadísticas rápidas -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
            <div class="bg-blue-50 p-4 rounded-lg">
                <p class="text-2xl font-bold text-blue-600">5</p>
                <p class="text-sm text-gray-600">Banners Activos</p>
            </div>
            <div class="bg-green-50 p-4 rounded-lg">
                <p class="text-2xl font-bold text-green-600">12</p>
                <p class="text-sm text-gray-600">Total de Clicks</p>
            </div>
            <div class="bg-yellow-50 p-4 rounded-lg">
                <p class="text-2xl font-bold text-yellow-600">1,245</p>
                <p class="text-sm text-gray-600">Impresiones</p>
            </div>
            <div class="bg-purple-50 p-4 rounded-lg">
                <p class="text-2xl font-bold text-purple-600">0.96%</p>
                <p class="text-sm text-gray-600">CTR</p>
            </div>
        </div>

        <!-- Botones de acción -->
        <div class="flex flex-wrap gap-4 mb-6">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Crear Nuevo Banner
            </button>
            
            <button class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                Subir Imágenes
            </button>
            
            <button class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                Ver Reportes
            </button>
        </div>

        <!-- Lista de banners -->
        <h3 class="text-lg font-medium text-gray-900 mb-4">Banners Activos</h3>
        
        <div class="space-y-4">
            <!-- Banner 1 -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-20 h-20 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Banner</span>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Oferta Especial de Verano</p>
                            <p class="text-sm text-gray-600">Publicado: 05 Nov 2024</p>
                            <p class="text-sm text-gray-600">Vence: 05 Dic 2024</p>
                            <div class="flex items-center mt-1">
                                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Activo</span>
                                <span class="ml-2 text-xs text-gray-500">125 clicks • 2,450 vistas</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                            Editar
                        </button>
                        <button class="px-3 py-1 bg-yellow-600 text-white text-sm rounded hover:bg-yellow-700">
                            Pausar
                        </button>
                        <button class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Banner 2 -->
            <div class="border border-gray-200 rounded-lg p-4">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-20 h-20 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Banner</span>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Promo 2x1 en Postres</p>
                            <p class="text-sm text-gray-600">Publicado: 01 Nov 2024</p>
                            <p class="text-sm text-gray-600">Vence: 30 Nov 2024</p>
                            <div class="flex items-center mt-1">
                                <span class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded">Activo</span>
                                <span class="ml-2 text-xs text-gray-500">89 clicks • 1,780 vistas</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                            Editar
                        </button>
                        <button class="px-3 py-1 bg-yellow-600 text-white text-sm rounded hover:bg-yellow-700">
                            Pausar
                        </button>
                        <button class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Banner 3 (Pausado) -->
            <div class="border border-gray-200 rounded-lg p-4 bg-gray-50">
                <div class="flex flex-col md:flex-row md:items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-20 h-20 bg-gray-300 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500 text-sm">Banner</span>
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Happy Hour Nocturno</p>
                            <p class="text-sm text-gray-600">Publicado: 25 Oct 2024</p>
                            <p class="text-sm text-gray-600">Vence: 25 Nov 2024</p>
                            <div class="flex items-center mt-1">
                                <span class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Pausado</span>
                                <span class="ml-2 text-xs text-gray-500">45 clicks • 890 vistas</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-2 mt-4 md:mt-0">
                        <button class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                            Editar
                        </button>
                        <button class="px-3 py-1 bg-green-600 text-white text-sm rounded hover:bg-green-700">
                            Activar
                        </button>
                        <button class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulario de creación rápida (opcional) -->
        <div class="mt-8 border-t pt-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Crear Banner Rápido</h3>
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nombre del Banner</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ej: Oferta de Temporada">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Fecha de Vencimiento</label>
                        <input type="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">URL de Destino</label>
                    <input type="url" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="https://ejemplo.com/promocion">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Imagen del Banner</label>
                    <input type="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Crear Banner
                </button>
            </form>
        </div>
    </div>

</x-dashboard.layout>

{{-- Script para las pestañas --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Funcionalidad de pestañas
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tabId = button.getAttribute('data-tab');
                
                // Remover clases activas
                tabButtons.forEach(btn => {
                    btn.classList.remove('active', 'border-blue-500', 'text-blue-600');
                    btn.classList.add('border-transparent', 'text-gray-500');
                });
                
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    content.classList.add('hidden');
                });

                // Agregar clases activas
                button.classList.add('active', 'border-blue-500', 'text-blue-600');
                button.classList.remove('border-transparent', 'text-gray-500');
                
                document.getElementById(`content-${tabId}`).classList.add('active');
                document.getElementById(`content-${tabId}`).classList.remove('hidden');
            });
        });
    });
</script>

<style>
    .tab-button.active {
        border-bottom-color: #3b82f6;
        color: #2563eb;
    }
    
    .tab-content {
        display: none;
    }
    
    .tab-content.active {
        display: block;
    }
</style>
@endsection