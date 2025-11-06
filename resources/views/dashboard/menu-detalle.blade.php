@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Menú de {{ ucfirst(str_replace('-', ' ', $establecimiento)) }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Header del establecimiento --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center">
                            <span class="text-yellow-600 font-bold text-2xl">
                                @if($establecimiento == 'tacos-el-paisa') 🌮
                                @elseif($establecimiento == 'mcdonalds') 🍔
                                @elseif($establecimiento == 'starbucks') ☕
                                @elseif($establecimiento == 'pizza-hut') 🍕
                                @elseif($establecimiento == 'sushi-roll') 🍣
                                @else 🏪
                                @endif
                            </span>
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800">{{ ucfirst(str_replace('-', ' ', $establecimiento)) }}</h1>
                            <p class="text-gray-600">Gestión de menú y horarios</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Activo</span>
                        <p class="text-sm text-gray-500 mt-1">15 platos en menú</p>
                    </div>
                </div>
            </div>

            {{-- Pestañas de navegación --}}
            <div class="mb-6 border-b border-gray-200">
                <nav class="-mb-px flex space-x-8">
                    <button class="border-b-2 border-blue-500 text-blue-600 py-4 px-1 text-sm font-medium">
                        Menú
                    </button>
                    <button class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-sm font-medium">
                        Horarios
                    </button>
                    <button class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-sm font-medium">
                        Configuración
                    </button>
                </nav>
            </div>

            {{-- Botones de acción --}}
            <div class="mb-6 flex justify-between items-center">
                <div class="flex space-x-2">
                    <button class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 font-semibold flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        + Agregar Plato
                    </button>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 font-semibold flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Configurar Horarios
                    </button>
                </div>
                
                <div class="flex space-x-2">
                    <button class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600 font-semibold">
                        Editar Establecimiento
                    </button>
                    <button class="bg-purple-500 text-white py-2 px-4 rounded hover:bg-purple-600 font-semibold">
                        Ver Estadísticas
                    </button>
                </div>
            </div>

            {{-- Sección de Horarios --}}
            <div class="bg-white rounded-lg shadow-sm mb-6">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Horarios de Atención</h3>
                    
                    <form class="space-y-4">
                        @csrf
                        
                        {{-- Horarios por día --}}
                        <div class="space-y-3">
                            @php
                                $dias = [
                                    'Lunes' => ['08:00', '22:00'],
                                    'Martes' => ['08:00', '22:00'],
                                    'Miércoles' => ['08:00', '22:00'],
                                    'Jueves' => ['08:00', '22:00'],
                                    'Viernes' => ['08:00', '23:00'],
                                    'Sábado' => ['09:00', '23:00'],
                                    'Domingo' => ['09:00', '20:00']
                                ];
                            @endphp

                            @foreach($dias as $dia => $horario)
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <label class="flex items-center space-x-3 w-32">
                                    <input type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm" checked>
                                    <span class="text-sm font-medium text-gray-700">{{ $dia }}</span>
                                </label>
                                
                                <div class="flex items-center space-x-2">
                                    <input type="time" 
                                           class="border-gray-300 rounded-md shadow-sm py-1 px-2 text-sm"
                                           value="{{ $horario[0] }}">
                                    <span class="text-gray-500 text-sm">a</span>
                                    <input type="time" 
                                           class="border-gray-300 rounded-md shadow-sm py-1 px-2 text-sm"
                                           value="{{ $horario[1] }}">
                                </div>
                                
                                <div class="flex items-center space-x-2">
                                    <span class="text-xs text-gray-500 bg-white px-2 py-1 rounded border">
                                        {{ $horario[0] }} - {{ $horario[1] }}
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        {{-- Horarios especiales --}}
                        <div class="border-t pt-4 mt-4">
                            <h4 class="font-medium text-gray-800 mb-3">Horarios Especiales</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Días Festivos</label>
                                    <div class="flex items-center space-x-2">
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm py-1 px-2 text-sm" value="10:00">
                                        <span class="text-gray-500 text-sm">a</span>
                                        <input type="time" class="border-gray-300 rounded-md shadow-sm py-1 px-2 text-sm" value="18:00">
                                    </div>
                                </div>
                                
                                <div>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm">
                                        <span class="ml-2 text-sm text-gray-700">Cerrado los días festivos</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{-- Botón guardar horarios --}}
                        <div class="flex justify-end pt-4">
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white py-2 px-6 rounded font-semibold transition duration-200">
                                Guardar Horarios
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- Lista de platos --}}
            <div class="bg-white rounded-lg shadow-sm">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Platos del Menú</h3>
                    
                    <div class="space-y-4">
                        {{-- Plato 1 --}}
                        <div class="flex justify-between items-center p-4 border rounded-lg hover:bg-gray-50">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                                    <span class="text-gray-500">🍽️</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-800">
                                        @if($establecimiento == 'tacos-el-paisa') Tacos al Pastor
                                        @elseif($establecimiento == 'mcdonalds') Big Mac
                                        @elseif($establecimiento == 'starbucks') Frappuccino
                                        @elseif($establecimiento == 'pizza-hut') Pizza Pepperoni
                                        @elseif($establecimiento == 'sushi-roll') Rollo California
                                        @else Plato Principal
                                        @endif
                                    </h4>
                                    <p class="text-sm text-gray-600">
                                        @if($establecimiento == 'tacos-el-paisa') Con piña y cilantro
                                        @elseif($establecimiento == 'mcdonalds') Hamburguesa clásica
                                        @elseif($establecimiento == 'starbucks') Bebida de café frío
                                        @elseif($establecimiento == 'pizza-hut') Pizza con pepperoni
                                        @elseif($establecimiento == 'sushi-roll') Con aguacate y pepino
                                        @else Descripción del plato
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <span class="font-bold text-gray-800">$25.00</span>
                                <div class="flex space-x-2">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm">Editar</button>
                                    <button class="text-red-600 hover:text-red-800 text-sm">Eliminar</button>
                                </div>
                            </div>
                        </div>

                        {{-- Más platos pueden agregarse aquí --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection