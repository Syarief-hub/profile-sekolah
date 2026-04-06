@extends('layouts.public')

@section('title', 'Guru & Staf | SMA Negeri 1 Suwawa')

@section('content')
    <!-- Page Header -->
    <section class="relative bg-brand-dark py-20 lg:py-28 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2000&auto=format&fit=crop" alt="Background Guru & Staf" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                <span class="w-10 h-0.5 bg-primary rounded-full"></span> Akademik <span class="w-10 h-0.5 bg-primary rounded-full"></span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-black text-white leading-tight mb-6 drop-shadow-md">
                Guru & Staf
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Tenaga pendidik dan kependidikan di SMA Negeri 1 Suwawa.
            </p>
        </div>
        
        <!-- Bottom Curve Decoration -->
        <div class="absolute bottom-0 left-0 right-0 z-20">
            <svg class="w-full h-auto text-slate-50 fill-current translate-y-1" viewBox="0 0 1440 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1440V0L0 48Z"></path>
            </svg>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 lg:py-24 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white rounded-3xl shadow-[0_10px_40px_rgba(0,0,0,0.04)] border border-slate-100 p-6 sm:p-8 md:p-12 relative overflow-hidden group">
                <!-- Abstract Background -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4 group-hover:bg-primary/10 transition duration-700"></div>
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8 relative z-10 border-b border-slate-100 pb-6">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 flex-shrink-0 bg-emerald-50 text-primary rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-emerald-100">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-800 tracking-tight leading-none mb-1">Daftar Pendidik</h2>
                            <p class="text-slate-500 text-sm">Informasi profil guru dan staf (Sedang dalam pengembangan)</p>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-16 relative z-10 py-6">
                    
                    <!-- KATEGORI 1: PIMPINAN SEKOLAH -->
                    @if($pimpinan->count() > 0)
                    <div>
                        <div class="text-center mb-8">
                            <h3 class="inline-block py-1.5 px-5 rounded-full bg-primary/10 text-primary font-bold text-sm uppercase tracking-widest border border-primary/20 shadow-sm">Pimpinan Sekolah</h3>
                        </div>
                        
                        <div class="flex flex-wrap justify-center gap-8">
                            @foreach($pimpinan as $p)
                            <div class="max-w-xs w-full mx-auto">
                                <div class="bg-white border border-slate-100 rounded-3xl p-8 text-center shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgb(0,0,0,0.08)] hover:-translate-y-1 transition-all duration-300 group relative overflow-hidden">
                                    <!-- Dekorasi Latar -->
                                    <div class="absolute top-0 left-0 right-0 h-32 bg-gradient-to-br from-slate-50 to-slate-100 rounded-t-3xl border-b border-slate-100"></div>
                                    
                                    <!-- Foto Pimpinan -->
                                    <div class="relative w-32 h-32 mx-auto mb-6 rounded-full p-1.5 bg-gradient-to-tr from-primary to-blue-300 group-hover:scale-105 transition-transform duration-500 z-10 shadow-lg">
                                        @if($p->image)
                                            <img src="{{ Storage::url($p->image) }}" alt="{{ $p->name }}" class="w-full h-full object-cover rounded-full border-4 border-white bg-white">
                                        @else
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($p->name) }}&background=ffffff&color=0f172a&size=150" alt="{{ $p->name }}" class="w-full h-full object-cover rounded-full border-4 border-white bg-white">
                                        @endif
                                        <div class="absolute bottom-1 right-1 bg-emerald-500 w-8 h-8 rounded-full border-[3px] border-white flex items-center justify-center text-white text-[10px] shadow-sm" title="Terverifikasi">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    
                                    <!-- Identitas -->
                                    <div class="relative z-10">
                                        <h4 class="text-xl font-black text-slate-800 mb-1.5">{{ $p->name }}</h4>
                                        <p class="text-primary font-bold text-sm mb-3">{{ $p->position }}</p>
                                        @if($p->nip)
                                            <p class="text-slate-400 font-mono text-xs mb-5 bg-slate-50 py-1.5 px-3 rounded-lg border border-slate-100 inline-block w-full">NIP. {{ $p->nip }}</p>
                                        @else
                                            <div class="mb-5"></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- KATEGORI 2: TENAGA PENDIDIK (GURU) -->
                    @if($gurus->count() > 0)
                    <div>
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-800 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-500 flex items-center justify-center">
                                    <i class="fa-solid fa-chalkboard-user"></i>
                                </div>
                                Tenaga Pendidik
                            </h3>
                            <div class="flex-1 h-px bg-gradient-to-r from-slate-200 to-transparent"></div>
                        </div>
                        
                        <!-- Grid Guru -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            @foreach($gurus as $guru)
                            <div class="bg-white border border-slate-100 rounded-2xl p-6 text-center shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group border-b-4 border-b-transparent hover:border-b-blue-500 relative overflow-hidden">
                                <div class="w-24 h-24 mx-auto mb-5 rounded-full p-1 bg-slate-50 border-2 border-slate-100 group-hover:border-blue-200 transition-colors duration-300 relative z-10">
                                    @if($guru->image)
                                        <img src="{{ Storage::url($guru->image) }}" alt="{{ $guru->name }}" class="w-full h-full object-cover rounded-full bg-white">
                                    @else
                                        <img src="https://ui-avatars.com/api/?name={{ urlencode($guru->name) }}&background=eff6ff&color=3b82f6&size=150" alt="{{ $guru->name }}" class="w-full h-full object-cover rounded-full bg-white">
                                    @endif
                                </div>
                                <h4 class="font-bold text-slate-800 text-lg leading-tight mb-1">{{ $guru->name }}</h4>
                                <p class="text-blue-600 font-semibold text-xs mb-3">{{ $guru->position }}</p>
                                @if($guru->nip)
                                <div class="flex flex-wrap justify-center gap-1.5">
                                    <span class="inline-block px-2.5 py-1 bg-slate-50 text-slate-500 text-[10px] uppercase tracking-wider font-bold rounded border border-slate-200">NIP. {{ $guru->nip }}</span>
                                </div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- KATEGORI 3: TENAGA KEPENDIDIKAN (STAF TU) -->
                    @if($stafs->count() > 0)
                    <div>
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-xl md:text-2xl font-bold text-slate-800 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                                    <i class="fa-solid fa-users-gear"></i>
                                </div>
                                Tenaga Kependidikan
                            </h3>
                            <div class="flex-1 h-px bg-gradient-to-r from-slate-200 to-transparent"></div>
                        </div>
                        
                        <!-- Grid Staf -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            @foreach($stafs as $staf)
                            <div class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                                <div class="absolute inset-y-0 left-0 w-1 bg-purple-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 rounded-full bg-slate-100 flex-shrink-0">
                                        @if($staf->image)
                                            <img src="{{ Storage::url($staf->image) }}" alt="{{ $staf->name }}" class="w-full h-full object-cover rounded-full bg-white">
                                        @else
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($staf->name) }}&background=f8fafc&color=64748b&size=100" alt="{{ $staf->name }}" class="w-full h-full object-cover rounded-full bg-white">
                                        @endif
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800 leading-tight block">{{ $staf->name }}</h4>
                                        <p class="text-slate-500 text-xs mt-0.5 block">{{ $staf->position }}</p>
                                        @if($staf->nip)
                                            <p class="text-slate-400 text-[10px] font-mono mt-1 break-all block">NIP. {{ $staf->nip }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if($pimpinan->isEmpty() && $gurus->isEmpty() && $stafs->isEmpty())
                    <div class="relative z-10 text-center py-16 px-4 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-slate-400 text-3xl mx-auto mb-6 shadow-sm border border-slate-100">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-700 mb-2">Data Guru & Staf Belum Tersedia</h3>
                        <p class="text-slate-500 max-w-md mx-auto mb-8">Daftar lengkap tenaga pendidik dan kependidikan sedang disusun. Silakan hubungi admin untuk memperbarui informasi ini.</p>
                    </div>
                    @endif
                </div>
                
            </div>
            
        </div>
    </section>
@endsection
