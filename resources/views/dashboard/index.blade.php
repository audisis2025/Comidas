@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-6">Dashboard - {{ auth()->user()->name }}</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <a href="{{ route('menus.index') }}" class="bg-blue-500 text-white p-4 rounded-lg text-center hover:bg-blue-600 font-semibold">
                        Menús
                    </a>
                    <a href="{{ route('horarios.index') }}" class="bg-green-500 text-white p-4 rounded-lg text-center hover:bg-green-600 font-semibold">
                        Horarios
                    </a>
                    <a href="{{ route('promociones.index') }}" class="bg-yellow-500 text-white p-4 rounded-lg text-center hover:bg-yellow-600 font-semibold">
                        Promociones
                    </a>
                    <a href="{{ route('planes.index') }}" class="bg-purple-500 text-white p-4 rounded-lg text-center hover:bg-purple-600 font-semibold">
                        Planes
                    </a>
                </div>

                <div class="bg-gray-100 p-4 rounded-lg">
                    <h3 class="font-semibold text-lg mb-2">Resumen Rápido</h3>
                    <p>Bienvenido a tu panel de control</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection