@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Datos de Pago - Plan Premium') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    {{-- Resumen del plan --}}
                    <div class="bg-purple-50 border border-purple-200 rounded-lg p-4 mb-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <h3 class="text-lg font-bold text-purple-700">Plan Premium</h3>
                                <p class="text-purple-600">$599.00 MXN / mes</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-purple-600">Facturación mensual</p>
                                <p class="text-sm text-purple-600">Impuestos incluidos</p>
                            </div>
                        </div>
                    </div>

                    <form class="space-y-6">
                        @csrf

                        {{-- Información de la tarjeta --}}
                        <div>
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Información de la Tarjeta</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Número de Tarjeta *</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500" 
                                           placeholder="1234 5678 9012 3456" maxlength="19" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Nombre en la Tarjeta *</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500" 
                                           placeholder="JUAN PEREZ" required>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Mes *</label>
                                    <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500" required>
                                        <option value="">Mes</option>
                                        @for($i = 1; $i <= 12; $i++)
                                            <option value="{{ $i }}">{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Año *</label>
                                    <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500" required>
                                        <option value="">Año</option>
                                        @for($i = date('Y'); $i <= date('Y') + 10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">CVV *</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500" 
                                           placeholder="123" maxlength="4" required>
                                </div>
                                <div class="flex items-end">
                                    <div class="flex space-x-2">
                                        <img src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons@1a63530be6e374711a8554f31b17e4cb92c25fa5/svg/color/visa.svg" class="h-8" alt="Visa">
                                        <img src="https://cdn.jsdelivr.net/gh/atomiclabs/cryptocurrency-icons@1a63530be6e374711a8554f31b17e4cb92c25fa5/svg/color/mastercard.svg" class="h-8" alt="Mastercard">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Información de facturación --}}
                        <div class="border-t pt-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Información de Facturación</h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">RFC *</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500" 
                                           placeholder="XAXX010101000" required>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Razón Social *</label>
                                    <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500" 
                                           placeholder="Nombre de su empresa" required>
                                </div>
                            </div>

                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700">Dirección Fiscal *</label>
                                <textarea rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-purple-500 focus:ring-purple-500" 
                                          placeholder="Calle, número, colonia, ciudad, estado, código postal" required></textarea>
                            </div>
                        </div>

                        {{-- Términos y condiciones --}}
                        <div class="border-t pt-6">
                            <label class="flex items-start">
                                <input type="checkbox" class="rounded border-gray-300 text-purple-600 shadow-sm focus:border-purple-500 focus:ring-purple-500 mt-1" required>
                                <span class="ml-2 text-sm text-gray-700">
                                    Acepto los <a href="#" class="text-purple-600 hover:text-purple-500">términos y condiciones</a> 
                                    y la <a href="#" class="text-purple-600 hover:text-purple-500">política de privacidad</a>. 
                                    Autorizo el cargo recurrente de $599.00 MXN mensuales hasta que cancele la suscripción.
                                </span>
                            </label>
                        </div>

                        {{-- Botones de acción --}}
                        <div class="flex justify-end space-x-4 pt-6 border-t">
                            <a href="{{ route('planes.index') }}" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition duration-200 font-medium">
                                Cancelar
                            </a>
                            <button type="submit" 
                                    class="px-6 py-3 text-white rounded-lg transition duration-200 font-bold text-lg shadow-lg hover:shadow-xl tracking-wide flex items-center justify-center"
                                    style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%) !important; letter-spacing: 0.05em;">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>Confirmar pago
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection