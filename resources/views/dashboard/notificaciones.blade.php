@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Notificaciones') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">
                        {{ __('Gestión de Notificaciones') }}
                    </h3>
                    
                    <!-- Lista de notificaciones -->
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <p class="font-medium text-gray-900">Nuevo pedido recibido</p>
                                <p class="text-sm text-gray-600">Tienes un nuevo pedido de #12345</p>
                                <p class="text-xs text-gray-500">Hace 5 minutos</p>
                            </div>
                            <button class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                                Marcar como leído
                            </button>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <p class="font-medium text-gray-900">Reseña nueva</p>
                                <p class="text-sm text-gray-600">Un cliente ha dejado una nueva reseña</p>
                                <p class="text-xs text-gray-500">Hace 2 horas</p>
                            </div>
                            <button class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                                Marcar como leído
                            </button>
                        </div>
                    </div>

                    <!-- Configuración de notificaciones -->
                    <div class="mt-8">
                        <h4 class="text-md font-medium text-gray-900 mb-4">
                            {{ __('Configuración de Notificaciones') }}
                        </h4>
                        
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Notificaciones de pedidos</p>
                                    <p class="text-sm text-gray-600">Recibir notificaciones por nuevos pedidos</p>
                                </div>
                                <input type="checkbox" checked class="rounded border-gray-300 text-blue-600 shadow-sm">
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Notificaciones de reseñas</p>
                                    <p class="text-sm text-gray-600">Recibir notificaciones por nuevas reseñas</p>
                                </div>
                                <input type="checkbox" checked class="rounded border-gray-300 text-blue-600 shadow-sm">
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-medium text-gray-900">Notificaciones promocionales</p>
                                    <p class="text-sm text-gray-600">Recibir ofertas y promociones</p>
                                </div>
                                <input type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection