@extends('layouts.app')

@section('title', 'Notificaciones')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Notificaciones') }}
        </h2>
        <p class="text-gray-600 mt-2">Gestiona tus notificaciones y preferencias</p>
    </div>

    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-6">
                {{ __('Gestión de Notificaciones') }}
            </h3>
            
            <!-- Lista de notificaciones -->
            <div class="space-y-4 mb-8">
                <!-- Notificación 1 -->
                <div class="flex items-center justify-between p-4 bg-blue-50 border border-blue-100 rounded-lg">
                    <div class="flex items-start gap-3">
                        <div class="p-2 bg-blue-100 rounded-lg">
                            <x-heroicon-o-shopping-bag class="h-5 w-5 text-blue-600" />
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Nuevo pedido recibido</p>
                            <p class="text-sm text-gray-600">Tienes un nuevo pedido de #12345</p>
                            <p class="text-xs text-gray-500 mt-1">Hace 5 minutos</p>
                        </div>
                    </div>
                    <button class="px-4 py-2 bg-[#241178] text-white text-sm rounded-lg hover:bg-[#1a0d5a] transition duration-200 flex items-center gap-2">
                        <x-heroicon-o-check-circle class="h-4 w-4" />
                        Marcar como leído
                    </button>
                </div>
                
                <!-- Notificación 2 -->
                <div class="flex items-center justify-between p-4 bg-green-50 border border-green-100 rounded-lg">
                    <div class="flex items-start gap-3">
                        <div class="p-2 bg-green-100 rounded-lg">
                            <x-heroicon-o-star class="h-5 w-5 text-green-600" />
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Reseña nueva</p>
                            <p class="text-sm text-gray-600">Un cliente ha dejado una nueva reseña de 5 estrellas</p>
                            <p class="text-xs text-gray-500 mt-1">Hace 2 horas</p>
                        </div>
                    </div>
                    <button class="px-4 py-2 bg-[#241178] text-white text-sm rounded-lg hover:bg-[#1a0d5a] transition duration-200 flex items-center gap-2">
                        <x-heroicon-o-check-circle class="h-4 w-4" />
                        Marcar como leído
                    </button>
                </div>

                <!-- Notificación 3 -->
                <div class="flex items-center justify-between p-4 bg-yellow-50 border border-yellow-100 rounded-lg">
                    <div class="flex items-start gap-3">
                        <div class="p-2 bg-yellow-100 rounded-lg">
                            <x-heroicon-o-exclamation-triangle class="h-5 w-5 text-yellow-600" />
                        </div>
                        <div>
                            <p class="font-medium text-gray-900">Stock bajo</p>
                            <p class="text-sm text-gray-600">El producto "Tacos al Pastor" está por agotarse</p>
                            <p class="text-xs text-gray-500 mt-1">Hace 1 día</p>
                        </div>
                    </div>
                    <button class="px-4 py-2 bg-[#241178] text-white text-sm rounded-lg hover:bg-[#1a0d5a] transition duration-200 flex items-center gap-2">
                        <x-heroicon-o-check-circle class="h-4 w-4" />
                        Marcar como leído
                    </button>
                </div>

                <!-- Notificación 4 (Leída) -->
                <div class="flex items-center justify-between p-4 bg-gray-50 border border-gray-200 rounded-lg opacity-75">
                    <div class="flex items-start gap-3">
                        <div class="p-2 bg-gray-200 rounded-lg">
                            <x-heroicon-o-bell-alert class="h-5 w-5 text-gray-500" />
                        </div>
                        <div>
                            <p class="font-medium text-gray-500">Promoción expirada</p>
                            <p class="text-sm text-gray-500">La promoción "2x1 en Tacos" ha expirado</p>
                            <p class="text-xs text-gray-400 mt-1">Hace 3 días</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 bg-gray-200 text-gray-500 text-sm rounded-full font-medium">
                        Leído
                    </span>
                </div>
            </div>

            <!-- Acciones masivas -->
            <div class="flex justify-between items-center mb-8 p-4 bg-gray-50 rounded-lg">
                <p class="text-sm text-gray-600">4 notificaciones sin leer</p>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition duration-200 text-sm font-medium flex items-center gap-2">
                        <x-heroicon-o-check-circle class="h-4 w-4" />
                        Marcar todas como leídas
                    </button>
                    <button class="px-4 py-2 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition duration-200 text-sm font-medium flex items-center gap-2">
                        <x-heroicon-o-trash class="h-4 w-4" />
                        Limpiar notificaciones
                    </button>
                </div>
            </div>

            <!-- Configuración de notificaciones -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-lg font-medium text-gray-900 mb-6 flex items-center gap-2">
                    <x-heroicon-o-cog-6-tooth class="h-5 w-5 text-gray-600" />
                    {{ __('Configuración de Notificaciones') }}
                </h4>
                
                <div class="space-y-6">
                    <!-- Pedidos -->
                    <div class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg">
                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-blue-100 rounded-lg">
                                <x-heroicon-o-shopping-bag class="h-5 w-5 text-blue-600" />
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Notificaciones de pedidos</p>
                                <p class="text-sm text-gray-600">Recibir notificaciones por nuevos pedidos</p>
                            </div>
                        </div>
                        <input type="checkbox" checked class="h-5 w-5 text-[#4CAF50] focus:ring-[#4CAF50] border-gray-300 rounded">
                    </div>
                    
                    <!-- Reseñas -->
                    <div class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg">
                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-green-100 rounded-lg">
                                <x-heroicon-o-star class="h-5 w-5 text-green-600" />
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Notificaciones de reseñas</p>
                                <p class="text-sm text-gray-600">Recibir notificaciones por nuevas reseñas</p>
                            </div>
                        </div>
                        <input type="checkbox" checked class="h-5 w-5 text-[#4CAF50] focus:ring-[#4CAF50] border-gray-300 rounded">
                    </div>
                    
                    <!-- Promociones -->
                    <div class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg">
                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-purple-100 rounded-lg">
                                <x-heroicon-o-megaphone class="h-5 w-5 text-purple-600" />
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Notificaciones promocionales</p>
                                <p class="text-sm text-gray-600">Recibir ofertas y promociones especiales</p>
                            </div>
                        </div>
                        <input type="checkbox" class="h-5 w-5 text-[#4CAF50] focus:ring-[#4CAF50] border-gray-300 rounded">
                    </div>

                    <!-- Sistema -->
                    <div class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg">
                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-orange-100 rounded-lg">
                                <x-heroicon-o-bell-alert class="h-5 w-5 text-orange-600" />
                            </div>
                            <div>
                                <p class="font-medium text-gray-900">Alertas del sistema</p>
                                <p class="text-sm text-gray-600">Notificaciones importantes del sistema</p>
                            </div>
                        </div>
                        <input type="checkbox" checked class="h-5 w-5 text-[#4CAF50] focus:ring-[#4CAF50] border-gray-300 rounded">
                    </div>
                </div>

                <!-- Botón guardar configuración -->
                <div class="mt-6 flex justify-end">
                    <button class="px-6 py-3 bg-[#DC6601] hover:bg-[#c45a01] text-white rounded-lg transition duration-200 font-medium flex items-center gap-2">
                        <x-heroicon-o-check-circle class="h-5 w-5" />
                        Guardar configuración
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Estadísticas rápidas -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-blue-100 rounded-lg">
                    <x-heroicon-o-bell class="h-5 w-5 text-blue-600" />
                </div>
                <div>
                    <p class="text-sm text-gray-600">Total</p>
                    <p class="text-xl font-bold text-gray-900">24</p>
                </div>
            </div>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-green-100 rounded-lg">
                    <x-heroicon-o-envelope class="h-5 w-5 text-green-600" />
                </div>
                <div>
                    <p class="text-sm text-gray-600">Sin leer</p>
                    <p class="text-xl font-bold text-gray-900">4</p>
                </div>
            </div>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-orange-100 rounded-lg">
                    <x-heroicon-o-shopping-bag class="h-5 w-5 text-orange-600" />
                </div>
                <div>
                    <p class="text-sm text-gray-600">Pedidos</p>
                    <p class="text-xl font-bold text-gray-900">12</p>
                </div>
            </div>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-purple-100 rounded-lg">
                    <x-heroicon-o-star class="h-5 w-5 text-purple-600" />
                </div>
                <div>
                    <p class="text-sm text-gray-600">Reseñas</p>
                    <p class="text-xl font-bold text-gray-900">8</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection