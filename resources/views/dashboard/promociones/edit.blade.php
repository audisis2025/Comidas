@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Editar Promoción') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    {{-- Mensaje de éxito --}}
                    <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <p class="text-green-800 font-medium">✅ ¡Redirección exitosa!</p>
                        <p class="text-green-600 text-sm mt-1">Has llegado a la vista de edición para la promoción</p>
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
                        {{ __('Editando Promoción') }}
                    </h3>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')

                        {{-- Información básica --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Nombre de la Promoción *</label>
                                <input type="text" name="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Tipo de Promoción *</label>
                                <select name="tipo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                                    <option value="">Seleccionar tipo</option>
                                    <option value="descuento">Descuento</option>
                                    <option value="2x1">2x1</option>
                                    <option value="envio_gratis">Envío Gratis</option>
                                    <option value="combo">Combo Especial</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                        </div>

                        {{-- Descripción --}}
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Descripción *</label>
                            <textarea name="descripcion" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
                        </div>

                        {{-- Botones --}}
                        <div class="flex justify-end space-x-4 pt-6 border-t">
                            <a href="{{ route('promociones.index') }}" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 transition duration-200 font-medium">
                                Cancelar
                            </a>
                            <button type="submit" class="px-8 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200 font-medium">
                                Actualizar Promoción
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection