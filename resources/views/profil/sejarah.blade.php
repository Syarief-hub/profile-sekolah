@extends('layouts.public')

@section('title', 'Sejarah | SMA Negeri 1 Suwawa')

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
               <i class="fa-solid fa-clock-rotate-left"></i> Profil SMAN 1 Suwawa
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white leading-tight mb-6 drop-shadow-xl">
                Sejarah
            </h1>
            <p class="text-blue-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Menelusuri perjalanan panjang dan dedikasi kami dalam dunia pendidikan sejak tahap perintisan pertama kali.
            </p>
        </div>
        
        <!-- Sweeping SVG Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0 z-20 translate-y-1">
            <svg class="w-full h-auto text-white fill-current" viewBox="0 0 1440 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 64H1440V0C1440 0 1140 64 720 64C300 64 0 0 0 0V64Z"></path>
            </svg>
        </div>
    </section>

    <!-- Main Content: Sejarah -->
    <section class="pb-24 lg:pb-32 bg-white relative">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Content Wrapper matching the 'Welcome' Card style -->
            <div class="w-full bg-blue-50 rounded-[2.5rem] shadow-xl shadow-primary/5 border-[8px] border-white p-8 md:p-12 lg:p-16 relative overflow-hidden group">
                <!-- Inner decoration background -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4 group-hover:bg-primary/10 transition duration-700 pointer-events-none"></div>
                
                <div class="flex items-center gap-4 mb-10 relative z-10 border-b-2 border-blue-100 pb-6">
                    <div class="w-14 h-14 bg-white text-primary rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-blue-100 shrink-0">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <h2 class="text-3xl font-heading font-black text-slate-800 tracking-tight">Catatan Perjalanan</h2>
                </div>
                
                <!-- Dynamic Content Output (Modern Layout) -->
                <div class="relative z-10 flex flex-col lg:flex-row gap-10 lg:gap-16">
                    
                    @php
                        $sejarah_images = isset($global_settings['sejarah_images']) ? json_decode($global_settings['sejarah_images'], true) : [];
                    @endphp
                    
                    @if(!empty($sejarah_images))
                    <!-- Bagian Foto (Kolase) -->
                    <div class="lg:w-5/12 shrink-0">
                        <div class="sticky top-32">
                            <div class="grid grid-cols-2 gap-4">
                                @foreach(array_slice($sejarah_images, 0, 3) as $index => $img)
                                    @php $src = str_starts_with($img, 'http') ? $img : asset('storage/' . $img); @endphp
                                    @if($index == 0)
                                        <div class="col-span-2 rounded-3xl overflow-hidden shadow-2xl shadow-primary/20 border-4 border-white transform hover:-translate-y-2 transition duration-500 group/image relative">
                                            <img src="{{ $src }}" alt="Arsip Utama" class="w-full h-auto aspect-[4/3] object-cover group-hover/image:scale-105 transition duration-700">
                                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-slate-900/20 to-transparent"></div>
                                            <div class="absolute bottom-5 left-5 right-5 text-white">
                                                <div class="inline-flex items-center gap-1 text-[10px] font-bold uppercase tracking-wider bg-primary/90 backdrop-blur-md px-2 py-0.5 rounded-full mb-1"><i class="fa-solid fa-camera"></i> Momen Sejarah</div>
                                                <h3 class="font-heading font-black text-xl leading-tight drop-shadow-md">SMAN 1 Suwawa</h3>
                                            </div>
                                        </div>
                                    @elseif($index == 1)
                                        <div class="rounded-3xl overflow-hidden shadow-xl shadow-secondary/20 border-4 border-white transform hover:-translate-y-2 transition duration-500 group/img2 mt-4">
                                            <img src="{{ $src }}" alt="Arsip Tambahan 1" class="w-full h-full object-cover aspect-[4/5] group-hover/img2:scale-110 transition duration-700">
                                        </div>
                                    @elseif($index == 2)
                                        <div class="rounded-3xl overflow-hidden shadow-xl shadow-sky-500/20 border-4 border-white transform hover:-translate-y-2 transition duration-500 group/img3 -mt-4">
                                            <img src="{{ $src }}" alt="Arsip Tambahan 2" class="w-full h-full object-cover aspect-[4/5] group-hover/img3:scale-110 transition duration-700">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Bagian Teks -->
                    <div class="lg:flex-1 prose prose-lg prose-slate max-w-none text-slate-700 leading-relaxed text-justify prose-p:mb-6 prose-headings:font-heading prose-headings:font-black prose-headings:text-slate-900 prose-a:text-primary">
                        @if(isset($global_settings['sejarah_title']) && $global_settings['sejarah_title'])
                            <h3 class="text-3xl font-heading font-black text-primary mb-6 mt-0">{{ $global_settings['sejarah_title'] }}</h3>
                        @endif
                        <div class="space-y-4">
                            {!! nl2br(e($global_settings['sejarah_content'] ?? 'Konten sejarah belum ditambahkan. Silakan atur melalui panel administrator.')) !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
