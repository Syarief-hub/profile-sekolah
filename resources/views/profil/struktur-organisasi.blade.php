@extends('layouts.public')

@section('title', 'Struktur Organisasi | SMA Negeri 1 Suwawa')

@section('content')
    <!-- Premium Inner Page Header -->
    <section class="relative bg-brand-dark pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/header-bg.jpg') }}" alt="Campus Background" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark/80 via-brand-dark/60 to-brand-dark"></div>
        </div>
        
        <!-- Abstract Decorations -->
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary/20 rounded-full blur-3xl z-0 pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-secondary/20 rounded-full blur-3xl z-0 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center gap-3 text-secondary font-bold text-sm tracking-widest uppercase mb-6 px-5 py-2 bg-secondary/10 rounded-full border border-secondary/20 backdrop-blur-md">
               <i class="fa-solid fa-sitemap"></i> Profil SMAN 1 Suwawa
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white leading-tight mb-6 drop-shadow-xl">
                Struktur Organisasi
            </h1>
            <p class="text-blue-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Susunan kepengurusan dan sistem manajemen manajerial terpadu di lingkungan SMA Negeri 1 Suwawa.
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
            
            <div class="bg-[#f4f5f7] rounded-[2.5rem] p-6 sm:p-8 md:p-12 relative overflow-hidden group border border-slate-200 shadow-sm">
                
                <!-- Header Area -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6 relative z-10">
                    <!-- Title -->
                    <div>
                        <h4 class="text-slate-400 font-semibold tracking-[0.2em] uppercase text-xs sm:text-sm mb-1">Struktur Organisasi</h4>
                        <h2 class="text-3xl sm:text-4xl font-black text-slate-700 uppercase tracking-tight mb-3">Infografis</h2>
                        <div class="flex items-center gap-2">
                            <div class="w-2.5 h-2.5 rounded-full bg-rose-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-pink-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-fuchsia-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-purple-500"></div>
                            <div class="w-2.5 h-2.5 rounded-full bg-indigo-500"></div>
                        </div>
                    </div>
                    
                    <!-- Description -->
                    <div class="max-w-md text-right hidden md:block">
                        <p class="text-slate-500 text-sm leading-relaxed mb-3">
                            Susunan kepengurusan dan sistem manajemen manajerial terpadu di lingkungan SMA Negeri 1 Suwawa.
                        </p>
                        <div class="flex justify-end gap-5 text-xs text-slate-600 font-medium">
                            <div class="flex items-center gap-1.5"><div class="w-2 h-2 rounded-full bg-rose-500"></div> Pimpinan</div>
                            <div class="flex items-center gap-1.5"><div class="w-2 h-2 rounded-full bg-purple-500"></div> Wakil</div>
                            <div class="flex items-center gap-1.5"><div class="w-2 h-2 rounded-full bg-blue-500"></div> Staf</div>
                        </div>
                    </div>
                </div>
                
                <!-- Tree Chart -->
                <div class="relative w-full max-w-6xl mx-auto py-6 z-10">
                    
                    @if($pimpinan->count() > 0)
                    <!-- LEVEL 1 (Pimpinan) -->
                    <div class="relative flex flex-col items-center">
                        <div class="flex flex-wrap justify-center gap-10">
                            @foreach($pimpinan as $member)
                            <div class="text-center relative">
                                <!-- Photo component -->
                                <div class="relative w-36 h-36 sm:w-44 sm:h-44 mx-auto mb-5 group">
                                    <div class="absolute -inset-[3px] rounded-full bg-gradient-to-r from-rose-500 to-pink-500"></div>
                                    <div class="absolute -inset-[3px] bottom-[-10px] sm:bottom-[-14px] rounded-full bg-gradient-to-r from-rose-500 to-pink-500 transition-transform duration-300 group-hover:scale-105"></div>
                                    <div class="absolute inset-0 rounded-full bg-[#f4f5f7] scale-[1.05]"></div>
                                    <div class="relative w-full h-full rounded-full overflow-hidden z-10 border-[3px] sm:border-[4px] border-white bg-slate-200">
                                        @if($member->photo)
                                            <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->position }}" class="w-full h-full object-cover object-top">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-slate-400 bg-white"><i class="fa-solid fa-user-tie text-5xl"></i></div>
                                        @endif
                                    </div>
                                </div>
                                <h3 class="font-black text-slate-800 uppercase tracking-widest text-[14px] sm:text-[16px] mb-1">{{ $member->name }}</h3>
                                <p class="text-[11px] sm:text-[12px] text-slate-500 font-medium uppercase tracking-widest">{{ $member->position }}</p>
                            </div>
                            @endforeach
                        </div>

                        <!-- Vertical Line down from Level 1 -->
                        @if($wakil->count() > 0 || $staf->count() > 0)
                            <div class="w-px h-10 sm:h-14 bg-slate-300 mt-3 hidden md:block"></div>
                        @endif
                    </div>
                    @endif

                    @if($wakil->count() > 0)
                    <!-- LEVEL 2 (Wakil) -->
                    <div class="relative flex flex-col items-center w-full">
                        <!-- Horizontal Line -->
                        @if($wakil->count() > 1)
                            @php
                                $waka_width = (($wakil->count() - 1) / $wakil->count()) * 100;
                            @endphp
                            <div class="absolute top-0 w-[{{ $waka_width }}%] h-px bg-slate-300 hidden md:block"></div>
                        @endif
                        
                        <div class="flex flex-col md:flex-row justify-center w-full pt-10 md:pt-10 gap-10 relative">
                            @foreach($wakil as $member)
                            <div class="flex flex-col items-center relative w-full md:w-auto md:flex-1 max-w-xs">
                                @if($wakil->count() > 1)
                                    <div class="absolute -top-10 w-px h-10 bg-slate-300 hidden md:block"></div>
                                @endif
                                <div class="text-center">
                                    <div class="relative w-28 h-28 sm:w-36 sm:h-36 mx-auto mb-5 group">
                                        <div class="absolute -inset-[3px] rounded-full bg-gradient-to-r from-purple-600 to-fuchsia-500"></div>
                                        <div class="absolute -inset-[3px] bottom-[-10px] sm:bottom-[-12px] rounded-full bg-gradient-to-r from-purple-600 to-fuchsia-500 transition-transform duration-300 group-hover:scale-105"></div>
                                        <div class="absolute inset-0 rounded-full bg-[#f4f5f7] scale-[1.05]"></div>
                                        <div class="relative w-full h-full rounded-full overflow-hidden z-10 border-[3px] border-white bg-slate-200">
                                            @if($member->photo)
                                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->position }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-slate-400 bg-white"><i class="fa-solid fa-book-open text-4xl"></i></div>
                                            @endif
                                        </div>
                                    </div>
                                    <h3 class="font-black text-slate-800 uppercase tracking-widest text-[13px] sm:text-[14px] mb-1 line-clamp-1 px-2" title="{{ $member->name }}">{{ $member->name }}</h3>
                                    <p class="text-[10px] sm:text-[11px] text-slate-500 font-medium uppercase tracking-widest">{{ $member->position }}</p>
                                </div>
                                
                                <!-- Line going down from Middle Waka to Level 3 -->
                                @if($staf->count() > 0 && $loop->iteration == ceil($wakil->count() / 2))
                                    <div class="w-px h-10 sm:h-14 bg-slate-300 mt-3 hidden md:block"></div>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if($staf->count() > 0)
                    <!-- LEVEL 3 (Staf) -->
                    <div class="relative flex flex-col items-center w-full mt-10 md:mt-0">
                        <!-- Horizontal Line for Level 3 -->
                        @if($staf->count() > 1)
                            @php
                                $staf_width = (($staf->count() - 1) / $staf->count()) * 100;
                            @endphp
                            <div class="absolute top-0 w-[{{ $staf_width }}%] h-px bg-slate-300 hidden md:block"></div>
                        @endif
                        
                        <div class="flex flex-wrap justify-center w-full gap-8 md:gap-6 pt-0 md:pt-10 relative">
                            @foreach($staf as $member)
                            <div class="flex flex-col items-center relative w-1/2 md:w-auto md:flex-1 max-w-[240px]">
                                @if($staf->count() > 1)
                                    <div class="absolute -top-10 w-px h-10 bg-slate-300 hidden md:block"></div>
                                @endif
                                <div class="text-center w-full">
                                    <div class="relative w-24 h-24 sm:w-28 sm:h-28 mx-auto mb-5 group">
                                        <div class="absolute -inset-[3px] rounded-full bg-gradient-to-r from-blue-500 to-indigo-500"></div>
                                        <div class="absolute -inset-[3px] bottom-[-8px] sm:bottom-[-10px] rounded-full bg-gradient-to-r from-blue-500 to-indigo-500 transition-transform duration-300 group-hover:scale-105"></div>
                                        <div class="absolute inset-0 rounded-full bg-[#f4f5f7] scale-[1.06]"></div>
                                        <div class="relative w-full h-full rounded-full overflow-hidden z-10 border-[2px] sm:border-[3px] border-white bg-slate-200">
                                            @if($member->photo)
                                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->position }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-slate-400 bg-white"><i class="fa-solid fa-users text-3xl"></i></div>
                                            @endif
                                        </div>
                                    </div>
                                    <h3 class="font-black text-slate-800 uppercase tracking-widest text-[12px] sm:text-[13px] mb-1 line-clamp-1 px-1" title="{{ $member->name }}">{{ $member->name }}</h3>
                                    <p class="text-[9px] sm:text-[10px] text-slate-500 font-medium uppercase tracking-widest">{{ $member->position }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    @if($pimpinan->count() == 0 && $wakil->count() == 0 && $staf->count() == 0)
                    <div class="text-center py-20">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-slate-200 text-slate-400 mb-4">
                            <i class="fa-solid fa-sitemap text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-700 mb-2">Belum Ada Data</h3>
                        <p class="text-slate-500">Data struktur organisasi belum ditambahkan oleh administrator.</p>
                    </div>
                    @endif

                </div>
                
            </div>
            
        </div>
    </section>
@endsection
