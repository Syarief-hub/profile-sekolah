@extends('layouts.public')

@section('title', 'Beranda | SMA Negeri 1 Suwawa')

@section('content')
    <!-- 1. Hero Section -->
    <section class="relative pt-8 pb-10 lg:pt-12 lg:pb-16 overflow-visible bg-white">
        <!-- Background Image (Top Right focus) -->
        <div class="absolute top-0 right-0 w-full lg:w-[65%] h-full z-0">
            <img src="{{ asset('images/hero_school_bg.png') }}" onerror="this.src='https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=2000&auto=format&fit=crop';" alt="School Background" class="w-full h-full object-cover object-center lg:rounded-bl-[4rem]">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent lg:hidden"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="w-full lg:w-[55%] pt-4 lg:pt-8">
                <!-- Subtitle -->
                <div class="text-primary font-bold tracking-widest text-sm uppercase mb-4">
                    <i class="fa-solid fa-star text-amber-500 mr-1"></i> {{ $global_settings['hero_badge'] ?? 'Tahun Ajaran 2026/2027' }}
                </div>
                
                <!-- Main Title -->
                <h1 class="text-5xl sm:text-6xl lg:text-[4.5rem] font-bold text-slate-900 leading-[1.1] mb-6 tracking-tight uppercase">
                    Tumbuhkan <br>
                    Gairah Belajar, <br>
                    <span class="text-primary">Bersama Kami</span>
                </h1>
                
                <!-- Description -->
                <p class="text-slate-500 text-lg sm:text-xl mb-12 leading-relaxed max-w-lg">
                    Selamat datang di website resmi SMA Negeri 1 Suwawa. Temukan informasi terkini, profil sekolah, dan layanan kegiatan akademik secara mudah.
                </p>
                
            </div>

            <!-- Floating Search/Tab Box -->
            <div class="w-full mt-8 lg:mt-12 bg-white rounded-2xl shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] p-4 sm:p-6 lg:p-8 relative z-30 border border-slate-100">
                <!-- Tabs -->
                <div class="flex flex-wrap items-center gap-4 sm:gap-8 border-b border-slate-100 mb-6">
                    <a href="{{ route('articles.index') }}" class="flex items-center gap-2 pb-4 -mb-[1px] border-b-2 border-primary text-primary font-bold transition hover:text-blue-700 cursor-pointer">
                        <i class="fa-solid fa-newspaper"></i> Berita
                    </a>
                    <a href="{{ route('galleries.index') }}" class="flex items-center gap-2 pb-4 -mb-[1px] border-b-2 border-transparent text-slate-500 font-medium hover:text-slate-900 hover:border-slate-300 transition">
                        <i class="fa-solid fa-camera"></i> Galeri
                    </a>
                    <a href="{{ route('profil.fasilitas') }}" class="flex items-center gap-2 pb-4 -mb-[1px] border-b-2 border-transparent text-slate-500 font-medium hover:text-slate-900 hover:border-slate-300 transition">
                        <i class="fa-solid fa-star"></i> Fasilitas
                    </a>
                </div>

                <!-- Form Fields -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 lg:gap-6 items-center">
                    <div class="lg:col-span-1 border-r border-slate-200 hidden lg:block pr-4">
                        <label class="text-xs text-slate-500 font-medium block mb-1">Cari Info</label>
                        <div class="text-slate-900 font-bold truncate">Kegiatan Siswa</div>
                    </div>
                    <div class="lg:col-span-1 border-r border-slate-200 hidden lg:block pr-4">
                        <label class="text-xs text-slate-500 font-medium block mb-1">Kategori</label>
                        <div class="text-slate-900 font-bold truncate">Akademik</div>
                    </div>
                    <div class="lg:col-span-1 border-r border-slate-200 hidden lg:block pr-4">
                        <label class="text-xs text-slate-500 font-medium block mb-1">Tanggal</label>
                        <div class="text-slate-900 font-bold truncate"><i class="fa-regular fa-calendar mr-1"></i> {{ date('M Y') }}</div>
                    </div>
                    <div class="lg:col-span-1 border-r border-slate-200 hidden lg:block pr-4">
                        <label class="text-xs text-slate-500 font-medium block mb-1">Status</label>
                        <div class="text-slate-900 font-bold truncate">Terbaru</div>
                    </div>
                    
                    <div class="lg:col-span-1 sm:col-span-2">
                        <a href="{{ route('articles.index') }}" class="w-full bg-primary hover:bg-blue-600 text-white py-3.5 rounded-xl font-bold transition flex items-center justify-center shadow-lg hover:shadow-primary/30">
                            Cari Informasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Features/Trust Badges Section -->
    <section class="py-10 bg-white border-b border-slate-100 relative z-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-16 divide-y md:divide-y-0 md:divide-x divide-slate-100">
                <!-- Feature 1 -->
                <div class="flex items-center gap-4 w-full md:w-1/3 justify-center">
                    <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xl shrink-0">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-base">639 Siswa</h3>
                        <p class="text-slate-500 text-xs mt-0.5">Peserta Didik Aktif</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="flex items-center gap-4 w-full md:w-1/3 justify-center pt-6 md:pt-0 pl-0 md:pl-8">
                    <div class="w-12 h-12 rounded-full bg-green-100 text-green-600 flex items-center justify-center text-xl shrink-0">
                        <i class="fa-solid fa-chalkboard-user"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-base">41 Guru</h3>
                        <p class="text-slate-500 text-xs mt-0.5">Tenaga Pendidik Terbaik</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="flex items-center gap-4 w-full md:w-1/3 justify-center pt-6 md:pt-0 pl-0 md:pl-8">
                    <div class="w-12 h-12 rounded-full bg-amber-100 text-amber-500 flex items-center justify-center text-xl shrink-0">
                        <i class="fa-solid fa-laptop-file"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 text-base">Fasilitas Lengkap</h3>
                        <p class="text-slate-500 text-xs mt-0.5">Mendukung Pembelajaran</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Profil Section -->
    <section id="profil" class="py-20 lg:py-24 bg-white relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <!-- Left: Image -->
                <div class="w-full lg:w-5/12 relative">
                    <div class="relative max-w-sm mx-auto rounded-3xl overflow-hidden shadow-2xl border border-slate-100">
                        @if(isset($global_settings['principal_photo']) && $global_settings['principal_photo'])
                            <img src="{{ Storage::url($global_settings['principal_photo']) }}" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name={{ urlencode($global_settings['principal_name'] ?? 'Kepala Sekolah') }}&color=2563EB&background=dbeafe&size=800';" alt="{{ $global_settings['principal_name'] ?? 'Kepala Sekolah' }}" class="w-full aspect-[3/4] object-cover">
                        @else
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Kepala+Sekolah&color=2563EB&background=dbeafe&size=800';" alt="Kepala Sekolah" class="w-full aspect-[3/4] object-cover">
                        @endif
                        <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-slate-900 to-transparent p-6 pt-20">
                            <h3 class="text-white font-bold text-2xl">{{ $global_settings['principal_name'] ?? 'Nama Kepala Sekolah' }}</h3>
                            <p class="text-blue-200 text-sm">Kepala Sekolah</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="w-full lg:w-7/12">
                    <div class="text-primary font-bold tracking-widest text-xs uppercase mb-3">
                        TENTANG KAMI
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold text-slate-900 leading-tight mb-6">
                        {{ $global_settings['principal_heading'] ?? 'Membangun Generasi Emas Berkualitas' }}
                    </h2>
                    
                    <div class="text-slate-500 leading-relaxed text-base mb-6">
                        {!! nl2br(e($global_settings['principal_message'] ?? 'Isi pesan sambutan Kepala Sekolah belum diatur.')) !!}
                    </div>

                    @if(!empty($global_settings['principal_quote']))
                    <blockquote class="border-l-4 border-primary pl-4 py-1 mb-8 text-lg font-medium text-slate-700 italic">
                        "{{ $global_settings['principal_quote'] }}"
                    </blockquote>
                    @endif

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                            <span class="text-slate-600">Kurikulum berbasis kompetensi dan Merdeka Belajar.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                            <span class="text-slate-600">Tenaga pengajar tersertifikasi dan berdedikasi tinggi.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-green-500 mt-1"></i>
                            <span class="text-slate-600">Integrasi teknologi dalam pembelajaran dan ekstrakurikuler.</span>
                        </li>
                    </ul>

                    <a href="{{ route('profil.sejarah') }}" class="inline-flex items-center gap-2 bg-slate-900 hover:bg-slate-800 text-white px-6 py-3 rounded-xl font-bold transition">
                        Pelajari Sejarah Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Popular Destinations (Berita Terbaru) Section -->
    <section class="py-20 lg:py-24 bg-[#F8FAFC]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <div class="text-primary font-bold text-xs tracking-widest uppercase mb-2">
                        UPDATE TERKINI
                    </div>
                    <h2 class="text-3xl font-bold text-slate-900">
                        Publikasi Terbaru
                    </h2>
                </div>
                <a href="{{ route('articles.index') }}" class="hidden sm:flex items-center gap-2 text-primary font-bold hover:text-blue-700 transition">
                    Lihat Semua Berita <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                @forelse(collect($latest_articles)->take(4) as $article)
                <!-- Card -->
                <a href="{{ route('articles.show', $article->slug) }}" class="bg-white rounded-2xl p-4 shadow-sm hover:shadow-xl transition-shadow duration-300 group block border border-slate-100 flex flex-col">
                    <div class="relative w-full aspect-[4/3] rounded-xl overflow-hidden mb-4 shrink-0">
                        @if($article->thumbnail)
                            <img src="{{ Storage::url($article->thumbnail) }}" onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode(substr($article->title, 0, 2)) }}&color=2563EB&background=dbeafe';" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(substr($article->title, 0, 2)) }}&color=2563EB&background=dbeafe" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @endif
                    </div>
                    
                    <h3 class="font-bold text-slate-900 text-lg mb-2 line-clamp-2 group-hover:text-primary transition flex-grow">{{ $article->title }}</h3>
                    
                    <div class="flex items-center justify-between text-slate-500 text-sm mb-4">
                        <span class="truncate">{{ $article->category ?? 'Umum' }}</span>
                        <span class="text-xs">Oleh {{ $article->author ?? 'Admin' }}</span>
                    </div>
                    
                    <div class="flex items-center justify-end pt-3 border-t border-slate-100">
                        <div class="text-primary font-bold text-sm">
                            <i class="fa-regular fa-calendar-days mr-1"></i> {{ $article->date->format('d M Y') }}
                        </div>
                    </div>
                </a>
                @empty
                <!-- Dummy Cards if no articles -->
                @for($i=1; $i<=4; $i++)
                <div class="bg-white rounded-2xl p-4 shadow-sm border border-slate-100">
                    <div class="relative w-full aspect-[4/3] rounded-xl bg-slate-100 mb-4 animate-pulse"></div>
                    <div class="h-5 bg-slate-200 rounded w-3/4 mb-2 animate-pulse"></div>
                    <div class="h-4 bg-slate-100 rounded w-1/2 mb-4 animate-pulse"></div>
                    <div class="flex justify-between pt-3 border-t border-slate-100">
                        <div class="h-4 bg-slate-100 rounded w-1/4 animate-pulse"></div>
                        <div class="h-4 bg-slate-200 rounded w-1/4 animate-pulse"></div>
                    </div>
                </div>
                @endfor
                @endforelse
            </div>
            
            <div class="mt-8 text-center sm:hidden">
                <a href="{{ route('articles.index') }}" class="inline-flex items-center gap-2 text-primary font-bold">
                    Lihat Semua Berita <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. Gallery Section -->
    <section class="py-20 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <div class="text-primary font-bold text-xs tracking-widest uppercase mb-2">
                    DOKUMENTASI
                </div>
                <h2 class="text-3xl font-bold text-slate-900">
                    Galeri Foto Kegiatan
                </h2>
                <p class="text-slate-500 mt-4">Momen-momen berharga dalam proses pembelajaran dan pengembangan karakter siswa di sekolah kami.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach($latest_galleries->take(4) as $gallery)
                <div class="group relative rounded-2xl overflow-hidden aspect-square bg-slate-100 cursor-pointer">
                    <img src="{{ Storage::url($gallery->url) }}" onerror="this.src='https://ui-avatars.com/api/?name=Galeri&color=2563EB&background=dbeafe';" alt="{{ $gallery->event_name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-4">
                        <h4 class="text-white font-bold text-sm">{{ $gallery->event_name }}</h4>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-10 text-center">
                <a href="{{ route('galleries.index') }}" class="inline-block bg-slate-50 hover:bg-slate-100 text-slate-700 border border-slate-200 font-bold px-8 py-3 rounded-xl transition">
                    Lihat Semua Galeri
                </a>
            </div>
        </div>
    </section>

    <!-- 6. Unlock Exclusive Deals (Subscribe) Banner -->
    <section class="pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-primary rounded-3xl p-8 lg:p-12 relative overflow-hidden shadow-xl shadow-primary/20 flex flex-col md:flex-row items-center justify-between gap-8">
                <!-- Abstract Blue Background elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-black/10 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2 pointer-events-none"></div>

                <div class="relative z-10 flex items-start gap-6 md:w-1/2">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-primary text-2xl shrink-0 shadow-lg">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-2xl mb-2">Dapatkan Informasi Terbaru</h3>
                        <p class="text-blue-100 text-sm">Daftarkan email Anda untuk menerima update kegiatan sekolah dan pengumuman penting lainnya.</p>
                    </div>
                </div>

                <div class="relative z-10 w-full md:w-auto flex-grow max-w-md">
                    <form class="flex flex-col sm:flex-row gap-2 bg-white/10 p-2 rounded-2xl border border-white/20 backdrop-blur-sm">
                        <input type="email" placeholder="Masukkan alamat email Anda" class="w-full bg-transparent border-none text-white placeholder-blue-200 focus:ring-0 px-4 py-2" required>
                        <button type="button" class="bg-white text-primary font-bold px-6 py-3 rounded-xl hover:bg-blue-50 transition shadow-sm whitespace-nowrap">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection


