<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100" x-data="{ mobileMenuOpen: false }">
        <!-- Sidebar Desktop -->
        <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-64 lg:flex-col">
            <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white border-r border-gray-200 px-6 pb-4">
                <div class="flex h-16 shrink-0 items-center">
                    <x-application-logo class="h-8 w-auto text-gray-800" />
                    <span class="ml-3 text-gray-800 text-xl font-bold">{{ config('app.name', 'Laravel') }}</span>
                </div>

                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    <x-heroicon-o-home class="h-5 w-5" />
                                    <span class="font-bold">{{ __('Inicio') }}</span>
                                </x-sidebar-link>

                                <x-sidebar-link :href="route('menus.index')" :active="request()->routeIs('menus.index')">
                                    <x-heroicon-o-building-storefront class="h-5 w-5" />
                                    <span class="font-bold">{{ __('Establecimientos') }}</span>
                                </x-sidebar-link>

                                <x-sidebar-link :href="route('promociones.index')" :active="request()->routeIs('promociones.*')">
                                    <x-heroicon-o-tag class="h-5 w-5" />
                                    <span class="font-bold">{{ __('Promociones') }}</span>
                                </x-sidebar-link>

                                <x-sidebar-link :href="route('planes.index')" :active="request()->routeIs('planes.index')">
                                    <x-heroicon-o-credit-card class="h-5 w-5" />
                                    <span class="font-bold">{{ __('Suscripciones') }}</span>
                                </x-sidebar-link>

                                <x-sidebar-link :href="route('notificaciones.index')" :active="request()->routeIs('notificaciones.index')">
                                    <x-heroicon-o-bell class="h-5 w-5" />
                                    <span class="font-bold">{{ __('Notificaciones') }}</span>
                                </x-sidebar-link>

                                <div class="border-t border-gray-200 my-2 pt-2">
                                    <x-sidebar-link :href="route('privacy')" :active="request()->routeIs('privacy')">
                                        <x-heroicon-o-shield-check class="h-5 w-5" />
                                        <span class="font-bold">{{ __('Política de Privacidad') }}</span>
                                    </x-sidebar-link>

                                    <x-sidebar-link :href="route('terms')" :active="request()->routeIs('terms')">
                                        <x-heroicon-o-document-text class="h-5 w-5" />
                                        <span class="font-bold">{{ __('Términos y Condiciones') }}</span>
                                    </x-sidebar-link>
                                </div>
                            </ul>
                        </li>
                        
                        <li class="mt-auto">
                            <div class="space-y-3">
                                <div class="flex items-center gap-x-4 px-2 py-3 text-sm font-semibold leading-6 text-gray-900">
                                    <div class="flex-shrink-0">
                                        <div class="h-8 w-8 bg-gray-800 rounded-full flex items-center justify-center">
                                            <span class="text-white text-sm font-bold">
                                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-gray-900 font-bold">{{ Auth::user()->name }}</p>
                                        <p class="text-gray-500 text-xs">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                                
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="w-full flex items-center justify-between px-2 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-md transition-colors duration-200">
                                            <span class="font-bold">Opciones de cuenta</span>
                                            <x-heroicon-o-chevron-down class="h-4 w-4" />
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')" class="flex items-center gap-x-2">
                                            <x-heroicon-o-user class="h-4 w-4" />
                                            <span class="font-bold">{{ __('Perfil') }}</span>
                                        </x-dropdown-link>
                                        
                                        <x-dropdown-link :href="route('privacy')" class="flex items-center gap-x-2">
                                            <x-heroicon-o-shield-check class="h-4 w-4" />
                                            <span class="font-bold">{{ __('Política de Privacidad') }}</span>
                                        </x-dropdown-link>
                                        
                                        <x-dropdown-link :href="route('terms')" class="flex items-center gap-x-2">
                                            <x-heroicon-o-document-text class="h-4 w-4" />
                                            <span class="font-bold">{{ __('Términos y Condiciones') }}</span>
                                        </x-dropdown-link>

                                        <div class="border-t border-gray-100 my-1"></div>
                                        
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link :href="route('logout')" 
                                                onclick="event.preventDefault(); this.closest('form').submit();"
                                                class="flex items-center gap-x-2 text-red-600 hover:bg-red-50">
                                                <x-heroicon-o-arrow-right-on-rectangle class="h-4 w-4" />
                                                <span class="font-bold">{{ __('Cerrar sesión') }}</span>
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- Contenido Principal -->
        <div class="lg:pl-64">
            <!-- Header Mobile -->
            <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8 lg:hidden">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="mobileMenuOpen = true">
                    <x-heroicon-o-bars-3 class="h-6 w-6" />
                </button>

                <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                    <div class="flex flex-1 items-center">
                        <div class="flex items-center">
                            <x-application-logo class="h-8 w-auto text-gray-800" />
                            <span class="ml-2 text-gray-800 text-lg font-bold">{{ config('app.name', 'Laravel') }}</span>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-x-4 lg:gap-x-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm text-gray-500 hover:text-gray-700">
                                    <div class="font-bold">{{ Auth::user()->name }}</div>
                                    <x-heroicon-o-chevron-down class="ml-1 h-4 w-4" />
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    <span class="font-bold">{{ __('Perfil') }}</span>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('privacy')">
                                    <span class="font-bold">{{ __('Política de Privacidad') }}</span>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('terms')">
                                    <span class="font-bold">{{ __('Términos y Condiciones') }}</span>
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <span class="font-bold">{{ __('Cerrar sesión') }}</span>
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>

            <!-- Área de Contenido -->
            <main class="py-8">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    @if(session('success') || session('error') || session('warning') || session('info'))
                    <div class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 w-full max-w-md">
                        @if(session('success'))
                        <div class="bg-purple-100 border border-purple-400 text-purple-700 px-4 py-3 rounded-lg shadow-lg mb-4">
                            <div class="flex items-center">
                                <x-heroicon-o-check-circle class="h-5 w-5 text-purple-600 mr-2" />
                                <span class="font-bold">{{ session('success') }}</span>
                            </div>
                        </div>
                        @endif

                        @if(session('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg shadow-lg mb-4">
                            <div class="flex items-center">
                                <x-heroicon-o-x-circle class="h-5 w-5 text-red-600 mr-2" />
                                <span class="font-bold">{{ session('error') }}</span>
                            </div>
                        </div>
                        @endif
                    </div>
                    @endif

                    <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

        <!-- Sidebar Mobile (OCULTO POR DEFECTO) -->
        <div x-show="mobileMenuOpen" x-cloak class="lg:hidden">
            <div class="fixed inset-0 z-50 flex">
                <!-- Overlay -->
                <div class="fixed inset-0 bg-gray-900/80" x-show="mobileMenuOpen" @click="mobileMenuOpen = false"></div>
                
                <!-- Sidebar Mobile -->
                <div class="relative mr-16 flex w-full max-w-xs flex-1">
                    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                        <div class="flex h-16 shrink-0 items-center justify-between">
                            <div class="flex items-center">
                                <x-application-logo class="h-8 w-auto text-gray-800" />
                                <span class="ml-3 text-gray-800 text-xl font-bold">{{ config('app.name', 'Laravel') }}</span>
                            </div>
                            <button @click="mobileMenuOpen = false" class="-m-2.5 p-2.5 text-gray-700">
                                <x-heroicon-o-x-mark class="h-6 w-6" />
                            </button>
                        </div>
                        <nav class="flex flex-1 flex-col">
                            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                <li>
                                    <ul role="list" class="-mx-2 space-y-1">
                                        <x-sidebar-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                            <x-heroicon-o-home class="h-5 w-5" />
                                            <span class="font-bold">{{ __('Inicio') }}</span>
                                        </x-sidebar-link>
                                        <x-sidebar-link :href="route('menus.index')" :active="request()->routeIs('menus.index')">
                                            <x-heroicon-o-building-storefront class="h-5 w-5" />
                                            <span class="font-bold">{{ __('Establecimientos') }}</span>
                                        </x-sidebar-link>
                                        <x-sidebar-link :href="route('promociones.index')" :active="request()->routeIs('promociones.*')">
                                            <x-heroicon-o-tag class="h-5 w-5" />
                                            <span class="font-bold">{{ __('Promociones') }}</span>
                                        </x-sidebar-link>
                                        <x-sidebar-link :href="route('planes.index')" :active="request()->routeIs('planes.index')">
                                            <x-heroicon-o-credit-card class="h-5 w-5" />
                                            <span class="font-bold">{{ __('Suscripciones') }}</span>
                                        </x-sidebar-link>
                                        <x-sidebar-link :href="route('notificaciones.index')" :active="request()->routeIs('notificaciones.index')">
                                            <x-heroicon-o-bell class="h-5 w-5" />
                                            <span class="font-bold">{{ __('Notificaciones') }}</span>
                                        </x-sidebar-link>
                                        
                                        <div class="border-t border-gray-200 my-2 pt-2">
                                            <x-sidebar-link :href="route('privacy')" :active="request()->routeIs('privacy')">
                                                <x-heroicon-o-shield-check class="h-5 w-5" />
                                                <span class="font-bold">{{ __('Política de Privacidad') }}</span>
                                            </x-sidebar-link>

                                            <x-sidebar-link :href="route('terms')" :active="request()->routeIs('terms')">
                                                <x-heroicon-o-document-text class="h-5 w-5" />
                                                <span class="font-bold">{{ __('Términos y Condiciones') }}</span>
                                            </x-sidebar-link>
                                        </div>
                                    </ul>
                                </li>
                                
                                <li class="mt-auto">
                                    <div class="space-y-3">
                                        <div class="flex items-center gap-x-4 px-2 py-3 text-sm font-semibold leading-6 text-gray-900">
                                            <div class="flex-shrink-0">
                                                <div class="h-8 w-8 bg-gray-800 rounded-full flex items-center justify-center">
                                                    <span class="text-white text-sm font-bold">
                                                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-gray-900 font-bold">{{ Auth::user()->name }}</p>
                                                <p class="text-gray-500 text-xs">{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        
                                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                                            @csrf
                                            <button type="submit" class="w-full flex items-center gap-x-2 px-2 py-2 text-sm text-red-600 hover:bg-red-50 rounded-md transition-colors duration-200">
                                                <x-heroicon-o-arrow-right-on-rectangle class="h-4 w-4" />
                                                <span class="font-bold">{{ __('Cerrar sesión') }}</span>
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>