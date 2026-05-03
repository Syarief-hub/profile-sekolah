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
                Jejak & Sejarah
            </h1>
            <p class="text-emerald-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
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
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Content Wrapper matching the 'Welcome' Card style -->
            <div class="w-full bg-emerald-50 rounded-[2.5rem] shadow-xl shadow-primary/5 border-[8px] border-white p-8 md:p-12 lg:p-16 relative overflow-hidden group">
                <!-- Inner decoration background -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4 group-hover:bg-primary/10 transition duration-700 pointer-events-none"></div>
                
                <div class="flex items-center gap-4 mb-8 relative z-10 border-b-2 border-emerald-100 pb-6">
                    <div class="w-14 h-14 bg-white text-primary rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-emerald-100 shrink-0">
                        <i class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <h2 class="text-3xl font-heading font-black text-slate-800 tracking-tight">Catatan Perjalanan</h2>
                </div>
                
                <!-- Dynamic Content Output -->
                <div class="relative z-10 prose prose-lg prose-slate max-w-none text-slate-700 leading-relaxed text-justify prose-p:mb-6 prose-headings:font-heading prose-headings:font-black prose-headings:text-slate-900 prose-a:text-primary">
                    {!! $global_settings['sejarah_content'] ?? '<p>Konten sejarah belum ditambahkan. Silakan atur melalui panel administrator.</p>' !!}
                </div>
            </div>
        </div>
    </section>
@endsection
