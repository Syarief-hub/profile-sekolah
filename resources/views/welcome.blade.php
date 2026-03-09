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
                    <span class="relative flex h-2.5 w-2.5">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-500"></span>
                    </span>
                    Tahun Ajaran 2026/2027
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
                <div class="w-16 h-16 bg-blue-50 text-primary rounded-2xl flex items-center justify-center text-2xl mb-4 group hover:bg-primary hover:text-white transition duration-300">
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
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=800&auto=format&fit=crop" alt="Kepala Sekolah" class="w-full h-auto aspect-[4/5] object-cover group-hover:scale-105 transition duration-700">
                        <!-- Floating Badge -->
                        <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-sm p-5 rounded-2xl shadow-xl border border-white translate-y-2 group-hover:translate-y-0 transition duration-500">
                            <h4 class="text-slate-800 font-bold text-lg font-heading tracking-tight leading-none mb-1">Drs. H. Ahmad Dahlan, M.Pd</h4>
                            <p class="text-primary font-semibold text-sm">Kepala Sekolah SMA N 1 Suwawa</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Teks Sambutan -->
                <div class="w-full lg:w-7/12">
                    <div class="inline-flex items-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                        <span class="w-10 h-0.5 bg-primary rounded-full"></span> Sambutan Kepala Sekolah
                    </div>
                    
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black text-slate-800 leading-[1.15] mb-8">
                        Menyongsong Masa Depan dengan <span class="text-primary relative inline-block">
                            Pendidikan Berkualitas
                            <span class="absolute bottom-2 left-0 w-full h-3 bg-secondary/30 -z-10 -rotate-1"></span>
                        </span>
                    </h2>
                    
                    <div class="relative bg-slate-50 border border-slate-100 rounded-3xl p-8 sm:p-10 shadow-sm">
                        <i class="fa-solid fa-quote-left text-7xl text-slate-200/50 absolute top-4 left-6 z-0 transform -rotate-12"></i>
                        <div class="relative z-10 text-slate-600 leading-relaxed text-lg space-y-5 text-justify">
                            <p class="first-letter:text-5xl first-letter:font-heading first-letter:font-black first-letter:text-primary first-letter:mr-2 first-letter:float-left">
                                Assalamu'alaikum Warahmatullahi Wabarakatuh. Puji syukur kita panjatkan kehadirat Allah SWT. SMA Negeri 1 Suwawa terus berkomitmen memberikan layanan pendidikan optimal guna mencetak generasi yang cerdas, terampil, dan berkarakter.
                            </p>
                            <p>
                                Melalui portal resmi ini, kami berupaya menghadirkan transparansi dan kemudahan akses informasi bagi seluruh civitas akademika, orang tua, dan masyarakat luas agar sinergi pendidikan terus terjalin erat.
                            </p>
                            <p class="font-bold text-slate-800 text-xl border-l-4 border-secondary pl-5 py-2 mt-6">
                                Bersama wujudkan SMAN 1 Suwawa HEBAT (Handal, Empati, Berprestasi, Agamis, Tangguh).
                            </p>
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
                <a href="#" class="hidden md:inline-flex items-center gap-3 text-primary font-bold hover:text-blue-800 transition py-3 px-6 rounded-full border-2 border-primary/20 hover:border-primary/50 bg-white">
                    Lihat Semua Berita <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- News Grid Data (Dummy Data) -->
            @php
                $posts = [
                    [
                        'id' => 1,
                        'title' => 'Pendaftaran PPDB Jalur Prestasi dan Zonasi Resmi Dibuka',
                        'category' => 'Pengumuman',
                        'date' => '10 Maret 2026',
                        'image' => 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop',
                        'excerpt' => 'Informasi lengkap terkait syarat dan alur pendaftaran penerimaan peserta didik baru tahun ajaran 2026/2027 dapat dilihat di sini.'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Tim Robotik SMAN 1 Suwawa Lolos ke Tingkat Nasional',
                        'category' => 'Prestasi',
                        'date' => '05 Maret 2026',
                        'image' => 'https://images.unsplash.com/photo-1561557944-6e7860d1a7eb?q=80&w=800&auto=format&fit=crop',
                        'excerpt' => 'Prestasi gemilang kembali dicetak siswa-siswi kita. Tim ekskul robotik berhasil menyisihkan puluhan sekolah dalam ajang bergengsi.'
                    ],
                    [
                        'id' => 3,
                        'title' => 'Kegiatan Pesantren Kilat dan Bakti Sosial Bulan Ramadhan',
                        'category' => 'Kegiatan',
                        'date' => '28 Februari 2026',
                        'image' => 'https://images.unsplash.com/photo-1593113580332-ce288ed3a61d?q=80&w=800&auto=format&fit=crop',
                        'excerpt' => 'Bulan Suci Ramadhan diisi dengan kegiatan positif yang melibatkan seluruh siswa, guru, dan pegawai sekolah.'
                    ]
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 xl:gap-10">
                @foreach($posts as $post)
                <article class="bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgba(0,0,0,0.04)] border border-slate-100 group flex flex-col h-full hover:shadow-[0_10px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 transition duration-500">
                    <div class="relative h-64 overflow-hidden">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover group-hover:scale-105 group-hover:rotate-1 transition duration-700 ease-in-out">
                        
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <!-- Category Label -->
                        <div class="absolute top-5 left-5 bg-white text-slate-800 text-xs font-black px-4 py-2 rounded-full uppercase tracking-wider shadow-lg">
                            {{ $post['category'] }}
                        </div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 text-slate-500 text-sm mb-4 font-medium">
                            <i class="fa-regular fa-calendar-days text-primary"></i> {{ $post['date'] }}
                        </div>
                        
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-slate-800 mb-4 group-hover:text-primary transition leading-snug line-clamp-3">
                            <a href="#">{{ $post['title'] }}</a>
                        </h3>
                        
                        <p class="text-slate-500 text-base leading-relaxed line-clamp-3 mb-8 flex-grow">
                            {{ $post['excerpt'] }}
                        </p>
                        
                        <a href="#" class="inline-flex items-center gap-2 text-primary font-bold text-sm group-hover:text-blue-800 transition uppercase tracking-widest mt-auto border-t border-slate-100 pt-6">
                            Baca Selengkapnya <i class="fa-solid fa-arrow-right-long text-xs transform group-hover:translate-x-2 transition duration-300"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
            
            <!-- Mobile View All Button -->
            <div class="mt-12 text-center md:hidden">
                <a href="#" class="inline-flex items-center gap-3 text-primary font-bold bg-blue-50 px-8 py-4 rounded-full hover:bg-primary hover:text-white transition w-full justify-center">
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
                
                <!-- Gallery Item 1 -->
                <div class="break-inside-avoid relative group rounded-3xl overflow-hidden cursor-pointer bg-slate-100 shadow-md">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=600&auto=format&fit=crop" class="w-full h-auto object-cover group-hover:scale-105 transition duration-700 ease-in-out" alt="Kegiatan Belajar">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-8">
                        <h4 class="text-white font-bold text-xl font-heading mb-1 transform translate-y-4 group-hover:translate-y-0 transition duration-500">Kegiatan Belajar</h4>
                        <p class="text-slate-300 text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition duration-500 delay-75">Ruang Kelas XII MIPA 1</p>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="break-inside-avoid relative group rounded-3xl overflow-hidden cursor-pointer bg-slate-100 shadow-md">
                    <img src="https://images.unsplash.com/photo-1544207959-c8121122abaf?q=80&w=600&auto=format&fit=crop" class="w-full h-auto object-cover group-hover:scale-105 transition duration-700 ease-in-out" alt="Upacara Bendera">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-8">
                        <h4 class="text-white font-bold text-xl font-heading mb-1 transform translate-y-4 group-hover:translate-y-0 transition duration-500">Upacara Bendera</h4>
                        <p class="text-slate-300 text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition duration-500 delay-75">Peringatan Hari Guru</p>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="break-inside-avoid relative group rounded-3xl overflow-hidden cursor-pointer bg-slate-100 shadow-md">
                    <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?q=80&w=600&auto=format&fit=crop" class="w-full h-auto object-cover group-hover:scale-105 transition duration-700 ease-in-out" alt="Praktikum Biologi">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-8">
                        <h4 class="text-white font-bold text-xl font-heading mb-1 transform translate-y-4 group-hover:translate-y-0 transition duration-500">Praktikum Laboratorium</h4>
                        <p class="text-slate-300 text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition duration-500 delay-75">Siswa Jurusan MIPA</p>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="break-inside-avoid relative group rounded-3xl overflow-hidden cursor-pointer bg-slate-100 shadow-md">
                    <img src="https://images.unsplash.com/photo-1511629091441-ee46146481b6?q=80&w=600&auto=format&fit=crop" class="w-full h-auto object-cover group-hover:scale-105 transition duration-700 ease-in-out" alt="Porseni">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-8">
                        <h4 class="text-white font-bold text-xl font-heading mb-1 transform translate-y-4 group-hover:translate-y-0 transition duration-500">Pekan Raya Olahraga</h4>
                        <p class="text-slate-300 text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition duration-500 delay-75">Pertandingan Basket Antar Kelas</p>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="break-inside-avoid relative group rounded-3xl overflow-hidden cursor-pointer bg-slate-100 shadow-md">
                    <img src="https://images.unsplash.com/photo-1427504494785-319ce8372ac0?q=80&w=600&auto=format&fit=crop" class="w-full h-auto object-cover group-hover:scale-105 transition duration-700 ease-in-out" alt="Perpustakaan">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-8">
                        <h4 class="text-white font-bold text-xl font-heading mb-1 transform translate-y-4 group-hover:translate-y-0 transition duration-500">Perpustakaan Digital</h4>
                        <p class="text-slate-300 text-sm font-medium transform translate-y-4 group-hover:translate-y-0 transition duration-500 delay-75">Fasilitas Membaca yang Nyaman</p>
                    </div>
                </div>

            </div>
            
            <div class="mt-16 text-center">
                <a href="#" class="inline-flex items-center gap-3 bg-white border-2 border-slate-200 text-slate-700 font-bold px-10 py-4 rounded-full hover:border-primary hover:text-primary transition shadow-sm hover:shadow-md transform hover:-translate-y-1 group">
                    Jelajahi Semua Foto <i class="fa-solid fa-arrow-right transform group-hover:translate-x-2 transition"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
