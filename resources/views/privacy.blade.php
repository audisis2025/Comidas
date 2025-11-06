<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Política de Privacidad - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .privacy-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        .privacy-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 3rem 1rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .privacy-content {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .back-button {
            display: inline-flex;
            align-items: center;
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 2rem;
        }
        .back-button:hover {
            color: #5a6fd8;
        }
        .section-title {
            color: #2d3748;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 0.5rem;
            margin-top: 2rem;
        }
        .last-updated {
            background: #f7fafc;
            padding: 1rem;
            border-radius: 6px;
            border-left: 4px solid #667eea;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- Header -->
    <header class="privacy-header">
        <div class="max-w-4xl mx-auto">
            <a href="{{ url('/') }}" class="back-button">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Volver al Inicio
            </a>
            <h1 class="text-4xl font-bold mb-4">Política de Privacidad</h1>
            <p class="text-xl opacity-90">Cómo protegemos y utilizamos tu información</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="privacy-container">
        <div class="privacy-content">
            <div class="last-updated">
                <strong>Última actualización:</strong> {{ date('d/m/Y') }}
            </div>

            <div class="prose max-w-none">
                <h2 class="section-title">1. Información que Recopilamos</h2>
                <p>En <strong>{{ config('app.name', 'Nuestra Aplicación') }}</strong>, nos comprometemos a proteger tu privacidad. Recopilamos la siguiente información:</p>
                
                <ul class="list-disc pl-6 mt-2 space-y-2">
                    <li><strong>Información personal:</strong> Nombre, dirección de correo electrónico, y datos de contacto cuando te registras.</li>
                    <li><strong>Información de uso:</strong> Cómo interactúas con nuestra plataforma, páginas visitadas y funciones utilizadas.</li>
                    <li><strong>Información técnica:</strong> Dirección IP, tipo de navegador, dispositivo y datos de cookies.</li>
                    <li><strong>Datos de establecimientos:</strong> Información sobre tu negocio si eres un establecimiento registrado.</li>
                </ul>

                <h2 class="section-title">2. Uso de la Información</h2>
                <p>Utilizamos la información recopilada para los siguientes propósitos:</p>
                
                <div class="grid md:grid-cols-2 gap-4 mt-4">
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Para Usuarios</h3>
                        <ul class="text-sm space-y-1">
                            <li>• Personalizar tu experiencia</li>
                            <li>• Mostrar establecimientos relevantes</li>
                            <li>• Gestionar tus reservas y pedidos</li>
                            <li>• Enviar notificaciones importantes</li>
                        </ul>
                    </div>
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-green-800 mb-2">Para Establecimientos</h3>
                        <ul class="text-sm space-y-1">
                            <li>• Gestionar tu presencia en la plataforma</li>
                            <li>• Procesar pedidos y reservas</li>
                            <li>• Analizar el rendimiento de tu negocio</li>
                            <li>• Comunicarnos contigo sobre tu cuenta</li>
                        </ul>
                    </div>
                </div>

                <h2 class="section-title">3. Protección de Datos</h2>
                <p>Implementamos medidas de seguridad robustas para proteger tu información:</p>
                
                <ul class="list-disc pl-6 mt-2 space-y-2">
                    <li>Encriptación de datos sensibles</li>
                    <li>Acceso restringido a información personal</li>
                    <li>Monitoreo continuo de seguridad</li>
                    <li>Protocolos de respuesta a incidentes</li>
                </ul>

                <h2 class="section-title">4. Compartir Información</h2>
                <p><strong>No vendemos tu información personal.</strong> Solo compartimos datos en los siguientes casos:</p>
                
                <ul class="list-disc pl-6 mt-2 space-y-2">
                    <li>Con establecimientos para procesar tus pedidos/reservas</li>
                    <li>Con proveedores de servicios esenciales (hosting, pagos)</li>
                    <li>Cuando sea requerido por ley o autoridades competentes</li>
                    <li>En caso de fusión o adquisición de la empresa</li>
                </ul>

                <h2 class="section-title">5. Tus Derechos</h2>
                <p>Tienes derecho a:</p>
                
                <div class="bg-gray-50 p-4 rounded-lg mt-2">
                    <div class="grid md:grid-cols-2 gap-3 text-sm">
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                            Acceder a tus datos personales
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                            Rectificar información incorrecta
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                            Solicitar la eliminación de tus datos
                        </div>
                        <div class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                            Oponerte al procesamiento de datos
                        </div>
                    </div>
                </div>

                <h2 class="section-title">6. Cookies y Tecnologías Similares</h2>
                <p>Utilizamos cookies para mejorar tu experiencia:</p>
                
                <ul class="list-disc pl-6 mt-2 space-y-2">
                    <li><strong>Cookies esenciales:</strong> Para el funcionamiento básico del sitio</li>
                    <li><strong>Cookies de rendimiento:</strong> Para entender cómo usas nuestra plataforma</li>
                    <li><strong>Cookies de funcionalidad:</strong> Para recordar tus preferencias</li>
                </ul>

                <h2 class="section-title">7. Cambios en esta Política</h2>
                <p>Podemos actualizar esta política periódicamente. Te notificaremos sobre cambios significativos a través de:</p>
                
                <ul class="list-disc pl-6 mt-2 space-y-2">
                    <li>Notificaciones en la aplicación</li>
                    <li>Correo electrónico</li>
                    <li>Actualización de la fecha en esta página</li>
                </ul>

                <h2 class="section-title">8. Contacto</h2>
                <div class="bg-blue-50 p-4 rounded-lg mt-2">
                    <p>Si tienes preguntas sobre esta política de privacidad, contáctanos:</p>
                    <div class="mt-2 space-y-1">
                        <p><strong>Email:</strong> privacidad@{{ parse_url(config('app.url'), PHP_URL_HOST) ?? 'tudominio.com' }}</p>
                        <p><strong>Dirección:</strong> [Tu dirección física]</p>
                        <p><strong>Horario de atención:</strong> Lunes a Viernes, 9:00 - 18:00</p>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-gray-100 rounded-lg text-center">
                    <p class="text-sm text-gray-600">
                        Al utilizar nuestros servicios, aceptas los términos de esta Política de Privacidad.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-8">
        <div class="max-w-4xl mx-auto py-6 px-4 text-center text-gray-600">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
            <div class="mt-2 space-x-4">
                <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-800 text-sm">Inicio</a>
                <a href="{{ route('terms') }}" class="text-blue-600 hover:text-blue-800 text-sm">Términos y Condiciones</a>
            </div>
        </div>
    </footer>
</body>
</html>