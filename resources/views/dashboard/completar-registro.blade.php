@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Completar Registro') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-6">
                        {{ __('Completa tu información de negocio') }}
                    </h3>

                    <form class="space-y-6">
                        <!-- Información básica del negocio -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nombre del negocio *</label>
                            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Ej: Mi Restaurante" required>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tipo de negocio *</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" required>
                                    <option value="">Selecciona...</option>
                                    <option>Restaurante</option>
                                    <option>Cafetería</option>
                                    <option>Food Truck</option>
                                    <option>Panadería</option>
                                    <option>Bar</option>
                                    <option>Otro</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Formalidad del negocio *</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" required>
                                    <option value="">Selecciona...</option>
                                    <option>Formal (con registro ante SAT)</option>
                                    <option>Informal (sin registro formal)</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tipo de cuenta *</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" required>
                                    <option value="">Selecciona...</option>
                                    <option>Básica (Gratuita)</option>
                                    <option>Premium (De pago)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Teléfono *</label>
                                <input type="tel" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="+52 123 456 7890" required>
                            </div>
                        </div>

                        <!-- Información Fiscal -->
                        <div class="border-t pt-6">
                            <h4 class="text-md font-medium text-gray-900 mb-4">Información Fiscal</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">RFC</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Ej: XAXX010101000">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Razón Social</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Nombre legal de la empresa">
                                </div>
                            </div>

                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700">Dirección Fiscal</label>
                                <textarea rows="2" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Dirección registrada ante el SAT"></textarea>
                            </div>

                            <div class="mt-4">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Ofrece facturación a clientes</span>
                                </label>
                            </div>
                        </div>

                        <!-- Dirección del establecimiento -->
                        <div class="border-t pt-6">
                            <h4 class="text-md font-medium text-gray-900 mb-4">Dirección del Establecimiento</h4>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Dirección completa *</label>
                                <textarea rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" placeholder="Calle, número, colonia, ciudad..." required></textarea>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Ciudad *</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Estado *</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Código Postal *</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-green-500 focus:ring-green-500" required>
                                </div>
                            </div>
                        </div>

                        <!-- Métodos de pago -->
                        <div class="border-t pt-6">
                            <h4 class="text-md font-medium text-gray-900 mb-4">Métodos de Pago Aceptados</h4>
                            
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Efectivo</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Tarjeta Débito</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Tarjeta Crédito</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Transferencia</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Pago Móvil</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">PayPal</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Mercado Pago</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Otro</span>
                                </label>
                            </div>
                        </div>

                        <!-- Horarios -->
                        <div class="border-t pt-6">
                            <h4 class="text-md font-medium text-gray-900 mb-4">Horarios de Atención *</h4>
                            
                            <div class="space-y-4">
                                <!-- Lunes a Viernes -->
                                <div class="flex flex-col md:flex-row md:items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm font-medium text-gray-700 mb-2 md:mb-0">Lunes a Viernes</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm w-32" required>
                                        <span class="text-gray-500">a</span>
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm w-32" required>
                                    </div>
                                </div>

                                <!-- Sábados -->
                                <div class="flex flex-col md:flex-row md:items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm font-medium text-gray-700 mb-2 md:mb-0">Sábados</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm w-32">
                                        <span class="text-gray-500">a</span>
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm w-32">
                                    </div>
                                </div>

                                <!-- Domingos -->
                                <div class="flex flex-col md:flex-row md:items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm font-medium text-gray-700 mb-2 md:mb-0">Domingos</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm w-32">
                                        <span class="text-gray-500">a</span>
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm w-32">
                                    </div>
                                </div>

                                <!-- Días Festivos -->
                                <div class="flex flex-col md:flex-row md:items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <span class="text-sm font-medium text-gray-700 mb-2 md:mb-0">Días Festivos</span>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm w-32">
                                        <span class="text-gray-500">a</span>
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm w-32">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:border-green-500 focus:ring-green-500">
                                    <span class="ml-2 text-sm text-gray-700">Cerramos los días festivos</span>
                                </label>
                            </div>
                        </div>

                        <!-- Botones de acción -->
                        <div class="flex justify-between items-center pt-6 border-t">
                            <div class="flex space-x-4">
                                <!-- Botón Cancelar -->
                                <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition duration-200 font-medium">
                                    Cancelar
                                </a>
                                <!-- Botón Completar Registro -->
                                <button type="submit" name="action" value="save" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition duration-200 font-medium flex items-center" style="background-color: #2563eb !important; color: white !important;">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection