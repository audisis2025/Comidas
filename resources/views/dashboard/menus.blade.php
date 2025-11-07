@extends('layouts.app')

@section('title', 'Mis Establecimientos')

@section('header')
    <h2 class="font-semibold text-xl text-[#000000] leading-tight">
        {{ __('Mis Establecimientos') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            {{-- Botón para agregar nuevo establecimiento --}}
            <div class="mb-6">
                <button class="bg-[#DC6601] text-[#FFFFFF] py-3 px-6 rounded-lg hover:bg-[#c45a01] font-semibold transition duration-200 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Agregar Establecimiento
                </button>
            </div>

            {{-- Grid de establecimientos --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                {{-- Establecimiento 1 --}}
                <a href="{{ route('menus.detalle', ['establecimiento' => 'tacos-el-paisa']) }}" class="block border rounded-lg p-6 hover:shadow-lg transition duration-200 bg-[#FFFFFF]">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-[#DC6601] bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-[#DC6601] font-bold text-lg">🌮</span>
                        </div>
                        <span class="bg-[#4CAF50] bg-opacity-20 text-[#272800] text-xs px-2 py-1 rounded-full">Activo</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#000000] mb-2">Tacos "El Paisa"</h3>
                    <p class="text-[#000000] text-sm mb-4">Especialidad en tacos al pastor</p>
                    <div class="flex justify-between text-sm text-[#000000]">
                        <span>15 platos</span>
                        <span>⭐ 4.5</span>
                    </div>
                </a>

                {{-- Establecimiento 2 --}}
                <a href="{{ route('menus.detalle', ['establecimiento' => 'mcdonalds']) }}" class="block border rounded-lg p-6 hover:shadow-lg transition duration-200 bg-[#FFFFFF]">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-[#EE0000] bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-[#EE0000] font-bold text-lg">🍔</span>
                        </div>
                        <span class="bg-[#4CAF50] bg-opacity-20 text-[#272800] text-xs px-2 py-1 rounded-full">Activo</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#000000] mb-2">McDonald's</h3>
                    <p class="text-[#000000] text-sm mb-4">Comida rápida internacional</p>
                    <div class="flex justify-between text-sm text-[#000000]">
                        <span>25 platos</span>
                        <span>⭐ 4.2</span>
                    </div>
                </a>

                {{-- Establecimiento 3 --}}
                <a href="{{ route('menus.detalle', ['establecimiento' => 'starbucks']) }}" class="block border rounded-lg p-6 hover:shadow-lg transition duration-200 bg-[#FFFFFF]">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-[#4CAF50] bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-[#4CAF50] font-bold text-lg">☕</span>
                        </div>
                        <span class="bg-[#4CAF50] bg-opacity-20 text-[#272800] text-xs px-2 py-1 rounded-full">Activo</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#000000] mb-2">Starbucks</h3>
                    <p class="text-[#000000] text-sm mb-4">Café y bebidas especiales</p>
                    <div class="flex justify-between text-sm text-[#000000]">
                        <span>18 platos</span>
                        <span>⭐ 4.7</span>
                    </div>
                </a>

                {{-- Establecimiento 4 --}}
                <a href="{{ route('menus.detalle', ['establecimiento' => 'pizza-hut']) }}" class="block border rounded-lg p-6 hover:shadow-lg transition duration-200 bg-[#FFFFFF]">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-[#EE0000] bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-[#EE0000] font-bold text-lg">🍕</span>
                        </div>
                        <span class="bg-[#DC6601] bg-opacity-20 text-[#272800] text-xs px-2 py-1 rounded-full">En pausa</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#000000] mb-2">Pizza Hut</h3>
                    <p class="text-[#000000] text-sm mb-4">Pizzas y pastas</p>
                    <div class="flex justify-between text-sm text-[#000000]">
                        <span>22 platos</span>
                        <span>⭐ 4.3</span>
                    </div>
                </a>

                {{-- Establecimiento 5 --}}
                <a href="{{ route('menus.detalle', ['establecimiento' => 'sushi-roll']) }}" class="block border rounded-lg p-6 hover:shadow-lg transition duration-200 bg-[#FFFFFF]">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 bg-[#241178] bg-opacity-20 rounded-lg flex items-center justify-center">
                            <span class="text-[#241178] font-bold text-lg">🍣</span>
                        </div>
                        <span class="bg-[#4CAF50] bg-opacity-20 text-[#272800] text-xs px-2 py-1 rounded-full">Activo</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#000000] mb-2">Sushi Roll</h3>
                    <p class="text-[#000000] text-sm mb-4">Comida japonesa</p>
                    <div class="flex justify-between text-sm text-[#000000]">
                        <span>30 platos</span>
                        <span>⭐ 4.8</span>
                    </div>
                </a>

                {{-- Card para agregar nuevo --}}
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 hover:border-[#DC6601] transition duration-200 flex flex-col items-center justify-center cursor-pointer bg-gray-50">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-[#000000] mb-2">Agregar Establecimiento</h3>
                    <p class="text-[#000000] text-sm text-center">Crea un nuevo establecimiento para gestionar su menú</p>
                </div>

            </div>
        </div>
    </div>
@endsection