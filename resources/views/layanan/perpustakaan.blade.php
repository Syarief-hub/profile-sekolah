@extends('layouts.public')

@section('title', 'Layanan Perpustakaan Digital | SMA Negeri 1 Suwawa')

@section('content')
    <!-- Premium Inner Page Header -->
    <section class="relative bg-brand-dark pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?q=80&w=2000&auto=format&fit=crop" alt="Campus Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark via-brand-dark/90 to-brand-dark"></div>
        </div>
        
        <!-- Abstract Decorations -->
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary/20 rounded-full blur-3xl z-0 pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-secondary/20 rounded-full blur-3xl z-0 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center gap-3 text-secondary font-bold text-sm tracking-widest uppercase mb-6 px-5 py-2 bg-secondary/10 rounded-full border border-secondary/20 backdrop-blur-md">
               <i class="fa-solid fa-book-open-reader"></i> Layanan
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white leading-tight mb-6 drop-shadow-xl">
                Perpustakaan Digital
            </h1>
            <p class="text-blue-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Informasi layanan, prosedur peminjaman, dan akses katalog buku online (OPAC) terintegrasi sistem SIPERPUS.
            </p>
        </div>
        
        <!-- Sweeping SVG Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0 z-20 translate-y-1">
            <svg class="w-full h-auto text-white fill-current" viewBox="0 0 1440 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 64H1440V0C1440 0 1140 64 720 64C300 64 0 0 0 0V64Z"></path>
            </svg>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="pb-24 lg:pb-32 bg-white relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-blue-50 rounded-[2.5rem] border-[8px] border-white shadow-xl shadow-primary/5 p-8 sm:p-12 relative overflow-hidden">
                <!-- Abstract Design Graphic -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4"></div>
                
                <div class="flex flex-col md:flex-row gap-12 items-start relative z-10">
                    
                    <!-- Kiri: Panduan & Informasi -->
                    <div class="w-full md:w-2/3">
                        <div class="mb-10">
                            <h2 class="text-3xl font-heading font-black text-slate-800 tracking-tight leading-tight mb-4">Layanan Sistem Informasi Perpustakaan (SIPERPUS)</h2>
                            <p class="text-slate-600 text-lg leading-relaxed">Perpustakaan SMA Negeri 1 Suwawa kini telah didukung oleh sistem digital SIPERPUS terpadu yang memudahkan siswa untuk mencari dan meminjam buku fisik maupun digital.</p>
                        </div>
                        
                        <div class="space-y-8">
                            <!-- Feature 1 -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-primary/10 text-primary rounded-xl flex items-center justify-center font-black text-xl border border-primary/20">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-800 mb-2">Katalog Buku Publik (OPAC)</h3>
                                    <p class="text-slate-600 leading-relaxed text-sm">Anda dapat melihat daftar seluruh buku yang tersedia di perpustakaan melalui halaman publik SIPERPUS dari mana saja tanpa perlu login. Anda dapat mengecek status ketersediaan buku secara *real-time*.</p>
                                </div>
                            </div>
                            
                            <!-- Feature 2 -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-amber-50 text-amber-500 rounded-xl flex items-center justify-center font-black text-xl border border-amber-100">
                                    <i class="fa-solid fa-arrows-rotate"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-800 mb-2">Alur Peminjaman Buku</h3>
                                    <p class="text-slate-600 leading-relaxed text-sm">Cari buku yang Anda inginkan di katalog SIPERPUS. Kunjungi perpustakaan dan bawa buku tersebut ke meja admin. Admin akan melakukan *scan barcode* pada eksemplar buku dan akun anggota Anda untuk memproses peminjaman secara cepat.</p>
                                </div>
                            </div>
                            
                            <!-- Feature 3 -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-red-50 text-red-500 rounded-xl flex items-center justify-center font-black text-xl border border-red-100">
                                    <i class="fa-solid fa-triangle-exclamation"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-800 mb-2">Batas Peminjaman & Denda</h3>
                                    <p class="text-slate-600 leading-relaxed text-sm">Sistem SIPERPUS secara otomatis mengatur batas maksimal jumlah buku yang dapat dipinjam secara bersamaan beserta durasi peminjamannya. Denda harian akan diakumulasikan secara otomatis oleh sistem untuk setiap keterlambatan pengembalian buku.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kanan: CTA Button (Sticky-ish) -->
                    <div class="w-full md:w-1/3 bg-slate-50 border border-slate-100 rounded-2xl p-6 text-center transform transition duration-500 hover:shadow-xl hover:-translate-y-2">
                        <div class="w-20 h-20 bg-white shadow-sm border border-slate-100 rounded-full flex items-center justify-center text-primary text-3xl mx-auto mb-6">
                            <i class="fa-solid fa-book-open-reader"></i>
                        </div>
                        <h3 class="font-bold text-xl text-slate-800 mb-2">Akses Layanan</h3>
                        <p class="text-sm text-slate-500 mb-8">Buka portal SIPERPUS untuk mengecek ketersediaan buku incaran Anda.</p>
                        
                        <a href="https://siperpus.smansasuwawa.site/" target="_blank" rel="noopener noreferrer" class="block w-full py-4 px-6 bg-primary hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg hover:shadow-primary/30 transition-all duration-300">
                            Kunjungi SIPERPUS <i class="fa-solid fa-arrow-up-right-from-square ml-2 text-xs"></i>
                        </a>
                        
                        <div class="mt-6 pt-6 border-t border-slate-200">
                            <p class="text-xs text-slate-400">Punya kendala akun anggota? Hubungi admin Perpustakaan SMAN 1 Suwawa.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
@endsection
