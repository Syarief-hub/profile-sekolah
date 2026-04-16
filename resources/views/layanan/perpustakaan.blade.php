@extends('layouts.public')

@section('title', 'Layanan Perpustakaan Digital | SMA Negeri 1 Suwawa')

@section('content')
    <!-- Header Section -->
    <section class="relative bg-brand-dark py-20 lg:py-28 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1507842217343-583bb7270b66?q=80&w=2000&auto=format&fit=crop" alt="Perpustakaan Digital" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                <span class="w-10 h-0.5 bg-primary rounded-full"></span> Layanan Sekolah <span class="w-10 h-0.5 bg-primary rounded-full"></span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-black text-white leading-tight mb-6 drop-shadow-md">
                Perpustakaan Digital
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Panduan akses dan penggunaan fasilitas perpustakaan digital terintegrasi SMA Negeri 1 Suwawa.
            </p>
        </div>
        
        <!-- Bottom Curve Decoration -->
        <div class="absolute bottom-0 left-0 right-0 z-20">
            <svg class="w-full h-auto text-slate-50 fill-current translate-y-1" viewBox="0 0 1440 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1440V0L0 48Z"></path>
            </svg>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="py-16 lg:py-24 bg-slate-50 relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white rounded-3xl shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-100 p-8 sm:p-12 relative overflow-hidden">
                <!-- Abstract Design Graphic -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4"></div>
                
                <div class="flex flex-col md:flex-row gap-12 items-start relative z-10">
                    
                    <!-- Kiri: Panduan & Informasi -->
                    <div class="w-full md:w-2/3">
                        <div class="mb-10">
                            <h2 class="text-3xl font-heading font-black text-slate-800 tracking-tight leading-tight mb-4">Cara Menggunakan Perpustakaan Digital</h2>
                            <p class="text-slate-600 text-lg leading-relaxed">Selain koleksi buku fisik di sekolah, siswa juga dapat mengakses literasi di mana saja melalui layanan Perpustakaan Elektronik (Digital). Berikut panduan akses bagi siswa dan guru.</p>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- Step 1 -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-primary/10 text-primary rounded-xl flex items-center justify-center font-black text-xl border border-primary/20">
                                    1
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-800 mb-2">Akses Tautan / Portal</h3>
                                    <p class="text-slate-600 leading-relaxed text-sm">Klik tombol <span class="font-semibold">"Kunjungi Perpustakaan"</span> di sebelah kanan, atau masukkan url kiblatbio.link/sman1suwawa di browser komputer atau HP Anda.</p>
                                </div>
                            </div>
                            
                            <!-- Step 2 -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-amber-50 text-amber-500 rounded-xl flex items-center justify-center font-black text-xl border border-amber-100">
                                    2
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-800 mb-2">Login Akun Siswa</h3>
                                    <p class="text-slate-600 leading-relaxed text-sm">Gunakan kombinasi NISN (Nomor Induk Siswa Nasional) sebagai username dan sandi yang telah diberikan oleh admin perpustakaan saat pendaftaran buku induk. Untuk tamu/guru bisa menggunakan NIP.</p>
                                </div>
                            </div>
                            
                            <!-- Step 3 -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 flex-shrink-0 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center font-black text-xl border border-blue-100">
                                    3
                                </div>
                                <div>
                                    <h3 class="font-bold text-xl text-slate-800 mb-2">Cari dan Pinjam e-Book</h3>
                                    <p class="text-slate-600 leading-relaxed text-sm">Cari buku pelajaran, modul, maupun buku fiksi ilmiah yang Anda inginkan lewat kolom pencarian aplikasi. Anda bisa mengunduhnya atau membacanya langsung (e-reader) jika meminjam melalui sistem.</p>
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
                        <p class="text-sm text-slate-500 mb-8">Buka website resmi perpustakaan digital kami di jendela baru.</p>
                        
                        <a href="https://kiblatbio.link/sman1suwawa" target="_blank" rel="noopener noreferrer" class="block w-full py-4 px-6 bg-primary hover:bg-emerald-700 text-white font-bold rounded-xl shadow-lg hover:shadow-primary/30 transition-all duration-300">
                            Kunjungi Perpustakaan <i class="fa-solid fa-arrow-up-right-from-square ml-2 text-xs"></i>
                        </a>
                        
                        <div class="mt-6 pt-6 border-t border-slate-200">
                            <p class="text-xs text-slate-400">Pertanyaan atau kendala sandi? Hubungi admin Pusdokinfo SMAN 1 Suwawa.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>
@endsection
