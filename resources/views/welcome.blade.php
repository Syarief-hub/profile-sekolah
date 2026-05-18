@extends('layouts.public')

@section('title', 'Beranda | SMA Negeri 1 Suwawa')

@section('content')
    <!-- 1. Hero Section (Full Background Style) -->
    <section class="relative pt-32 pb-40 lg:pt-48 lg:pb-56 overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0 bg-white">
            <img src="{{ asset('images/hero_school_bg.png') }}" alt="School Background" class="w-full h-full object-cover opacity-[0.45]">
            <!-- Gradient Overlay for a fresh white/blue feel -->
            <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-white/70 to-primary/20"></div>
        </div>

        <!-- Abstract Waves / Shapes -->
        <div class="absolute top-0 right-0 w-full h-full overflow-hidden pointer-events-none opacity-10 z-0">
            <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" class="absolute -right-1/4 -top-1/4 w-[150%] h-[150%] animate-spin-slow" style="animation-duration: 60s;">
                <path fill="#2563EB" d="M438.5,302Q534,222,637.5,273.5Q741,325,765.5,435.5Q790,546,711.5,630.5Q633,715,526,750.5Q419,786,322,727Q225,668,171.5,561.5Q118,455,183.5,357Q249,259,343,382Q438.5,302Z" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-8">
                
                <!-- Left Content -->
                <div class="w-full lg:w-3/5">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 backdrop-blur-md text-primary font-bold tracking-wider mb-6 border border-primary/20 uppercase shadow-sm">
                        <i class="fa-solid fa-star text-secondary"></i> {{ $global_settings['hero_badge'] ?? 'Tahun Ajaran 2026/2027' }}
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl lg:text-[4rem] font-heading font-black text-slate-900 leading-[1.1] mb-6 drop-shadow-sm">
                        Tumbuhkan <br>
                        Gairah Belajar bersama <span class="text-primary relative inline-block">SMAN 1 Suwawa
                        <!-- Underline swoop -->
                        <svg class="absolute w-full h-3 -bottom-1 left-0 text-secondary" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0,5 Q50,15 100,5" stroke="currentColor" stroke-width="4" fill="none"/></svg>
                        </span>
                    </h1>
                    
                    <p class="text-slate-600 text-lg sm:text-xl mb-10 leading-relaxed font-medium max-w-xl">
                        Selamat datang di website resmi SMA Negeri 1 Suwawa. Temukan informasi terkini, profil sekolah, dan layanan kegiatan akademik kami secara online.
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-wrap items-center gap-4">
                        <a href="#profil" class="bg-primary hover:bg-blue-500 text-white px-8 py-4 rounded-xl font-bold shadow-[0_4px_15px_rgba(0,204,235,0.4)] transition flex items-center gap-2 hover:-translate-y-1">
                            Mulai Sekarang <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <a href="{{ route('articles.index') }}" class="bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 px-8 py-4 rounded-xl font-bold transition flex items-center gap-2 shadow-sm hover:-translate-y-1">
                            Jelajahi Berita
                        </a>
                    </div>
                </div>

                <!-- Right Side Badge (Keeps the floating badge without the solid image) -->
                <div class="hidden lg:flex w-full lg:w-2/5 justify-end">
                    <div class="bg-white/80 backdrop-blur-xl p-8 rounded-[2rem] shadow-2xl border border-white flex flex-col items-center gap-4 animate-bounce" style="animation-duration: 4s;">
                        <div class="w-20 h-20 bg-gradient-to-br from-secondary to-amber-400 text-white rounded-full flex items-center justify-center text-4xl shadow-inner">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <div class="text-center">
                            <p class="text-3xl font-black text-slate-800 leading-none mb-2">Akreditasi A</p>
                            <p class="text-sm text-slate-500 font-bold uppercase tracking-wider">Sekolah Unggulan</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- 2. Linear Features Band -->
    <section class="relative z-30 -mt-16 bg-white shadow-xl max-w-[95%] lg:max-w-6xl mx-auto rounded overflow-hidden">
        <div class="flex flex-col md:flex-row items-center justify-between px-6 py-8 md:p-10 gap-8 divide-y md:divide-y-0 md:divide-x divide-slate-100">
            <!-- Feature 1 -->
            <div class="flex items-center gap-4 w-full md:w-1/3 justify-center md:justify-start">
                <div class="w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center text-2xl shrink-0 group-hover:bg-primary group-hover:text-white transition">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-lg sm:text-xl">639 Siswa</h3>
                    <p class="text-slate-500 text-sm">Peserta Didik Aktif</p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="flex items-center gap-4 w-full md:w-1/3 justify-center md:justify-center pt-8 md:pt-0">
                <div class="w-16 h-16 rounded-full bg-secondary/20 text-amber-600 flex items-center justify-center text-xl shrink-0 transition">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-lg sm:text-xl">41 Guru</h3>
                    <p class="text-slate-500 text-sm">Tenaga Pendidik Terbaik</p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="flex items-center gap-4 w-full md:w-1/3 justify-center md:justify-end pt-8 md:pt-0">
                <div class="w-16 h-16 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center text-2xl shrink-0 transition">
                    <i class="fa-solid fa-laptop-file"></i>
                </div>
                <div>
                    <h3 class="font-bold text-slate-900 text-lg sm:text-xl">Fasilitas Lengkap</h3>
                    <p class="text-slate-500 text-sm">Mendukung Pembelajaran</p>
                </div>
            </div>
        </div>
    </section>


    <section id="profil" class="py-20 lg:py-28 bg-white overflow-x-hidden relative">
        <!-- Abstract Decoration -->
        <div class="absolute -right-20 top-20 w-64 h-64 bg-primary/10 rounded-full blur-3xl opacity-50 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                <!-- Left: Principal Image & Name Card -->
                <div class="w-full lg:w-5/12 relative">
                    <div class="relative max-w-sm mx-auto">
                        <!-- Floating Decorative Blobs -->
                        <div class="absolute -bottom-8 -left-8 w-32 h-32 bg-secondary opacity-30 rounded-full blur-2xl z-0"></div>
                        <div class="absolute -top-8 -right-8 w-40 h-40 bg-primary opacity-30 rounded-full blur-2xl z-0"></div>

                        <!-- Card Frame -->
                        <div class="relative z-10 rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white bg-white group">
                            @if(isset($global_settings['principal_photo']) && $global_settings['principal_photo'])
                                <img src="{{ Storage::url($global_settings['principal_photo']) }}" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name={{ urlencode($global_settings['principal_name'] ?? 'Kepala Sekolah') }}&color=2563EB&background=dbeafe&size=800';" alt="{{ $global_settings['principal_name'] ?? 'Kepala Sekolah' }}" class="w-full h-auto object-cover aspect-[3/4] group-hover:scale-105 transition duration-700">
                            @else
                                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Kepala+Sekolah&color=2563EB&background=dbeafe&size=800';" alt="Kepala Sekolah" class="w-full h-auto object-cover aspect-[3/4] group-hover:scale-105 transition duration-700">
                            @endif

                            <!-- Gradient Overlay for Text -->
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90 transition duration-500"></div>
                            
                            <!-- Content Details -->
                            <div class="absolute bottom-0 left-0 w-full p-8 text-center transform group-hover:-translate-y-2 transition duration-500">
                                <h3 class="text-2xl sm:text-3xl font-heading font-black text-white mb-3 leading-tight drop-shadow-md">
                                    {{ $global_settings['principal_name'] ?? 'Nama Kepala Sekolah' }}
                                </h3>
                                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full border border-white/20">
                                    <div class="w-2 h-2 rounded-full bg-primary animate-pulse"></div>
                                    <span class="text-white font-bold text-xs uppercase tracking-widest">{{ $global_settings['website_name'] ?? 'SMAN 1 Suwawa' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Teks Sambutan & Fitur Checklist -->
                <div class="w-full lg:w-1/2">
                    <div class="inline-flex items-center gap-2 text-secondary font-bold text-sm tracking-widest uppercase mb-3">
                        <i class="fa-solid fa-graduation-cap"></i> Siapa Kami
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black text-slate-900 leading-[1.1] mb-6">
                        {{ $global_settings['principal_heading'] ?? 'Membangun Generasi Emas Berkualitas' }}
                    </h2>
                    
                    <div class="text-slate-500 leading-relaxed text-base mb-6">
                        {!! nl2br(e($global_settings['principal_message'] ?? 'Isi pesan sambutan Kepala Sekolah belum diatur. Silakan atur di bagian admin.')) !!}
                    </div>

                    @if(!empty($global_settings['principal_quote']))
                    <blockquote class="border-l-4 border-secondary pl-5 py-1 mb-8 text-xl font-bold text-slate-800 leading-snug">
                        {{ $global_settings['principal_quote'] }}
                    </blockquote>
                    @endif

                    <!-- Checklist -->
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-4">
                            <i class="fa-solid fa-circle-check text-primary text-xl mt-0.5 shadow-sm rounded-full"></i>
                            <span class="font-semibold text-slate-700">Kurikulum berbasis kompetensi dan Merdeka Belajar.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <i class="fa-solid fa-circle-check text-primary text-xl mt-0.5 shadow-sm rounded-full"></i>
                            <span class="font-semibold text-slate-700">Tenaga pengajar tersertifikasi dan berdedikasi tinggi.</span>
                        </li>
                        <li class="flex items-start gap-4">
                            <i class="fa-solid fa-circle-check text-primary text-xl mt-0.5 shadow-sm rounded-full"></i>
                            <span class="font-semibold text-slate-700">Integrasi teknologi dalam pembelajaran dan ekstrakurikuler.</span>
                        </li>
                    </ul>

                    <!-- Floating decorative label -->
                    <div class="bg-white rounded-lg p-4 flex items-center gap-4 mb-8 border border-slate-100 shadow-sm w-max">
                        <div class="w-10 h-10 bg-primary/10 text-primary flex items-center justify-center rounded-full text-lg">
                            <i class="fa-solid fa-medal"></i>
                        </div>
                        <span class="text-slate-800 font-bold text-sm leading-snug">Berkomitmen pada<br>Pendidikan Online & Offline Terbaik</span>
                    </div>

                    <a href="{{ route('profil.sejarah') }}" class="inline-flex items-center gap-2 bg-slate-900 hover:bg-slate-800 text-white px-8 py-4 rounded-xl font-bold transition shadow-lg hover:-translate-y-1">
                        Pelajari Sejarah Kami <i class="fa-solid fa-arrow-right-long ml-1"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- 4. News & Announcement Section (Modern Asymmetric) -->
    <section class="py-20 lg:py-28 bg-white relative overflow-hidden">
        <!-- Abstract Decoration -->
        <div class="absolute -left-40 top-40 w-96 h-96 bg-primary/5 rounded-full blur-3xl z-0 pointer-events-none"></div>
        <div class="absolute left-0 bottom-0 w-full h-1/2 bg-white skew-y-2 transform origin-bottom-right z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col gap-6">
                
                <!-- Title Header -->
                <div class="w-full flex flex-col md:flex-row justify-between items-end gap-6 mb-2">
                    <div class="max-w-xl">
                        <div class="inline-flex items-center gap-2 text-secondary font-bold text-sm tracking-widest uppercase mb-3">
                            <i class="fa-solid fa-newspaper"></i> Publikasi
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-heading font-black text-slate-900 tracking-tight leading-tight">
                            Berita & Info Terbaru
                        </h2>
                    </div>
                    


                    <div class="pb-2 hidden md:block">
                        <a href="{{ route('articles.index') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-primary font-bold transition uppercase tracking-widest text-sm">
                            Lihat Semua Publikasi <i class="fa-solid fa-arrow-right-long ml-1"></i>
                        </a>
                    </div>
                </div>

            <div class="w-full mt-10">
                @if(count($latest_articles) > 0)
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                    
                    <!-- Featured Article (First One) -->
                    @php $featured = collect($latest_articles)->first(); @endphp
                    <div class="w-full lg:w-7/12">
                        <a href="{{ route('articles.show', $featured->slug) }}" class="block relative rounded-[2rem] overflow-hidden group aspect-video lg:aspect-[4/3]">
                            @if($featured->thumbnail)
                                <img src="{{ Storage::url($featured->thumbnail) }}" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name={{ urlencode(substr($featured->title, 0, 2)) }}&color=2563EB&background=dbeafe&size=800';" alt="{{ $featured->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            @else
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(substr($featured->title, 0, 2)) }}&color=2563EB&background=dbeafe&size=800" alt="{{ $featured->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                            @endif
                            
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90 group-hover:opacity-100 transition duration-500"></div>
                            
                            <!-- Content -->
                            <div class="absolute bottom-0 left-0 w-full p-8 lg:p-10 text-white transform group-hover:-translate-y-2 transition duration-500">
                                <div class="inline-flex items-center gap-2 bg-primary text-white font-bold px-4 py-1.5 rounded-full text-xs uppercase tracking-wider mb-4 shadow-md">
                                    {{ $featured->category ?? 'Highlight' }}
                                </div>
                                <h3 class="text-2xl lg:text-3xl font-heading font-black mb-3 leading-tight drop-shadow-md">
                                    {{ $featured->title }}
                                </h3>
                                <p class="text-slate-300 text-sm leading-relaxed line-clamp-2 mb-4 font-medium">
                                    {{ Str::limit(strip_tags($featured->content), 120) }}
                                </p>
                                <div class="flex items-center gap-4 text-xs font-semibold text-primary-100">
                                    <div class="flex items-center gap-1.5"><i class="fa-regular fa-calendar-days"></i> {{ $featured->date->format('d M Y') }}</div>
                                    <div class="flex items-center gap-1.5"><i class="fa-regular fa-clock"></i> {{ $featured->date->diffForHumans() }}</div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Other Articles List -->
                    <div class="w-full lg:w-5/12 flex flex-col gap-6 lg:gap-8 justify-center">
                        @foreach(collect($latest_articles)->slice(1, 3) as $article)
                        <a href="{{ route('articles.show', $article->slug) }}" class="flex flex-col sm:flex-row items-center gap-6 group">
                            <!-- Image Thumbnail -->
                            <div class="w-full sm:w-40 aspect-video sm:aspect-square flex-shrink-0 rounded-2xl overflow-hidden shadow-sm relative">
                                @if($article->thumbnail)
                                    <img src="{{ Storage::url($article->thumbnail) }}" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name={{ urlencode(substr($article->title, 0, 2)) }}&color=2563EB&background=dbeafe&size=400';" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                @else
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode(substr($article->title, 0, 2)) }}&color=2563EB&background=dbeafe&size=400" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                @endif
                                <div class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition duration-300"></div>
                            </div>
                            
                            <!-- Text Content -->
                            <div class="flex-grow">
                                <div class="text-xs font-bold text-secondary uppercase tracking-widest mb-2">{{ $article->category ?? 'Update' }}</div>
                                <h3 class="text-xl font-heading font-black text-slate-900 mb-2 group-hover:text-primary transition leading-tight line-clamp-2">
                                    {{ $article->title }}
                                </h3>
                                <div class="flex items-center gap-3 text-xs font-medium text-slate-500">
                                    <div class="flex items-center gap-1"><i class="fa-regular fa-calendar text-primary"></i> {{ $article->date->format('d M') }}</div>
                                    <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                    <div class="flex items-center gap-1"><i class="fa-solid fa-user-pen text-primary"></i> {{ $article->author ?? 'Admin' }}</div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    
                </div>
                @else
                <div class="text-center py-10">
                    <p class="text-slate-500">Belum ada berita yang dipublikasikan.</p>
                </div>
                @endif
            </div>

                <!-- Mobile View all link -->
                <div class="mt-10 text-center md:hidden relative z-10 w-full">
                    <a href="{{ route('articles.index') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-primary font-bold transition uppercase tracking-widest text-sm">
                        Lihat Semua <i class="fa-solid fa-arrow-right-long ml-1"></i>
                    </a>
                </div>
        </div>
    </section>

    <!-- 5. Gallery Section (Curvy/Soft Grid) -->
    <section class="py-20 lg:py-28 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 text-secondary font-bold text-sm tracking-widest uppercase mb-3">
                    <i class="fa-solid fa-camera"></i> Dokumentasi
                </div>
                <h2 class="text-3xl sm:text-4xl font-heading font-black text-slate-900 tracking-tight">
                    Galeri Foto Kegiatan
                </h2>
                <p class="text-slate-500 mt-4 text-base font-medium">Momen-momen berharga dalam proses pembelajaran dan pengembangan karakter siswa di sekolah kami.</p>
            </div>

            <!-- Staggered Layout Implementation -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-6xl mx-auto mt-20">
                @foreach($latest_galleries as $index => $gallery)
                <div class="group cursor-pointer {{ $index % 3 == 1 ? 'md:translate-y-12' : '' }}">
                    <div class="relative overflow-hidden rounded-[2.5rem] aspect-square bg-slate-50 mb-6 shadow-md hover:shadow-2xl hover:shadow-primary/20 transition-all duration-500 group-hover:-translate-y-2">
                        <img src="{{ Storage::url($gallery->url) }}" onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Galeri&color=2563EB&background=dbeafe&size=400';" alt="{{ $gallery->event_name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                        
                        <!-- Soft Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <!-- Floating Icon -->
                        <div class="absolute top-6 right-6 w-12 h-12 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-500">
                            <i class="fa-solid fa-expand"></i>
                        </div>
                    </div>
                    
                    <div class="text-center px-4">
                        <h4 class="text-slate-900 font-bold text-lg leading-tight group-hover:text-primary transition">{{ $gallery->event_name }}</h4>
                        @if($gallery->description)
                            <p class="text-slate-500 text-sm mt-2 line-clamp-2 font-medium">{{ $gallery->description }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-28 text-center">
                <a href="{{ route('galleries.index') }}" class="inline-block border-2 border-primary text-primary hover:bg-primary hover:text-white font-bold text-sm px-10 py-3.5 rounded-full transition uppercase tracking-widest">
                    Lihat Semua Galeri
                </a>
            </div>
        </div>
    </section>
@endsection


