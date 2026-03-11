<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login | SMA Negeri 1 Suwawa</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
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
    <body class="font-sans text-gray-900 antialiased bg-slate-50 selection:bg-primary selection:text-white">
        
        <div class="min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-8 relative overflow-hidden">
            <!-- Background Decoration -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 bg-slate-100">
                <div class="absolute -top-40 -right-40 w-96 h-96 bg-primary/20 rounded-full blur-3xl opacity-50"></div>
                <div class="absolute top-1/2 -left-40 w-96 h-96 bg-emerald-300/30 rounded-full blur-3xl opacity-50"></div>
                <div class="absolute -bottom-40 right-1/4 w-96 h-96 bg-secondary/10 rounded-full blur-3xl opacity-50"></div>
            </div>

            <!-- Main Card Container -->
            <div class="w-full max-w-5xl bg-white rounded-[2rem] shadow-2xl overflow-hidden flex flex-col md:flex-row border border-white/50 relative z-10 backdrop-blur-xl">
                
                <!-- Left Side: Image / Promo -->
                <div class="hidden md:block w-1/2 relative bg-slate-900">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=1000&auto=format&fit=crop" alt="Sekolah SMA N 1 Suwawa" class="absolute inset-0 w-full h-full object-cover rounded-l-[2rem] opacity-70">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
                    
                    <div class="absolute bottom-0 left-0 right-0 p-10 lg:p-12 text-white">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/30 bg-white/10 backdrop-blur-md mb-6 shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                            <span class="text-xs font-bold tracking-wider uppercase">Portal Admin</span>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-extrabold mb-4 leading-tight">Selamat Datang di<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">SMA Negeri 1 Suwawa</span></h2>
                        <p class="text-slate-300 text-sm leading-relaxed max-w-md">Sistem informasi manajemen sekolah terpadu. Silakan masuk dengan akun yang telah terdaftar untuk mengelola konten website publik sekolah Anda.</p>
                    </div>
                </div>

                <!-- Right Side: Login Form -->
                <div class="w-full md:w-1/2 p-8 sm:p-12 lg:p-16 flex flex-col justify-center bg-white/90">
                    
                    <!-- Mobile Logo (Hidden on Desktop) -->
                    <div class="md:hidden flex flex-col items-center text-center mb-8">
                        <div class="w-16 h-16 bg-gradient-to-br from-primary to-emerald-800 rounded-2xl flex items-center justify-center text-white text-3xl shadow-lg mb-4">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-slate-800">Admin Portal</h2>
                        <p class="text-sm text-slate-500 mt-1">SMA Negeri 1 Suwawa</p>
                    </div>

                    <div class="hidden md:flex items-center gap-4 mb-10">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary to-emerald-800 rounded-xl flex items-center justify-center text-white text-xl shadow-md">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-800 leading-none">Admin Panel</h3>
                            <span class="text-xs text-slate-500 font-medium tracking-wide uppercase">Secure Login</span>
                        </div>
                    </div>

                    {{ $slot }}

                    <div class="mt-8 pt-6 border-t border-slate-100 flex items-center justify-center gap-4">
                        <a href="{{ url('/') }}" class="text-sm text-slate-500 hover:text-primary transition font-medium flex items-center gap-2">
                            <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
