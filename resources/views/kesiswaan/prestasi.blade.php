@extends('layouts.public')

@section('title', 'Prestasi Sekolah | SMA Negeri 1 Suwawa')

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
               <i class="fa-solid fa-trophy"></i> Kesiswaan
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white leading-tight mb-6 drop-shadow-xl">
                Prestasi Siswa
            </h1>
            <p class="text-emerald-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Ragam pencapaian gemilang dan penghargaan yang diraih oleh siswa-siswi berprestasi kami.
            </p>
        </div>
        
        <!-- Sweeping SVG Wave Divider -->
        <div class="absolute bottom-0 left-0 right-0 z-20 translate-y-1">
            <svg class="w-full h-auto text-white fill-current" viewBox="0 0 1440 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 64H1440V0C1440 0 1140 64 720 64C300 64 0 0 0 0V64Z"></path>
            </svg>
        </div>
    </section>

    <!-- Main Content -->
    <section class="pb-24 lg:pb-32 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-emerald-50 rounded-[2.5rem] border-[8px] border-white shadow-xl shadow-primary/5 p-6 sm:p-8 md:p-12 relative overflow-hidden group">
                <!-- Abstract Background -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4 group-hover:bg-primary/10 transition duration-700"></div>
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8 relative z-10 border-b border-slate-100 pb-6">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 flex-shrink-0 bg-emerald-50 text-primary rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-emerald-100">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-800 tracking-tight leading-none mb-1">Daftar Prestasi</h2>
                            <p class="text-slate-500 text-sm">Pencapaian akademik dan non-akademik (Sedang dalam pengembangan)</p>
                        </div>
                    </div>
                </div>
                
                @if($achievements->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 relative z-10 py-4">
                        @foreach($achievements as $prestasi)
                        <div class="bg-white border border-slate-100 shadow-[0_4px_20px_rgb(0,0,0,0.03)] rounded-3xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition duration-300 flex flex-col group">
                            <!-- Image -->
                            <div class="aspect-video bg-slate-100 relative overflow-hidden">
                                @if($prestasi->image)
                                    <img src="{{ Storage::url($prestasi->image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="{{ $prestasi->title }}">
                                @else
                                    <div class="w-full h-full flex flex-col items-center justify-center text-slate-300 bg-slate-50 border-b border-slate-100">
                                        <i class="fa-solid fa-trophy text-4xl mb-2"></i>
                                        <span class="text-xs uppercase tracking-widest font-bold opacity-50">Tanpa Foto</span>
                                    </div>
                                @endif
                                
                                <div class="absolute top-4 left-4 z-10 flex gap-2">
                                    <span class="px-3 py-1 bg-white/90 backdrop-blur-sm shadow-sm border border-white/50 text-xs font-bold rounded-lg text-primary">
                                        {{ $prestasi->category }}
                                    </span>
                                </div>
                                <div class="absolute top-4 right-4 z-10">
                                    <span class="px-3 py-1 bg-amber-500/90 backdrop-blur-sm shadow-sm border border-amber-400/50 text-xs font-bold rounded-lg text-white">
                                        {{ $prestasi->achievement_year }}
                                    </span>
                                </div>
                            </div>
                            
                            <!-- Content -->
                            <div class="p-6 flex-1 flex flex-col">
                                <h3 class="text-xl font-bold text-slate-800 mb-2 group-hover:text-primary transition-colors">{{ $prestasi->title }}</h3>
                                
                                <div class="flex flex-col gap-2 mt-2">
                                    <div class="flex items-center gap-3 text-sm text-slate-600 font-medium">
                                        <div class="w-8 h-8 rounded-full bg-slate-50 border border-slate-100 text-slate-400 flex items-center justify-center text-xs flex-shrink-0">
                                            <i class="fa-solid fa-user-graduate"></i>
                                        </div>
                                        <span>{{ $prestasi->student_name }}</span>
                                    </div>
                                    <div class="flex items-center gap-3 text-sm text-slate-600 font-medium">
                                        <div class="w-8 h-8 rounded-full bg-slate-50 border border-slate-100 text-slate-400 flex items-center justify-center text-xs flex-shrink-0">
                                            <i class="fa-solid fa-layer-group"></i>
                                        </div>
                                        <span>Tingkat {{ $prestasi->level }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="relative z-10 text-center py-16 px-4 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-slate-400 text-3xl mx-auto mb-6 shadow-sm border border-slate-100">
                            <i class="fa-solid fa-medal"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-700 mb-2">Data Prestasi Belum Tersedia</h3>
                        <p class="text-slate-500 max-w-md mx-auto mb-8">Daftar medali, piala, dan prestasi yang diraih oleh siswa-siswi sekolah kita sedang direkap. Silakan hubungi admin untuk memperbarui informasi ini.</p>
                    </div>
                @endif
                
            </div>
            
        </div>
    </section>
@endsection
