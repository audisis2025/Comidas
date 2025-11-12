@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Anuncios y Banners') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
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
            </div>
        </div>
    </div>
@endsection