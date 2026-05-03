@extends('layouts.public')

@section('title', 'Struktur Organisasi | SMA Negeri 1 Suwawa')

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
               <i class="fa-solid fa-sitemap"></i> Profil SMAN 1 Suwawa
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white leading-tight mb-6 drop-shadow-xl">
                Struktur Organisasi
            </h1>
            <p class="text-emerald-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
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
            
            <div class="bg-emerald-50 rounded-[2.5rem] border-[8px] border-white shadow-xl shadow-primary/5 p-6 sm:p-8 md:p-12 relative overflow-hidden group">
                <!-- Abstract Background -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4 group-hover:bg-primary/10 transition duration-700"></div>
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-8 relative z-10 border-b border-slate-100 pb-6">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 flex-shrink-0 bg-emerald-50 text-primary rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-emerald-100">
                            <i class="fa-solid fa-sitemap"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-800 tracking-tight leading-none mb-1">Bagan Struktur</h2>
                            <p class="text-slate-500 text-sm">Informasi struktur organisasi sekolah</p>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-12 relative z-10 py-8">
                    <!-- Level 1: Kepala Sekolah -->
                    <div class="flex flex-col items-center relative">
                        <div class="bg-white border border-slate-200 shadow-xl rounded-3xl p-8 text-center w-full max-w-sm relative overflow-hidden group hover:shadow-2xl hover:border-primary/30 transition-all duration-300 z-10">
                            <div class="absolute top-0 inset-x-0 h-2 bg-primary"></div>
                            <div class="w-24 h-24 bg-slate-50 border-4 border-white shadow-md rounded-full mx-auto flex items-center justify-center mb-5 text-primary text-4xl group-hover:scale-110 group-hover:bg-primary/5 transition-transform duration-300">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <h3 class="font-black text-2xl text-slate-800 mb-1">{{ $global_settings['principal_name'] ?? 'Nama Kepala Sekolah' }}</h3>
                            <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full bg-primary/10 text-primary text-sm font-bold">
                                Kepala Sekolah
                            </span>
                        </div>
                    </div>

                    <!-- PENGHUBUNG KEPSEK KE BAWAH -->
                    <div class="hidden md:flex justify-center -my-12 relative z-0">
                        <div class="w-px h-16 bg-gradient-to-b from-primary/50 to-slate-200"></div>
                    </div>

                    <!-- Level 2: Komite & Kepala Tata Usaha -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto pt-6 md:pt-0">
                        <div class="bg-white border border-slate-100 shadow-lg rounded-2xl p-6 flex items-center gap-5 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-l-rose-500">
                            <div class="w-16 h-16 bg-rose-50 rounded-2xl flex items-center justify-center text-rose-500 text-2xl flex-shrink-0">
                                <i class="fa-solid fa-users-viewfinder"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-slate-800">{{ $global_settings['structure_komite_name'] ?? 'H. Nama Komite, S.Pd., M.Si' }}</h3>
                                <p class="text-rose-500 font-medium text-sm">Ketua Komite Sekolah</p>
                            </div>
                        </div>
                        
                        <div class="bg-white border border-slate-100 shadow-lg rounded-2xl p-6 flex items-center gap-5 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-l-slate-700">
                            <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center text-slate-700 text-2xl flex-shrink-0">
                                <i class="fa-solid fa-file-signature"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-slate-800">{{ $global_settings['structure_tu_name'] ?? 'Nama Kepala TU, S.E' }}</h3>
                                <p class="text-slate-600 font-medium text-sm">Kepala Tata Usaha</p>
                            </div>
                        </div>
                    </div>

                    <!-- PENGHUBUNG KE WAKASEK -->
                    <div class="hidden md:flex justify-center -my-12 relative z-0">
                        <div class="w-px h-16 bg-slate-200"></div>
                    </div>

                    <!-- Level 3: Wakil Kepala Sekolah -->
                    <div class="relative pt-8 md:pt-4">
                        <!-- Garis Horizontal Penghubung (Hanya Desktop) -->
                        <div class="absolute top-4 left-[12.5%] w-[75%] h-px bg-slate-200 hidden md:block"></div>
                        <div class="absolute top-4 left-[12.5%] w-px h-6 bg-slate-200 hidden md:block"></div>
                        <div class="absolute top-4 left-[37.5%] w-px h-6 bg-slate-200 hidden md:block"></div>
                        <div class="absolute top-4 left-[62.5%] w-px h-6 bg-slate-200 hidden md:block"></div>
                        <div class="absolute top-4 left-[87.5%] w-px h-6 bg-slate-200 hidden md:block"></div>
                        
                        <h3 class="text-center font-bold text-slate-400 uppercase tracking-widest text-sm mb-6 mt-2 relative inline-block mx-auto w-full md:bg-slate-50 md:z-10">Jajaran Wakil Kepala Sekolah</h3>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Waka Kurikulum -->
                            <div class="bg-white border border-slate-100 shadow-md rounded-2xl p-6 text-center hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border-t-4 border-t-blue-500 group relative overflow-hidden">
                                <div class="absolute inset-0 bg-blue-50/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="w-14 h-14 bg-blue-50 rounded-full mx-auto flex items-center justify-center mb-4 text-blue-500 text-xl relative z-10 group-hover:bg-blue-500 group-hover:text-white transition-colors duration-300 border border-blue-100">
                                    <i class="fa-solid fa-book-open"></i>
                                </div>
                                <h4 class="font-bold text-slate-800 mb-1 relative z-10">{{ $global_settings['structure_waka_kurikulum_name'] ?? 'Nama Waka Kurikulum, S.Pd' }}</h4>
                                <p class="text-xs font-semibold text-blue-600 relative z-10">Urusan Kurikulum</p>
                            </div>

                            <!-- Waka Kesiswaan -->
                            <div class="bg-white border border-slate-100 shadow-md rounded-2xl p-6 text-center hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border-t-4 border-t-emerald-500 group relative overflow-hidden">
                                <div class="absolute inset-0 bg-emerald-50/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="w-14 h-14 bg-emerald-50 rounded-full mx-auto flex items-center justify-center mb-4 text-emerald-500 text-xl relative z-10 group-hover:bg-emerald-500 group-hover:text-white transition-colors duration-300 border border-emerald-100">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <h4 class="font-bold text-slate-800 mb-1 relative z-10">{{ $global_settings['structure_waka_kesiswaan_name'] ?? 'Nama Waka Kesiswaan, S.Pd' }}</h4>
                                <p class="text-xs font-semibold text-emerald-600 relative z-10">Urusan Kesiswaan</p>
                            </div>

                            <!-- Waka Sarpras -->
                            <div class="bg-white border border-slate-100 shadow-md rounded-2xl p-6 text-center hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border-t-4 border-t-amber-500 group relative overflow-hidden">
                                <div class="absolute inset-0 bg-amber-50/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="w-14 h-14 bg-amber-50 rounded-full mx-auto flex items-center justify-center mb-4 text-amber-500 text-xl relative z-10 group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300 border border-amber-100">
                                    <i class="fa-solid fa-building"></i>
                                </div>
                                <h4 class="font-bold text-slate-800 mb-1 relative z-10">{{ $global_settings['structure_waka_sarpras_name'] ?? 'Nama Waka Sarpras, S.Pd' }}</h4>
                                <p class="text-xs font-semibold text-amber-600 relative z-10">Urusan Sarana & Prasarana</p>
                            </div>

                            <!-- Waka Humas -->
                            <div class="bg-white border border-slate-100 shadow-md rounded-2xl p-6 text-center hover:-translate-y-2 hover:shadow-xl transition-all duration-300 border-t-4 border-t-purple-500 group relative overflow-hidden">
                                <div class="absolute inset-0 bg-purple-50/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                <div class="w-14 h-14 bg-purple-50 rounded-full mx-auto flex items-center justify-center mb-4 text-purple-500 text-xl relative z-10 group-hover:bg-purple-500 group-hover:text-white transition-colors duration-300 border border-purple-100">
                                    <i class="fa-solid fa-handshake"></i>
                                </div>
                                <h4 class="font-bold text-slate-800 mb-1 relative z-10">{{ $global_settings['structure_waka_humas_name'] ?? 'Nama Waka Humas, S.Pd' }}</h4>
                                <p class="text-xs font-semibold text-purple-600 relative z-10">Urusan Humas</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
@endsection
