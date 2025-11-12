@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-[#000000] leading-tight">
        {{ __('Crear Nueva Promoción') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#FFFFFF] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-[#FFFFFF] border-b border-gray-200">
                    
                    <div class="mb-6">
                        <a href="{{ route('promociones.index') }}" class="text-[#241178] hover:text-[#1a0d5a] font-medium flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Volver a Promociones
                        </a>
                    </div>

                    <h3 class="text-lg font-medium text-[#000000] mb-6">
                        {{ __('Crear Nueva Promoción') }}
                    </h3>

                    <form action="{{ route('promociones.store') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- Información básica --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Nombre de la Promoción *</label>
                                <input type="text" name="nombre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" 
                                       placeholder="Ej: 2x1 en Tacos" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Tipo de Promoción *</label>
                                <select name="tipo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
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
                            <label class="block text-sm font-medium text-[#000000]">Descripción *</label>
                            <textarea name="descripcion" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" 
                                      placeholder="Describe los detalles de la promoción..." required></textarea>
                        </div>

                        {{-- Descuento y condiciones --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Descuento (%)</label>
                                <input type="number" name="descuento" min="0" max="100" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" 
                                       placeholder="0">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Monto Mínimo</label>
                                <input type="number" name="monto_minimo" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" 
                                       placeholder="0.00">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Establecimiento</label>
                                <select name="establecimiento_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]">
                                    <option value="">Todos los establecimientos</option>
                                    <option value="1">Tacos "El Paisa"</option>
                                    <option value="2">McDonald's</option>
                                    <option value="3">Starbucks</option>
                                </select>
                            </div>
                        </div>

                        {{-- Fechas de vigencia --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Fecha de Inicio *</label>
                                <input type="datetime-local" name="fecha_inicio" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Fecha de Fin *</label>
                                <input type="datetime-local" name="fecha_fin" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" required>
                            </div>
                        </div>

                        {{-- Días de la semana --}}
                        <div>
                            <label class="block text-sm font-medium text-[#000000] mb-2">Días de la semana</label>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                                @php
                                    $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
                                @endphp
                                @foreach($dias as $dia)
                                    <label class="flex items-center">
                                        <input type="checkbox" name="dias_semana[]" value="{{ strtolower($dia) }}" class="rounded border-gray-300 text-[#4CAF50] shadow-sm focus:border-[#4CAF50] focus:ring-[#4CAF50]" checked>
                                        <span class="ml-2 text-sm text-[#000000]">{{ $dia }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        {{-- Horario de la promoción --}}
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Horario de Inicio</label>
                                <input type="time" name="hora_inicio" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" 
                                       value="00:00">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#000000]">Horario de Fin</label>
                                <input type="time" name="hora_fin" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#241178] focus:ring-[#241178]" 
                                       value="23:59">
                            </div>
                        </div>

                        {{-- Estado --}}
                        <div>
                            <label class="flex items-center">
                                <input type="checkbox" name="activa" value="1" class="rounded border-gray-300 text-[#4CAF50] shadow-sm focus:border-[#4CAF50] focus:ring-[#4CAF50]" checked>
                                <span class="ml-2 text-sm text-[#000000]">Promoción activa</span>
                            </label>
                        </div>

                        {{-- Botones --}}
                        <div class="flex justify-end space-x-4 pt-6 border-t">
                            <a href="{{ route('promociones.index') }}" class="px-6 py-3 bg-gray-300 text-[#000000] rounded-md hover:bg-gray-400 transition duration-200 font-medium">
                                Cancelar
                            </a>
                            <button type="submit" class="px-8 py-3 bg-[#DC6601] hover:bg-[#c45a01] text-[#FFFFFF] rounded-md transition duration-200 font-medium">
                                Crear Promoción
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection