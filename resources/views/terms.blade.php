<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Términos y Condiciones - {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .terms-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }
        .terms-header {
            background: linear-gradient(135deg, #241178 0%, #3a29a1 100%);
            color: white;
            padding: 3rem 1rem;
            text-align: center;
            margin-bottom: 2rem;
        }
        .terms-content {
            background: #FFFFFF;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 2rem;
        }
        .back-button {
            display: inline-flex;
            align-items: center;
            color: white;
            text-decoration: none;
            font-weight: 500;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        .back-button:hover {
            opacity: 1;
        }
        .section-title {
            color: #000000;
            border-bottom: 2px solid #241178;
            padding-bottom: 0.5rem;
            margin-top: 2rem;
        }
        .last-updated {
            background: #241178;
            padding: 1rem;
            border-radius: 6px;
            border-left: 4px solid #241178;
            margin-bottom: 2rem;
        }
        .warning-box {
            background: #EE0000;
            border: 1px solid #EE0000;
            border-left: 4px solid #EE0000;
            padding: 1rem;
            border-radius: 6px;
            margin: 1rem 0;
        }
        .info-box {
            background: #241178;
            border: 1px solid #241178;
            border-left: 4px solid #241178;
            padding: 1rem;
            border-radius: 6px;
            margin: 1rem 0;
        }
        .clause {
            background: #241178;
            padding: 1rem;
            border-radius: 6px;
            margin: 1rem 0;
            border-left: 3px solid #241178;
        }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased">
    <!-- Header -->
    <header class="terms-header">
        <div class="max-w-4xl mx-auto">
            <a href="{{ url('/') }}" class="back-button">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Volver al Inicio
            </a>
            <h1 class="text-4xl font-bold mb-4">Términos y Condiciones</h1>
            <p class="text-xl opacity-90">Condiciones de uso de nuestra plataforma</p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="terms-container">
        <div class="terms-content">
            <div class="last-updated">
                <strong class="text-white">Última actualización:</strong> <span class="text-white">{{ date('d/m/Y') }}</span>
            </div>

            <div class="warning-box">
                <strong class="text-white">⚠️ Importante:</strong> <span class="text-white">Al utilizar {{ config('app.name', 'nuestra plataforma') }}, aceptas cumplir con estos términos y condiciones. Te recomendamos leerlos detenidamente.</span>
            </div>

            <div class="prose max-w-none">
                <h2 class="section-title">1. Aceptación de los Términos</h2>
                <div class="clause">
                    <p class="text-white">Al acceder y utilizar <strong class="text-white">{{ config('app.name', 'SBVC') }}</strong>, aceptas estar legalmente obligado por estos Términos y Condiciones. Si no estás de acuerdo con alguno de estos términos, por favor no utilices nuestra plataforma.</p>
                </div>

                <h2 class="section-title">2. Definiciones</h2>
                <ul class="list-disc pl-6 mt-2 space-y-2 text-[#000000]">
                    <li><strong>"Plataforma":</strong> El sitio web y aplicación {{ config('app.name', 'SBVC') }}</li>
                    <li><strong>"Usuario":</strong> Persona que utiliza la plataforma para buscar establecimientos</li>
                    <li><strong>"Establecimiento":</strong> Negocio registrado que ofrece productos/servicios</li>
                    <li><strong>"Servicios":</strong> Funcionalidades ofrecidas por la plataforma</li>
                </ul>

                <h2 class="section-title">3. Registro y Cuenta</h2>
                <div class="clause">
                    <h3 class="font-semibold mb-2 text-white">3.1. Requisitos de Registro</h3>
                    <ul class="list-disc pl-6 space-y-1 text-white">
                        <li>Debes ser mayor de 18 años</li>
                        <li>Proporcionar información veraz y actualizada</li>
                        <li>Mantener la confidencialidad de tu cuenta</li>
                        <li>Notificar cualquier uso no autorizado inmediatamente</li>
                    </ul>
                </div>

                <div class="clause">
                    <h3 class="font-semibold mb-2 text-white">3.2. Responsabilidades del Usuario</h3>
                    <ul class="list-disc pl-6 space-y-1 text-white">
                        <li>No compartir tu cuenta con terceros</li>
                        <li>No utilizar la plataforma para actividades ilegales</li>
                        <li>Respetar los derechos de propiedad intelectual</li>
                        <li>No realizar reservas falsas o fraudulentas</li>
                    </ul>
                </div>

                <h2 class="section-title">4. Para Establecimientos</h2>
                <div class="clause">
                    <h3 class="font-semibold mb-2 text-white">4.1. Requisitos Comerciales</h3>
                    <ul class="list-disc pl-6 space-y-1 text-white">
                        <li>Contar con los permisos y licencias necesarias</li>
                        <li>Proporcionar información comercial veraz</li>
                        <li>Mantener actualizados precios y disponibilidad</li>
                        <li>Cumplir con las reservas y pedidos confirmados</li>
                    </ul>
                </div>

                <div class="clause">
                    <h3 class="font-semibold mb-2 text-white">4.2. Calidad del Servicio</h3>
                    <ul class="list-disc pl-6 space-y-1 text-white">
                        <li>Ofrecer productos/servicios según lo descrito</li>
                        <li>Mantener estándares de higiene y seguridad</li>
                        <li>Responder a consultas en tiempo razonable</li>
                        <li>Gestionar quejas de manera profesional</li>
                    </ul>
                </div>

                <h2 class="section-title">5. Reservas y Pedidos</h2>
                <div class="info-box">
                    <strong class="text-white">📋 Proceso de Reservas:</strong> <span class="text-white">Las reservas están sujetas a disponibilidad y políticas específicas de cada establecimiento.</span>
                </div>

                <div class="clause">
                    <h3 class="font-semibold mb-2 text-white">5.1. Confirmación</h3>
                    <ul class="list-disc pl-6 space-y-1 text-white">
                        <li>Las reservas requieren confirmación del establecimiento</li>
                        <li>Recibirás notificación de confirmación o rechazo</li>
                        <li>Los establecimientos pueden establecer límites de tiempo</li>
                    </ul>
                </div>

                <div class="clause">
                    <h3 class="font-semibold mb-2 text-white">5.2. Cancelaciones</h3>
                    <ul class="list-disc pl-6 space-y-1 text-white">
                        <li>Consulta políticas de cancelación específicas</li>
                        <li>Notifica con anticipación según lo establecido</li>
                        <li>Cancelaciones repetitivas pueden afectar tu cuenta</li>
                    </ul>
                </div>

                <h2 class="section-title">6. Conducta Prohibida</h2>
                <div class="warning-box">
                    <strong class="text-white">🚫 No está permitido:</strong>
                </div>
                <div class="grid md:grid-cols-2 gap-4 mt-2">
                    <div class="bg-[#EE0000] p-3 rounded-lg">
                        <h4 class="font-semibold text-white mb-2">Actividades Prohibidas</h4>
                        <ul class="text-sm space-y-1 text-white">
                            <li>• Suplantación de identidad</li>
                            <li>• Spam o publicidad no autorizada</li>
                            <li>• Contenido ofensivo o ilegal</li>
                            <li>• Actividades fraudulentas</li>
                        </ul>
                    </div>
                    <div class="bg-[#EE0000] p-3 rounded-lg">
                        <h4 class="font-semibold text-white mb-2">Conducta Inapropiada</h4>
                        <ul class="text-sm space-y-1 text-white">
                            <li>• Acoso a otros usuarios</li>
                            <li>• Reseñas falsas o malintencionadas</li>
                            <li>• Uso excesivo de recursos</li>
                            <li>• Violación de derechos de autor</li>
                        </ul>
                    </div>
                </div>

                <h2 class="section-title">7. Propiedad Intelectual</h2>
                <div class="clause">
                    <p class="text-white">Todos los derechos de propiedad intelectual relacionados con la plataforma, incluyendo pero no limitado a software, diseño, logotipos y contenido, son propiedad de <strong class="text-white">{{ config('app.name', 'SBVC') }}</strong> o de sus licenciantes.</p>
                </div>

                <h2 class="section-title">8. Limitación de Responsabilidad</h2>
                <div class="warning-box">
                    <strong class="text-white">📝 Limitaciones:</strong> <span class="text-white">{{ config('app.name', 'SBVC') }} actúa como intermediario entre usuarios y establecimientos. No somos responsables por:</span>
                </div>
                <ul class="list-disc pl-6 mt-2 space-y-2 text-[#000000]">
                    <li>La calidad de productos/servicios de establecimientos</li>
                    <li>Disputas entre usuarios y establecimientos</li>
                    <li>Daños o pérdidas derivadas del uso de la plataforma</li>
                    <li>Interrupciones temporales del servicio</li>
                </ul>

                <h2 class="section-title">9. Modificaciones de los Términos</h2>
                <div class="clause">
                    <p class="text-white">Nos reservamos el derecho de modificar estos Términos y Condiciones en cualquier momento. Las modificaciones entrarán en vigor inmediatamente después de su publicación en la plataforma. El uso continuado constituye aceptación de los términos modificados.</p>
                </div>

                <h2 class="section-title">10. Terminación</h2>
                <div class="clause">
                    <p class="text-white">Podemos suspender o terminar tu acceso a la plataforma si:</p>
                    <ul class="list-disc pl-6 mt-2 space-y-1 text-white">
                        <li>Violas estos términos y condiciones</li>
                        <li>Realizas actividades fraudulentas</li>
                        <li>Incumples leyes aplicables</li>
                        <li>Pones en riesgo la seguridad de la plataforma</li>
                    </ul>
                </div>

                <h2 class="section-title">11. Ley Aplicable y Jurisdicción</h2>
                <div class="clause">
                    <p class="text-white">Estos términos se rigen por las leyes de [País]. Cualquier disputa será resuelta en los tribunales competentes de [Ciudad, País].</p>
                </div>

                <h2 class="section-title">12. Contacto</h2>
                <div class="info-box">
                    <p class="text-white">Para consultas sobre estos Términos y Condiciones:</p>
                    <div class="mt-2 space-y-1 text-white">
                        <p><strong>📧 Email:</strong> legal@{{ parse_url(config('app.url'), PHP_URL_HOST) ?? 'tudominio.com' }}</p>
                        <p><strong>📍 Dirección:</strong> [Tu dirección legal]</p>
                        <p><strong>⏰ Horario de atención:</strong> Lunes a Viernes, 9:00 - 18:00</p>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-[#241178] rounded-lg text-center">
                    <p class="text-white font-semibold">
                        Al utilizar {{ config('app.name', 'nuestra plataforma') }}, confirmas que has leído, entendido y aceptas estos Términos y Condiciones en su totalidad.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#FFFFFF] border-t mt-8">
        <div class="max-w-4xl mx-auto py-6 px-4 text-center text-[#000000]">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
            <div class="mt-2 space-x-4">
                <a href="{{ url('/') }}" class="text-[#241178] hover:text-[#1a0d5a] text-sm">Inicio</a>
                <a href="{{ route('privacy') }}" class="text-[#241178] hover:text-[#1a0d5a] text-sm">Política de Privacidad</a>
            </div>
        </div>
    </footer>
</body>
</html>