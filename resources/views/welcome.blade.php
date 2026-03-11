@extends('layouts.public')

@section('title', 'Beranda | SMA Negeri 1 Suwawa')

@section('content')
    <!-- 1. Hero Section (Slider full-width overlay CTA) -->
    <section class="relative bg-slate-900 overflow-hidden min-h-[85vh] flex items-center">
        <!-- Background slider image placeholder -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=2000&auto=format&fit=crop" alt="Hero Background" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/60 to-transparent"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full pt-20 pb-16">
            <div class="max-w-2xl" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
                <div x-show="show" x-transition.duration.1000ms.translate.opacity class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/20 border border-primary/30 text-primary-100 text-xs font-semibold tracking-wide mb-6 uppercase text-white backdrop-blur-md">
                    <!-- Pulsing blue dot -->
                    <span class="relative flex h-2.5 w-2.5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    {{ $global_settings['hero_badge'] ?? 'Tahun Ajaran 2026/2027' }}
                </div>
                
                <h1 x-show="show" x-transition.delay.200ms.duration.1000ms.translate.opacity class="text-4xl md:text-5xl lg:text-tight xl:text-6xl font-heading font-black text-white leading-[1.15] mb-6 drop-shadow-2xl">
                    Cerdas, Berprestasi, & <br>
                    <span class="text-secondary">Berakhlak Mulia</span>
                </h1>
                
                <p x-show="show" x-transition.delay.400ms.duration.1000ms.translate.opacity class="text-slate-300 text-lg md:text-xl mb-10 max-w-lg leading-relaxed font-light">
                    Selamat datang di website resmi SMA Negeri 1 Suwawa. Bergabunglah bersama kami membangun generasi masa depan yang berkualitas dan siap bersaing di kancah global.
                </p>

            </div>
        </div>
        
        <!-- Bottom Curve Decoration -->
        <div class="absolute bottom-0 left-0 right-0 z-20">
            <svg class="w-full h-auto text-slate-50 fill-current translate-y-1" viewBox="0 0 1440 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1440V0L0 48Z"></path>
            </svg>
        </div>
    </section>

    <!-- 2. Stats Section (Counter) -->
    <!-- Alpine JS intersection plugin logic (mocked up via Alpine x-intersect or simple x-init) -->
    <section class="relative z-30 -mt-16 sm:-mt-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto mb-20" x-data="{ countUp(end) { let start = 0; const duration = 2000; const step = end / (duration / 16); const interval = setInterval(() => { start += step; if(start >= end) { start = end; clearInterval(interval); } this.$el.innerText = Math.floor(start); }, 16); } }">
        <div class="bg-white rounded-2xl shadow-[0_20px_50px_rgba(0,0,0,0.06)] border border-slate-100 p-8 grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4 text-center divide-y md:divide-y-0 md:divide-x divide-slate-100 relative overflow-hidden">
            <!-- Stat 1 -->
            <div class="flex flex-col items-center justify-center pt-4 md:pt-0">
                <div class="w-16 h-16 bg-emerald-50 text-primary rounded-2xl flex items-center justify-center text-2xl mb-4 group hover:bg-primary hover:text-white transition duration-300">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3 class="text-4xl font-heading font-black text-slate-800 tracking-tight flex items-center"><span x-init="countUp(850)">850</span><span class="text-primary text-3xl">+</span></h3>
                <p class="text-slate-500 font-semibold text-sm mt-1 uppercase tracking-wider">Siswa Aktif</p>
            </div>
            
            <!-- Stat 2 -->
            <div class="flex flex-col items-center justify-center pt-8 md:pt-0 md:pl-4">
                <div class="w-16 h-16 bg-yellow-50 text-secondary rounded-2xl flex items-center justify-center text-2xl mb-4 group hover:bg-secondary hover:text-white transition duration-300">
                    <i class="fa-solid fa-chalkboard-user"></i>
                </div>
                <h3 class="text-4xl font-heading font-black text-slate-800 tracking-tight flex items-center"><span x-init="countUp(65)">65</span></h3>
                <p class="text-slate-500 font-semibold text-sm mt-1 uppercase tracking-wider">Guru & Staf</p>
            </div>
            
            <!-- Stat 3 -->
            <div class="flex flex-col items-center justify-center pt-8 md:pt-0 md:pl-4">
                <div class="w-16 h-16 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center text-2xl mb-4 group hover:bg-green-500 hover:text-white transition duration-300">
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <h3 class="text-4xl font-heading font-black text-slate-800 tracking-tight flex items-center"><span x-init="countUp(124)">124</span><span class="text-green-500 text-3xl">+</span></h3>
                <p class="text-slate-500 font-semibold text-sm mt-1 uppercase tracking-wider">Prestasi</p>
            </div>
            
            <!-- Stat 4 -->
            <div class="flex flex-col items-center justify-center pt-8 md:pt-0 md:pl-4">
                <div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center text-2xl mb-4 group hover:bg-purple-600 hover:text-white transition duration-300">
                    <i class="fa-solid fa-award"></i>
                </div>
                <h3 class="text-4xl font-heading font-black text-slate-800 tracking-tight flex items-center">A</h3>
                <p class="text-slate-500 font-semibold text-sm mt-1 uppercase tracking-wider">Akreditasi</p>
            </div>
        </div>
    </section>

    <!-- 3. Principal Greeting Section -->
    <section class="py-16 lg:py-24 bg-white relative overflow-hidden">
        <!-- Abstract Background -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-72 h-72 bg-secondary/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                <!-- Left: Foto Kepala Sekolah -->
                <div class="w-full lg:w-5/12 relative">
                    <!-- Decor frames -->
                    <div class="absolute -inset-4 lg:-inset-6 bg-primary rounded-[2.5rem] transform rotate-3 opacity-10"></div>
                    <div class="absolute -inset-4 lg:-inset-6 bg-secondary rounded-[2.5rem] transform -rotate-3 opacity-20"></div>
                    
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-slate-200 group">
                        @if(isset($global_settings['principal_photo']) && $global_settings['principal_photo'])
                            <img src="{{ Storage::url($global_settings['principal_photo']) }}" alt="{{ $global_settings['principal_name'] ?? 'Kepala Sekolah' }}" class="w-full h-auto aspect-[4/5] object-cover group-hover:scale-105 transition duration-700">
                        @else
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop" alt="Kepala Sekolah Fallback" class="w-full h-auto aspect-[4/5] object-cover group-hover:scale-105 transition duration-700">
                        @endif
                        
                        <!-- Floating Badge -->
                        <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-sm p-5 rounded-2xl shadow-xl border border-white translate-y-2 group-hover:translate-y-0 transition duration-500">
                            <h4 class="text-slate-800 font-bold text-lg font-heading tracking-tight leading-none mb-1">{{ $global_settings['principal_name'] ?? 'Nama Kepala Sekolah' }}</h4>
                            <p class="text-primary font-semibold text-sm">{{ $global_settings['principal_title'] ?? 'Jabatan' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Teks Sambutan -->
                <div class="w-full lg:w-7/12">
                    <div class="inline-flex items-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                        <span class="w-10 h-0.5 bg-primary rounded-full"></span> Sambutan Kepala Sekolah
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black text-slate-800 leading-[1.15] mb-8">
                        {!! str_replace('Pendidikan Berkualitas', '<span class="text-primary relative inline-block">Pendidikan Berkualitas<span class="absolute bottom-2 left-0 w-full h-3 bg-secondary/30 -z-10 -rotate-1"></span></span>', e($global_settings['principal_heading'] ?? 'Judul Sambutan')) !!}
                    </h2>
                    
                    <div class="relative bg-slate-50 border border-slate-100 rounded-3xl p-8 sm:p-10 shadow-sm">
                        <i class="fa-solid fa-quote-left text-7xl text-slate-200/50 absolute top-4 left-6 z-0 transform -rotate-12"></i>
                        <div class="relative z-10 text-slate-600 leading-relaxed text-lg space-y-5 text-justify">
                            {!! $global_settings['principal_message'] ?? '<p>Isi pesan sambutan belum diatur.</p>' !!}
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- 4. News & Announcement Section (3 Kolom Grid) -->
    <section class="py-20 bg-slate-50 border-t border-slate-100 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                        <span class="w-10 h-0.5 bg-primary rounded-full"></span> Info & Berita Terkini
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black text-slate-800 tracking-tight leading-tight">
                        Update Informasi Sekolah
                    </h2>
                </div>
                <a href="{{ route('articles.index') }}" class="hidden md:inline-flex items-center gap-3 text-primary font-bold hover:text-emerald-800 transition py-3 px-6 rounded-full border-2 border-primary/20 hover:border-primary/50 bg-white">
                    Lihat Semua Berita <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 xl:gap-10">
                @foreach($latest_articles as $article)
                <article class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-100 group flex flex-col h-full hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 transition duration-500">
                    <div class="relative h-64 overflow-hidden">
                        @if($article->thumbnail)
                            <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 group-hover:rotate-1 transition duration-700 ease-in-out">
                        @else
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($article->category ?? 'Berita') }}&color=34D399&background=D1FAE5&size=400" alt="{{ $article->title }}" class="w-full h-full object-cover group-hover:scale-105 group-hover:rotate-1 transition duration-700 ease-in-out">
                        @endif
                        
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <!-- Category Label -->
                        <div class="absolute top-5 left-5 bg-white text-slate-800 text-xs font-black px-4 py-2 rounded-full uppercase tracking-wider shadow-lg">
                            {{ $article->category ?? 'Update' }}
                        </div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 text-slate-500 text-sm mb-4 font-medium">
                            <i class="fa-regular fa-calendar-days text-primary"></i> {{ $article->created_at->translatedFormat('d F Y') }}
                        </div>
                        
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-slate-800 mb-4 group-hover:text-primary transition leading-snug line-clamp-3">
                            <a href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a>
                        </h3>
                        
                        <p class="text-slate-500 text-base leading-relaxed line-clamp-3 mb-8 flex-grow">
                            {{ Str::limit(strip_tags($article->content), 120) }}
                        </p>
                        
                        <a href="{{ route('articles.show', $article->slug) }}" class="inline-flex items-center gap-2 text-primary font-bold text-sm group-hover:text-emerald-800 transition uppercase tracking-widest mt-auto border-t border-slate-100 pt-6">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right-long text-xs transform group-hover:translate-x-2 transition duration-300"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
            
            <div class="mt-12 text-center md:hidden">
                <a href="{{ route('articles.index') }}" class="inline-flex items-center gap-3 text-primary font-bold bg-emerald-50 px-8 py-4 rounded-full hover:bg-primary hover:text-white transition w-full justify-center">
                    Lihat Semua Berita <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. Gallery Section (Masonry Grid) -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center justify-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                    <span class="w-10 h-0.5 bg-primary rounded-full"></span> Dokumentasi <span class="w-10 h-0.5 bg-primary rounded-full"></span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black text-slate-800 tracking-tight leading-tight">
                    Galeri Kegiatan Kami
                </h2>
                <p class="text-slate-500 mt-6 text-lg">Momen-momen berharga dalam proses pembelajaran dan pengembangan karakter siswa di lingkungan SMA Negeri 1 Suwawa.</p>
            </div>

            <!-- CSS Masonry Grid implementation using columns -->
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                @foreach($latest_galleries as $gallery)
                <div class="break-inside-avoid relative overflow-hidden rounded-3xl shadow-[0_4px_20px_rgba(0,0,0,0.06)] group cursor-pointer border border-slate-100 bg-white">
                    <img src="{{ Storage::url($gallery->url) }}" alt="{{ $gallery->event_name }}" class="w-full h-auto object-cover group-hover:scale-105 transition duration-700 ease-in-out">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/30 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 rounded-3xl flex flex-col justify-end p-6">
                        <div class="transform translate-y-4 group-hover:translate-y-0 transition duration-500">
                            <span class="inline-block px-3 py-1 bg-primary/90 text-white text-xs font-bold rounded-full mb-2 uppercase tracking-wider backdrop-blur-sm">{{ $gallery->type ?? 'Photo' }}</span>
                            <h4 class="text-white font-bold text-lg mb-1 drop-shadow-md">{{ $gallery->event_name }}</h4>
                            @if($gallery->description)
                                <p class="text-slate-200 text-sm line-clamp-2 drop-shadow-sm">{{ $gallery->description }}</p>
                            @endif
                        </div>
                    </div>

                    <!-- Hover Icon -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white text-2xl opacity-0 group-hover:opacity-100 transition duration-500 scale-50 group-hover:scale-100">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-16 text-center">
                <a href="{{ route('galleries.index') }}" class="inline-flex items-center gap-3 bg-white border-2 border-slate-200 text-slate-700 font-bold px-10 py-4 rounded-full hover:border-primary hover:text-primary transition shadow-sm hover:shadow-md transform hover:-translate-y-1 group">
                    Jelajahi Semua Foto <i class="fa-solid fa-arrow-right transform group-hover:translate-x-2 transition"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
