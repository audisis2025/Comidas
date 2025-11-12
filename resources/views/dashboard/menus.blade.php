@extends('layouts.app')

@section('title', 'Mis Establecimientos')

@section('content')
<div class="p-6">
    <!-- Header -->
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Mis Establecimientos') }}
        </h2>
        <p class="text-gray-600 mt-2">Gestiona todos tus establecimientos y sus menús</p>
    </div>

    <!-- Botón para agregar nuevo establecimiento -->
    <div class="mb-6">
        <button class="bg-[#DC6601] hover:bg-[#c45a01] text-white font-semibold py-3 px-6 rounded-lg transition duration-200 flex items-center gap-2">
            <x-heroicon-o-plus class="h-5 w-5" />
            {{ __('Agregar Establecimiento') }}
        </button>
    </div>

    <!-- Grid de establecimientos -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Establecimiento 1 -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-[#DC6601] bg-opacity-20 rounded-lg flex items-center justify-center">
                    <span class="text-[#DC6601] font-bold text-lg">🌮</span>
                </div>
                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Activo</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Tacos "El Paisa"</h3>
            <p class="text-gray-600 text-sm mb-4">Especialidad en tacos al pastor</p>
            <div class="flex justify-between text-sm text-gray-600">
                <span>15 platos</span>
                <span class="flex items-center gap-1">
                    <x-heroicon-o-star class="h-4 w-4 text-yellow-500" />
                    4.5
                </span>
            </div>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('menus.detalle', ['establecimiento' => 'tacos-el-paisa']) }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center py-2 px-3 rounded text-sm font-medium transition duration-200">
                    Ver menú
                </a>
                <button class="p-2 text-gray-400 hover:text-gray-600 transition duration-200">
                    <x-heroicon-o-cog-6-tooth class="h-4 w-4" />
                </button>
            </div>
        </div>

        <!-- Establecimiento 2 -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <span class="text-red-600 font-bold text-lg">🍔</span>
                </div>
                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Activo</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">McDonald's</h3>
            <p class="text-gray-600 text-sm mb-4">Comida rápida internacional</p>
            <div class="flex justify-between text-sm text-gray-600">
                <span>25 platos</span>
                <span class="flex items-center gap-1">
                    <x-heroicon-o-star class="h-4 w-4 text-yellow-500" />
                    4.2
                </span>
            </div>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('menus.detalle', ['establecimiento' => 'mcdonalds']) }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center py-2 px-3 rounded text-sm font-medium transition duration-200">
                    Ver menú
                </a>
                <button class="p-2 text-gray-400 hover:text-gray-600 transition duration-200">
                    <x-heroicon-o-cog-6-tooth class="h-4 w-4" />
                </button>
            </div>
        </div>

        <!-- Establecimiento 3 -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                    <span class="text-green-600 font-bold text-lg">☕</span>
                </div>
                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Activo</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Starbucks</h3>
            <p class="text-gray-600 text-sm mb-4">Café y bebidas especiales</p>
            <div class="flex justify-between text-sm text-gray-600">
                <span>18 platos</span>
                <span class="flex items-center gap-1">
                    <x-heroicon-o-star class="h-4 w-4 text-yellow-500" />
                    4.7
                </span>
            </div>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('menus.detalle', ['establecimiento' => 'starbucks']) }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center py-2 px-3 rounded text-sm font-medium transition duration-200">
                    Ver menú
                </a>
                <button class="p-2 text-gray-400 hover:text-gray-600 transition duration-200">
                    <x-heroicon-o-cog-6-tooth class="h-4 w-4" />
                </button>
            </div>
        </div>

        <!-- Establecimiento 4 -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                    <span class="text-red-600 font-bold text-lg">🍕</span>
                </div>
                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded-full font-medium">En pausa</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Pizza Hut</h3>
            <p class="text-gray-600 text-sm mb-4">Pizzas y pastas</p>
            <div class="flex justify-between text-sm text-gray-600">
                <span>22 platos</span>
                <span class="flex items-center gap-1">
                    <x-heroicon-o-star class="h-4 w-4 text-yellow-500" />
                    4.3
                </span>
            </div>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('menus.detalle', ['establecimiento' => 'pizza-hut']) }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center py-2 px-3 rounded text-sm font-medium transition duration-200">
                    Ver menú
                </a>
                <button class="p-2 text-gray-400 hover:text-gray-600 transition duration-200">
                    <x-heroicon-o-cog-6-tooth class="h-4 w-4" />
                </button>
            </div>
        </div>

        <!-- Establecimiento 5 -->
        <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-lg transition duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-[#241178] bg-opacity-20 rounded-lg flex items-center justify-center">
                    <span class="text-[#241178] font-bold text-lg">🍣</span>
                </div>
                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full font-medium">Activo</span>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Sushi Roll</h3>
            <p class="text-gray-600 text-sm mb-4">Comida japonesa</p>
            <div class="flex justify-between text-sm text-gray-600">
                <span>30 platos</span>
                <span class="flex items-center gap-1">
                    <x-heroicon-o-star class="h-4 w-4 text-yellow-500" />
                    4.8
                </span>
            </div>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('menus.detalle', ['establecimiento' => 'sushi-roll']) }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center py-2 px-3 rounded text-sm font-medium transition duration-200">
                    Ver menú
                </a>
                <button class="p-2 text-gray-400 hover:text-gray-600 transition duration-200">
                    <x-heroicon-o-cog-6-tooth class="h-4 w-4" />
                </button>
            </div>
        </div>

        <!-- Card para agregar nuevo -->
        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 hover:border-[#DC6601] transition duration-200 flex flex-col items-center justify-center cursor-pointer bg-gray-50 hover:bg-gray-100">
            <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mb-4">
                <x-heroicon-o-plus class="h-6 w-6 text-gray-400" />
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Agregar Establecimiento</h3>
            <p class="text-gray-600 text-sm text-center">Crea un nuevo establecimiento para gestionar su menú</p>
        </div>

    </div>

    <!-- Estadísticas resumen -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-blue-100 rounded-lg">
                    <x-heroicon-o-building-storefront class="h-5 w-5 text-blue-600" />
                </div>
                <div>
                    <p class="text-sm text-gray-600">Total Establecimientos</p>
                    <p class="text-xl font-bold text-gray-900">5</p>
                </div>
            </div>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-green-100 rounded-lg">
                    <x-heroicon-o-check-badge class="h-5 w-5 text-green-600" />
                </div>
                <div>
                    <p class="text-sm text-gray-600">Activos</p>
                    <p class="text-xl font-bold text-gray-900">4</p>
                </div>
            </div>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-orange-100 rounded-lg">
                    <x-heroicon-o-pause-circle class="h-5 w-5 text-orange-600" />
                </div>
                <div>
                    <p class="text-sm text-gray-600">En pausa</p>
                    <p class="text-xl font-bold text-gray-900">1</p>
                </div>
            </div>
        </div>
        <div class="bg-white border border-gray-200 rounded-lg p-4">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-purple-100 rounded-lg">
                    <x-heroicon-o-clipboard-document-list class="h-5 w-5 text-purple-600" />
                </div>
                <div>
                    <p class="text-sm text-gray-600">Total Platos</p>
                    <p class="text-xl font-bold text-gray-900">110</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection