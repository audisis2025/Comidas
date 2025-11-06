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
                    <button id="tab-menu" class="border-b-2 border-blue-500 text-blue-600 py-4 px-1 text-sm font-medium tab-button active" data-tab="menu">
                        Menú
                    </button>
                    <button id="tab-horarios" class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-sm font-medium tab-button" data-tab="horarios">
                        Horarios
                    </button>
                    <button id="tab-calificaciones" class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-sm font-medium tab-button" data-tab="calificaciones">
                        Calificaciones
                    </button>
                    <button id="tab-configuracion" class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 py-4 px-1 text-sm font-medium tab-button" data-tab="configuracion">
                        Configuración
                    </button>
                </nav>
            </div>

            {{-- Contenido de las pestañas --}}

            {{-- Pestaña: Menú --}}
            <div id="content-menu" class="tab-content active">
                {{-- Botones de acción para Menú --}}
                <div class="mb-6 flex justify-between items-center">
                    <div class="flex space-x-2">
                        <button class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600 font-semibold flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                            </svg>
                            + Agregar Plato
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

                            {{-- Plato 2 --}}
                            <div class="flex justify-between items-center p-4 border rounded-lg hover:bg-gray-50">
                                <div class="flex items-center space-x-4">
                                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center">
                                        <span class="text-gray-500">🥤</span>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">
                                            @if($establecimiento == 'tacos-el-paisa') Agua Fresca
                                            @elseif($establecimiento == 'mcdonalds') Coca Cola
                                            @elseif($establecimiento == 'starbucks') Latte
                                            @elseif($establecimiento == 'pizza-hut') Refresco
                                            @elseif($establecimiento == 'sushi-roll') Té Verde
                                            @else Bebida
                                            @endif
                                        </h4>
                                        <p class="text-sm text-gray-600">
                                            @if($establecimiento == 'tacos-el-paisa') Sabor a jamaica
                                            @elseif($establecimiento == 'mcdonalds') Refresco de cola
                                            @elseif($establecimiento == 'starbucks') Café con leche
                                            @elseif($establecimiento == 'pizza-hut') Bebida gaseosa
                                            @elseif($establecimiento == 'sushi-roll') Té tradicional
                                            @else Descripción de la bebida
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <span class="font-bold text-gray-800">$15.00</span>
                                    <div class="flex space-x-2">
                                        <button class="text-blue-600 hover:text-blue-800 text-sm">Editar</button>
                                        <button class="text-red-600 hover:text-red-800 text-sm">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pestaña: Horarios --}}
            <div id="content-horarios" class="tab-content hidden">
                {{-- Botones de acción para Horarios --}}
                <div class="mb-6">
                    <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 font-semibold flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Configurar Horarios
                    </button>
                </div>

                {{-- Sección de Horarios --}}
                <div class="bg-white rounded-lg shadow-sm">
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
            </div>

            {{-- Pestaña: Calificaciones --}}
            <div id="content-calificaciones" class="tab-content hidden">
                <div class="bg-white rounded-lg shadow-sm">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Calificaciones y Reseñas</h3>
                        
                        {{-- Resumen de calificaciones --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                            <div class="text-center p-4 bg-blue-50 rounded-lg">
                                <div class="text-3xl font-bold text-blue-600">4.8</div>
                                <div class="text-yellow-400 text-sm">★★★★★</div>
                                <p class="text-blue-600 text-sm mt-1">Calificación promedio</p>
                            </div>
                            <div class="text-center p-4 bg-green-50 rounded-lg">
                                <div class="text-3xl font-bold text-green-600">156</div>
                                <p class="text-green-600 text-sm mt-1">Reseñas totales</p>
                            </div>
                            <div class="text-center p-4 bg-purple-50 rounded-lg">
                                <div class="text-3xl font-bold text-purple-600">92%</div>
                                <p class="text-purple-600 text-sm mt-1">Clientes satisfechos</p>
                            </div>
                        </div>

                        {{-- Lista de reseñas --}}
                        <div class="space-y-4">
                            <div class="border rounded-lg p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">María González</h4>
                                        <div class="text-yellow-400 text-sm">★★★★★</div>
                                    </div>
                                    <span class="text-sm text-gray-500">Hace 2 días</span>
                                </div>
                                <p class="text-gray-600">Excelente servicio y comida deliciosa. Los tacos al pastor son increíbles, volveré pronto.</p>
                            </div>

                            <div class="border rounded-lg p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Carlos Rodríguez</h4>
                                        <div class="text-yellow-400 text-sm">★★★★☆</div>
                                    </div>
                                    <span class="text-sm text-gray-500">Hace 1 semana</span>
                                </div>
                                <p class="text-gray-600">Muy buena comida, el servicio fue rápido y eficiente. Solo mejorar un poco la limpieza de las mesas.</p>
                            </div>

                            <div class="border rounded-lg p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Ana Martínez</h4>
                                        <div class="text-yellow-400 text-sm">★★★★★</div>
                                    </div>
                                    <span class="text-sm text-gray-500">Hace 2 semanas</span>
                                </div>
                                <p class="text-gray-600">La mejor comida de la zona, precios justos y porciones generosas. Recomendado 100%.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pestaña: Configuración --}}
            <div id="content-configuracion" class="tab-content hidden">
                {{-- Sección: Dar de baja mi negocio --}}
                <div class="bg-red-50 border border-red-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center mr-3">
                                <span class="text-red-600 text-xl">⚠️</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-red-800">Dar de baja mi negocio</h3>
                                <p class="text-red-600 text-sm">Acción irreversible - Leer cuidadosamente</p>
                            </div>
                        </div>

                        {{-- Aviso de no reembolso --}}
                        <div class="bg-red-100 border border-red-300 rounded-lg p-4 mb-6">
                            <div class="flex items-start">
                                <span class="text-red-600 mr-2">💡</span>
                                <div>
                                    <h4 class="font-medium text-red-800 mb-2">Aviso Importante</h4>
                                    <ul class="text-red-700 text-sm space-y-1">
                                        <li>• Esta acción es <strong>permanente e irreversible</strong></li>
                                        <li>• No habrá <strong>reembolso</strong> por el tiempo restante de tu suscripción</li>
                                        <li>• Todos los datos del establecimiento serán <strong>eliminados permanentemente</strong></li>
                                        <li>• No podrás reactivar el establecimiento posteriormente</li>
                                        <li>• Los clientes ya no podrán ver tu establecimiento en la app</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{-- Formulario de solicitud de baja --}}
                        <form class="space-y-4">
                            @csrf
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-red-700 mb-1">Motivo de la baja *</label>
                                    <select class="w-full border-red-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 bg-white" required>
                                        <option value="">Seleccionar motivo</option>
                                        <option value="cierre-definitivo">Cierre definitivo del negocio</option>
                                        <option value="no-rentable">El servicio no es rentable</option>
                                        <option value="migracion-plataforma">Migración a otra plataforma</option>
                                        <option value="problemas-tecnicos">Problemas técnicos con la plataforma</option>
                                        <option value="otro">Otro motivo</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-red-700 mb-1">Fecha efectiva de baja *</label>
                                    <input type="date" class="w-full border-red-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 bg-white" 
                                           min="{{ date('Y-m-d') }}" required>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-red-700 mb-1">Comentarios adicionales</label>
                                <textarea rows="3" 
                                          class="w-full border-red-300 rounded-md shadow-sm focus:border-red-500 focus:ring-red-500 bg-white"
                                          placeholder="¿Hay algo que nos gustaría saber sobre tu experiencia? (Opcional)"></textarea>
                            </div>

                            {{-- Confirmación de términos --}}
                            <div class="bg-white border border-red-200 rounded-lg p-4">
                                <label class="flex items-start space-x-3">
                                    <input type="checkbox" 
                                           class="mt-1 rounded border-red-300 text-red-600 shadow-sm focus:border-red-500 focus:ring-red-500"
                                           required>
                                    <span class="text-sm text-red-700">
                                        <strong>Confirmo que he leído y comprendo</strong> que esta acción es irreversible y que 
                                        <strong>no recibiré reembolso</strong> por el tiempo restante de mi suscripción. 
                                        Entiendo que todos los datos de mi establecimiento serán eliminados permanentemente.
                                    </span>
                                </label>
                            </div>

                            {{-- Botones de confirmación doble --}}
                            <div class="flex flex-col space-y-3 pt-4">
                                <button type="button" 
                                        id="iniciarBajaBtn"
                                        class="w-full bg-red-600 hover:bg-red-700 text-white py-3 px-6 rounded-lg font-semibold transition duration-200 flex items-center justify-center">
                                    SOLICITAR BAJA DEL NEGOCIO
                                </button>
                                
                                {{-- Botón de confirmación final (oculto inicialmente) --}}
                                <div id="confirmacionFinal" class="hidden space-y-3">
                                    <div class="bg-red-100 border-2 border-red-300 rounded-lg p-4 text-center">
                                        <p class="text-red-800 font-semibold mb-2">¿ESTÁS ABSOLUTAMENTE SEGURO?</p>
                                        <p class="text-red-700 text-sm">Esta es tu última oportunidad para cancelar</p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <button type="button" 
                                                id="cancelarBajaBtn"
                                                class="bg-gray-500 hover:bg-gray-600 text-white py-3 px-6 rounded-lg font-semibold transition duration-200">
                                            ❌ Cancelar - Mantener mi negocio
                                        </button>
                                        <button type="submit" 
                                                class="bg-red-800 hover:bg-red-900 text-white py-3 px-6 rounded-lg font-semibold transition duration-200">
                                            ✅ CONFIRMAR BAJA DEFINITIVA
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Script para las pestañas y confirmación doble --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Funcionalidad de pestañas
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const tabId = button.getAttribute('data-tab');
                    
                    // Remover clases activas
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active', 'border-blue-500', 'text-blue-600');
                        btn.classList.add('border-transparent', 'text-gray-500');
                    });
                    
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                        content.classList.add('hidden');
                    });

                    // Agregar clases activas
                    button.classList.add('active', 'border-blue-500', 'text-blue-600');
                    button.classList.remove('border-transparent', 'text-gray-500');
                    
                    document.getElementById(`content-${tabId}`).classList.add('active');
                    document.getElementById(`content-${tabId}`).classList.remove('hidden');
                });
            });

            // Funcionalidad de confirmación doble para baja
            const iniciarBajaBtn = document.getElementById('iniciarBajaBtn');
            const confirmacionFinal = document.getElementById('confirmacionFinal');
            const cancelarBajaBtn = document.getElementById('cancelarBajaBtn');
            
            if (iniciarBajaBtn) {
                iniciarBajaBtn.addEventListener('click', function() {
                    confirmacionFinal.classList.remove('hidden');
                    iniciarBajaBtn.classList.add('hidden');
                });
            }
            
            if (cancelarBajaBtn) {
                cancelarBajaBtn.addEventListener('click', function() {
                    confirmacionFinal.classList.add('hidden');
                    iniciarBajaBtn.classList.remove('hidden');
                });
            }
        });
    </script>

    <style>
        .tab-button.active {
            border-bottom-color: #3b82f6;
            color: #2563eb;
        }
        
        .tab-content {
            display: none;
        }
        
        .tab-content.active {
            display: block;
        }
    </style>
@endsection