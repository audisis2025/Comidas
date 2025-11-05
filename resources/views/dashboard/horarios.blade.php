@extends('layouts.app')

@section('title', 'Gestión de Horarios')

@section('content')
<x-dashboard.layout title="Horarios" subtitle="Configura los horarios de atención">
    
    {{-- Estado actual --}}
    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
        <strong>✅ ABIERTO</strong> - Según horario establecido
    </div>

    {{-- Formulario de horarios --}}
    <form method="POST" action="#">
        @csrf
        
        <div class="space-y-4">
            @foreach(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'] as $dia)
            <div class="grid grid-cols-3 gap-4 items-center">
                <label class="block text-gray-700 font-medium">{{ $dia }}</label>
                <input type="time" class="border rounded py-2 px-3 text-gray-700">
                <input type="time" class="border rounded py-2 px-3 text-gray-700">
            </div>
            @endforeach
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 font-semibold">
                Guardar Horarios
            </button>
        </div>
    </form>

</x-dashboard.layout>
@endsection