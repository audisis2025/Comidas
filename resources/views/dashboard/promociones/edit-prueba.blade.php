@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Vista de Prueba - Editar Promoción') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    {{-- Banner de prueba --}}
                    <div class="mb-6 p-4 bg-purple-50 border border-purple-200 rounded-lg">
                        <div class="flex items-center">
                            <span class="text-purple-600 text-lg mr-2">🎯</span>
                            <div>
                                <p class="text-purple-800 font-medium">VISTA DE PRUEBA FUNCIONAL</p>
                                <p class="text-purple-600 text-sm">Esta es una vista de prueba a la que llegaste al hacer clic en "Editar"</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <a href="{{ route('promociones.index') }}" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Volver a Promociones
                        </a>
                    </div>

                    <h3 class="text-lg font-medium text-gray-900 mb-6">
                        Editando promoción #{{ request()->route('id') ?? '1' }}
                    </h3>

                    {{-- Información de la promoción --}}
                    <div class="mb-6 p-4 bg-gray-50 rounded-lg">
                        <h4 class="font-medium text-gray-700 mb-2">Información de la promoción:</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li><strong>ID:</strong> {{ request()->route('id') ?? '1' }}</li>
                            <li><strong>Nombre:</strong> Promoción de prueba</li>
                            <li><strong>Estado:</strong> Activa</li>
                            <li><strong>URL:</strong> {{ url()->current() }}</li>
                        </ul>
                    </div>

                    {{-- Formulario de prueba --}}
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Nombre de la Promoción</label>
                                <input type="text" value="Promoción de Prueba #{{ request()->route('id') ?? '1' }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tipo</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                                    <option>2x1</option>
                                    <option>Descuento</option>
                                    <option>Envío Gratis</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">Esta es una descripción de prueba para la promoción #{{ request()->route('id') ?? '1' }}</textarea>
                        </div>

                        {{-- Botones --}}
                        <div class="flex justify-end space-x-4 pt-6 border-t">
                            <a href="{{ route('promociones.index') }}" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition duration-200 font-medium">
                                Cancelar
                            </a>
                            <button type="button" 
                                    onclick="alert('¡Funciona! Esta es una vista de prueba 🎉')" 
                                    class="px-8 py-3 text-white rounded-md transition duration-200 font-medium"
                                    style="background-color: #16a34a !important; border: none !important;">
                                Probar Funcionalidad
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection