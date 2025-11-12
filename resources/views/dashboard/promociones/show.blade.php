@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Detalles de Promoción') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="mb-6 flex justify-between items-center">
                        <a href="{{ route('promociones.index') }}" class="text-blue-600 hover:text-blue-800 font-medium flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>
                            Volver a Promociones
                        </a>
                        
                        <div class="flex space-x-2">
                            <a href="{{ route('promociones.edit', $promocion->id) }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition duration-200 font-medium">
                                Editar
                            </a>
                            <form action="{{ route('promociones.destroy', $promocion->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition duration-200 font-medium" 
                                        onclick="return confirm('¿Estás seguro de eliminar esta promoción?')">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $promocion->nombre }}</h3>
                    
                    <div class="mb-4">
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $promocion->activa ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $promocion->activa ? 'Activa' : 'Inactiva' }}
                        </span>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 ml-2">
                            {{ ucfirst($promocion->tipo) }}
                        </span>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {{-- Información principal --}}
                        <div class="space-y-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Descripción</h4>
                                <p class="text-gray-600">{{ $promocion->descripcion }}</p>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-3">Detalles</h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Descuento:</span>
                                        <span class="font-medium">{{ $promocion->descuento ? $promocion->descuento . '%' : 'N/A' }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Monto Mínimo:</span>
                                        <span class="font-medium">${{ number_format($promocion->monto_minimo, 2) }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Establecimiento:</span>
                                        <span class="font-medium">{{ $promocion->establecimiento ? $promocion->establecimiento->nombre : 'Todos' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Fechas y horarios --}}
                        <div class="space-y-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-3">Vigencia</h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Inicio:</span>
                                        <span class="font-medium">{{ \Carbon\Carbon::parse($promocion->fecha_inicio)->format('d/m/Y H:i') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Fin:</span>
                                        <span class="font-medium">{{ \Carbon\Carbon::parse($promocion->fecha_fin)->format('d/m/Y H:i') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Horario:</span>
                                        <span class="font-medium">{{ $promocion->hora_inicio }} - {{ $promocion->hora_fin }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">Días de la semana</h4>
                                <div class="flex flex-wrap gap-1">
                                    @foreach(['lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'] as $dia)
                                        @if(in_array($dia, $promocion->dias_semana ?? []))
                                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded">{{ ucfirst($dia) }}</span>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection