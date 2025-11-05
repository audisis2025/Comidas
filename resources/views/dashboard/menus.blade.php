@extends('layouts.app')

@section('title', 'Gestión de Menús')

@section('content')
<x-dashboard.layout title="Gestión de Menús" subtitle="Administra los platos de tu menú">
    
    {{-- Botones de acción --}}
    <div class="mb-6">
        <button class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 font-semibold">
            + Agregar Plato
        </button>
    </div>

    {{-- Contenido específico de menús --}}
    <div class="border rounded-lg p-4">
        <p class="text-gray-600">Aquí irá la lista de platos del menú</p>
        
        {{-- Ejemplo de lista --}}
        <div class="mt-4 space-y-3">
            <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                <div>
                    <h4 class="font-semibold">Tacos al Pastor</h4>
                    <p class="text-sm text-gray-600">$25.00</p>
                </div>
                <div class="space-x-2">
                    <button class="text-blue-600 hover:text-blue-800">Editar</button>
                    <button class="text-red-600 hover:text-red-800">Eliminar</button>
                </div>
            </div>
        </div>
    </div>

</x-dashboard.layout>
@endsection