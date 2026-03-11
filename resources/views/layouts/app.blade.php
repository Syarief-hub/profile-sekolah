<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel Admin Panel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Tailwind Config -->
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        },
                        colors: {
                            primary: '#059669', // Emerald 600
                            secondary: '#F59E0B', // Amber 500
                        }
                    }
                }
            }
        </script>
    </head>
    <body class="font-sans antialiased text-slate-800 bg-slate-50 selection:bg-primary selection:text-white relative overflow-x-hidden">
        
        <!-- Animated Background Elements -->
        <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-40 -right-40 w-96 h-96 bg-primary/10 rounded-full blur-3xl opacity-60 mix-blend-multiply animate-pulse" style="animation-duration: 4s;"></div>
            <div class="absolute top-1/2 -left-40 w-96 h-96 bg-emerald-300/20 rounded-full blur-3xl opacity-60 mix-blend-multiply animate-pulse" style="animation-duration: 7s;"></div>
            <div class="absolute -bottom-40 right-1/4 w-96 h-96 bg-teal-200/20 rounded-full blur-3xl opacity-60 mix-blend-multiply animate-pulse" style="animation-duration: 5s;"></div>
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.03]"></div>
        </div>

        <div class="min-h-screen flex relative z-10 w-full">
            <!-- Navbar / Sidebar -->
            @include('layouts.navigation')

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col min-w-0 transition-all duration-300 ml-0 lg:ml-72 bg-slate-50/50 backdrop-blur-3xl min-h-screen border-l border-white/50">
                
                <!-- Top Header (Mobile Toggle & Breadcrumbs/Header) -->
                @isset($header)
                    <header class="bg-white/70 backdrop-blur-md sticky top-0 z-40 border-b border-slate-200/60 transition-all">
                        <div class="px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
                            <!-- Top Right / Hamburger Space & Title -->
                            <div class="flex-1 flex items-center min-w-0 pr-4">
                                <!-- Spacer for the fixed mobile hamburger button -->
                                <div class="w-12 shrink-0 lg:hidden"></div>
                                <div class="w-full">
                                    {{ $header }}
                                </div>
                            </div>
                            
                            <!-- User Profile Mini (Desktop) -->
                            <div class="hidden lg:flex items-center gap-4">
                                <a href="{{ url('/') }}" target="_blank" class="w-10 h-10 rounded-full bg-white border border-slate-200 text-slate-500 hover:text-primary hover:border-primary/30 flex items-center justify-center transition shadow-sm" title="Lihat Website">
                                    <i class="fa-solid fa-globe"></i>
                                </a>
                                <div class="h-8 w-px bg-slate-200"></div>
                                <div class="flex items-center gap-3 bg-white border border-slate-200 py-1.5 px-2 rounded-full shadow-sm cursor-pointer hover:shadow-md transition">
                                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-emerald-600 flex items-center justify-center text-white text-xs font-bold shadow-inner">
                                        {{ substr(Auth::user()->name, 0, 1) }}
                                    </div>
                                    <span class="text-sm font-semibold text-slate-700 pr-2">{{ explode(' ', Auth::user()->name)[0] }}</span>
                                </div>
                            </div>
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-1 p-4 sm:p-6 lg:p-8">
                    <div class="max-w-7xl mx-auto">
                        {{ $slot }}
                    </div>
                </main>
                
                <!-- Footer -->
                <footer class="py-6 px-8 border-t border-slate-200/60 bg-white/30 backdrop-blur-sm mt-auto">
                    <p class="text-center text-sm text-slate-500 font-medium">
                        &copy; {{ date('Y') }} SMA Negeri 1 Suwawa. All rights reserved. | <span class="text-primary">Admin Panel v2.0</span>
                    </p>
                </footer>
            </div>
        </div>
    </body>
</html>
