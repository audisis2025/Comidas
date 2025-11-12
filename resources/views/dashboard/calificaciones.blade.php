@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Calificaciones y Reseñas') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Resumen de calificaciones -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-blue-50 p-6 rounded-lg text-center">
                            <p class="text-3xl font-bold text-blue-600">4.8</p>
                            <p class="text-sm text-gray-600">Calificación promedio</p>
                            <div class="flex justify-center mt-2">
                                <!-- Estrellas -->
                                <span class="text-yellow-400">★★★★★</span>
                            </div>
                        </div>
                        
                        <div class="bg-green-50 p-6 rounded-lg text-center">
                            <p class="text-3xl font-bold text-green-600">156</p>
                            <p class="text-sm text-gray-600">Total de reseñas</p>
                        </div>
                        
                        <div class="bg-purple-50 p-6 rounded-lg text-center">
                            <p class="text-3xl font-bold text-purple-600">12</p>
                            <p class="text-sm text-gray-600">Reseñas este mes</p>
                        </div>
                    </div>

                    <!-- Lista de reseñas -->
                    <h3 class="text-lg font-medium text-gray-900 mb-4">
                        {{ __('Últimas Reseñas') }}
                    </h3>
                    
                    <div class="space-y-6">
                        <!-- Reseña 1 -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                                        <span class="text-gray-600 font-medium">JD</span>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-medium text-gray-900">Juan Díaz</p>
                                        <div class="flex items-center">
                                            <span class="text-yellow-400">★★★★★</span>
                                            <span class="text-xs text-gray-500 ml-2">Hace 2 días</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-700">
                                Excelente servicio y comida deliciosa. El pedido llegó rápido y caliente. 
                                Definitivamente volveré a ordenar.
                            </p>
                        </div>

                        <!-- Reseña 2 -->
                        <div class="border border-gray-200 rounded-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                                        <span class="text-gray-600 font-medium">MP</span>
                                    </div>
                                    <div class="ml-3">
                                        <p class="font-medium text-gray-900">María Pérez</p>
                                        <div class="flex items-center">
                                            <span class="text-yellow-400">★★★★☆</span>
                                            <span class="text-xs text-gray-500 ml-2">Hace 1 semana</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-gray-700">
                                Buena comida, pero la entrega tardó un poco más de lo esperado. 
                                La presentación era excelente.
                            </p>
                            <div class="mt-2">
                                <button class="text-blue-600 text-sm hover:text-blue-800 mr-4">
                                    Responder
                                </button>
                                <button class="text-green-600 text-sm hover:text-green-800">
                                    Marcar como útil
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Filtros y acciones -->
                    <div class="mt-6 flex flex-wrap gap-4">
                        <select class="border-gray-300 rounded-md shadow-sm">
                            <option>Todas las calificaciones</option>
                            <option>5 estrellas</option>
                            <option>4 estrellas</option>
                            <option>3 estrellas</option>
                        </select>
                        
                        <select class="border-gray-300 rounded-md shadow-sm">
                            <option>Ordenar por más recientes</option>
                            <option>Ordenar por más antiguas</option>
                            <option>Ordenar por mejor calificación</option>
                            <option>Ordenar por peor calificación</option>
                        </select>
                        
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                            Exportar reseñas
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection