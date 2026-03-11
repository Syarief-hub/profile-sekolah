<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <title>@yield('title', 'Profil Sekolah | SMA Negeri 1 Suwawa')</title>
    <meta name="description" content="@yield('meta_description', 'Website Resmi SMA Negeri 1 Suwawa. Temukan informasi profil, akademik, kesiswaan, prestasi, layanan PPDB dan berita terkini tentang sekolah kami.')">

    <!-- Google Fonts: Inter & Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS (via CDN fallback) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Roboto', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            DEFAULT: '#059669', // Emerald 600
                            100: '#d1fae5',
                        },
                        secondary: '#f59e0b', // Amber 500
                    }
                }
            }
        }
    </script>
    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Roboto', sans-serif; }
        
        /* Glassmorphism Effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="antialiased bg-slate-50 text-slate-800 flex flex-col min-h-screen">
    
    <!-- Header Partial -->
    @include('partials.header')

    <!-- Main Content Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer Partial -->
    @include('partials.footer')

    <!-- Floating WhatsApp Widget -->
    <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" 
       class="fixed bottom-6 right-6 z-[60] bg-green-500 text-white w-[60px] h-[60px] rounded-full flex items-center justify-center text-3xl shadow-[0_4px_20px_rgba(34,197,94,0.4)] hover:scale-110 hover:bg-green-600 transition-transform duration-300">
        <i class="fa-brands fa-whatsapp"></i>
    </a>

</body>
</html>
