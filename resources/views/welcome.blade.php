<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBVC - Tu comida favorita a un click</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        :root {
            --color-primary: #241178;    
            --color-secondary: #DC6601;  
            --color-accent: #EE0000;     
            --color-success: #4CAF50;    
            --color-dark: #000000;       
            --color-light: #FFFFFF;      
            --color-yellow: #272800;     
        }
    </style>
</head>

<body class="bg-white font-sans">
    
    <header class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <div class="flex items-center">
                    <div class="flex items-center space-x-3">
                        <img 
                            src="{{ asset('images/logo_comidas.jpg') }}" 
                            alt="FoodExpress Logo" 
                            class="h-10 w-auto"
                        >
                        <span class="text-xl font-bold text-[#000000]">SBVC</span>
                    </div>
                </div>

                
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="bg-[#241178] text-white px-4 py-2 rounded-lg hover:bg-[#1a0d5a] font-medium">
                            Mi Cuenta
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-[#000000] hover:text-[#241178] font-medium">
                            Iniciar Sesión
                        </a>
                        <a href="{{ route('register') }}" class="bg-[#DC6601] text-white px-4 py-2 rounded-lg hover:bg-[#c45a01] font-medium">
                            Registrarse
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </header>

    
<section class="bg-gradient-to-r from-[#241178] to-[#3a29a1] text-white py-32 relative">
    <div class="absolute inset-0 bg-cover bg-center opacity-10" 
        style="background-image: url('{{ asset('images/fonda.jpg') }}');">
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 gap-12 items-center">
            <div class="text-center lg:text-left">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">
                   Eres dueño de un 
                    <span class="text-[#DC6601]">restaurante?</span>
                </h1>
                <p class="text-xl text-blue-100 mb-8">
                    Descubre la mejor plataforma para promocionar tus platillos.
                </p>

                <div class="flex justify-center lg:justify-start mb-8">
                    <a href="{{ route('register') }}" class="bg-[#DC6601] hover:bg-[#c45a01] text-white text-2xl font-bold px-12 py-6 rounded-lg inline-block transition-all duration-300 transform hover:scale-105 shadow-lg text-center">
                        Registrarme
                    </a>
                </div>

                <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
                    <div class="flex items-center">
                        <div class="bg-[#4CAF50] rounded-full p-2 mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-lg">24/7</p>
                            <p class="text-blue-200 text-sm">A cualquier hora del día</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="bg-[#DC6601] rounded-full p-2 mr-3">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-lg">500+</p>
                            <p class="text-blue-200 text-sm">Restaurantes</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <div class="text-center mb-4">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Descarga la aplicación de SBVC
                    </h2>
                    <p class="text-xl text-gray-600 mb-6">
                        Disfruta de todos los restaurantes y promociones desde tu celular. Ordena fácil y rápido.
                    </p>
                </div>

                <div class="flex flex-row gap-4 justify-center items-center max-w-md mx-auto">
                    <a href="#" class="transition-transform duration-300 hover:scale-105 w-48">
                        <img 
                            src="{{ asset('images/appStore.png') }}" 
                            alt="Descargar en App Store" 
                            class="w-full h-auto"
                        >
                    </a>
                    <a href="#" class="transition-transform duration-300 hover:scale-105 w-44">
                        <img 
                            src="{{ asset('images/playStore.png') }}" 
                            alt="Descargar en Play Store" 
                            class="w-full h-auto"
                        >
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Categorías Populares</h2>
                <p class="text-gray-600 text-lg">Encuentra lo que más te gusta desde la aplicación móvil</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 mb-8">
                <div class="bg-white rounded-xl p-6 text-center shadow-md hover:shadow-lg transition-shadow cursor-pointer border-2 border-transparent hover:border-[#241178]">
                    <div class="w-16 h-16 bg-[#241178] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🍕</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Pizza</h3>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-md hover:shadow-lg transition-shadow cursor-pointer border-2 border-transparent hover:border-[#DC6601]">
                    <div class="w-16 h-16 bg-[#DC6601] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🍔</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Hamburguesas</h3>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-md hover:shadow-lg transition-shadow cursor-pointer border-2 border-transparent hover:border-[#EE0000]">
                    <div class="w-16 h-16 bg-[#EE0000] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🍣</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Sushi</h3>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-md hover:shadow-lg transition-shadow cursor-pointer border-2 border-transparent hover:border-[#4CAF50]">
                    <div class="w-16 h-16 bg-[#4CAF50] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🥗</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Saludable</h3>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-md hover:shadow-lg transition-shadow cursor-pointer border-2 border-transparent hover:border-[#272800]">
                    <div class="w-16 h-16 bg-[#272800] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🍦</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Postres</h3>
                </div>

                <div class="bg-white rounded-xl p-6 text-center shadow-md hover:shadow-lg transition-shadow cursor-pointer border-2 border-transparent hover:border-[#241178]">
                    <div class="w-16 h-16 bg-[#241178] rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">☕</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Café</h3>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-3 mb-4">
                        <img 
                            src="{{ asset('images/logo_comidas.jpg') }}" 
                            alt="SBVC Logo" 
                            class="h-10 w-auto"
                        >
                        <span class="text-xl font-bold">SBVC</span>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Llevando los mejores sabores directamente a tu puerta. Disfruta de una experiencia culinaria única con entrega rápida y segura.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">...</svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">...</svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Twitter</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">...</svg>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Enlaces Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Inicio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Restaurantes</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Promociones</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contacto</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Contacto</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>contacto@SBVC.com</li>
                        <li>+1 (555) 123-4567</li>
                        <li>Ciudad de México, MX</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 SBVC. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>
</html>