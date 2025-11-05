@extends('layouts.app')

@section('title', 'Gestión de Promociones')

@section('content')
<x-dashboard.layout title="Promociones" subtitle="Crea y gestiona promociones especiales">
    
    {{-- Botón de acción principal --}}
    <div class="mb-6">
        <button class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 font-semibold">
            + Nueva Promoción
        </button>
    </div>

    {{-- Grid de promociones activas --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        
        {{-- Promoción ejemplo 1 --}}
        <div class="border border-yellow-300 rounded-lg bg-yellow-50 p-4">
            <div class="flex justify-between items-start mb-3">
                <h3 class="font-bold text-lg text-yellow-800">2x1 en Tacos</h3>
                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Activa</span>
            </div>
            <p class="text-yellow-700 mb-2">Disfruta de 2x1 en todos nuestros tacos</p>
            <div class="text-sm text-yellow-600">
                <p><strong>Válido:</strong> Lunes a Viernes</p>
                <p><strong>Horario:</strong> 14:00 - 18:00</p>
                <p><strong>Vence:</strong> 30/12/2024</p>
            </div>
            <div class="mt-4 flex space-x-2">
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Editar</button>
                <button class="text-red-600 hover:text-red-800 text-sm font-medium">Desactivar</button>
            </div>
        </div>

        {{-- Promoción ejemplo 2 --}}
        <div class="border border-blue-300 rounded-lg bg-blue-50 p-4">
            <div class="flex justify-between items-start mb-3">
                <h3 class="font-bold text-lg text-blue-800">Envío Gratis</h3>
                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Activa</span>
            </div>
            <p class="text-blue-700 mb-2">Envío gratis en pedidos mayores a $200</p>
            <div class="text-sm text-blue-600">
                <p><strong>Válido:</strong> Todos los días</p>
                <p><strong>Mínimo:</strong> $200.00</p>
                <p><strong>Vence:</strong> 31/12/2024</p>
            </div>
            <div class="mt-4 flex space-x-2">
                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium">Editar</button>
                <button class="text-red-600 hover:text-red-800 text-sm font-medium">Desactivar</button>
            </div>
        </div>

    </div>

    {{-- Promociones inactivas --}}
    <div class="border-t pt-6">
        <h3 class="font-semibold text-lg mb-4 text-gray-600">Promociones Inactivas</h3>
        <div class="bg-gray-100 p-4 rounded-lg">
            <p class="text-gray-600 text-center">No hay promociones inactivas</p>
        </div>
    </div>

</x-dashboard.layout>
@endsection