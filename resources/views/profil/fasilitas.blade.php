@extends('layouts.public')

@section('title', 'Fasilitas | SMA Negeri 1 Suwawa')

@section('content')
    <!-- Page Header -->
    <section class="relative bg-brand-dark py-20 lg:py-28 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2000&auto=format&fit=crop" alt="Background Fasilitas" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                <span class="w-10 h-0.5 bg-primary rounded-full"></span> Profil Sekolah <span class="w-10 h-0.5 bg-primary rounded-full"></span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-black text-white leading-tight mb-6 drop-shadow-md">
                Fasilitas Sekolah
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Sarana dan prasarana pendukung kegiatan belajar mengajar di SMA Negeri 1 Suwawa.
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
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-800 tracking-tight leading-none mb-1">Daftar Ruangan & Sarana</h2>
                            <p class="text-slate-500 text-sm">Data prasarana SMA Negeri 1 Suwawa</p>
                        </div>
                    </div>
                </div>
                
                <!-- Grid Container -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 relative z-10">
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Kelas/Teori</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">19</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">LAB. Biologi</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">LAB. Kimia</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">LAB. Fisika</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">LAB. Bahasa</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Komputer</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">2</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Perpustakaan</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Keterampilan</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Serbaguna/Aula</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang UKS</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Koperasi</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang BK/BP</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Kepala Sekolah</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Wakasek</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Dewan Guru</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Tata Usaha</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Ekstrakurikuler</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang PMR</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Kamar Mandi Guru (L)</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Kamar Mandi Guru (P)</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Kamar Mandi Siswa (L)</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">3</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Kamar Mandi Siswa (P)</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">3</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Gudang</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                    <div class="bg-white p-5 rounded-2xl border border-slate-100 shadow-[0_2px_10px_rgba(0,0,0,0.02)] hover:shadow-lg transition-all duration-300 group flex flex-col justify-between ">
                        <div class="flex items-start justify-between gap-3 mb-3">
                            <h3 class="font-bold text-slate-800 leading-snug group-hover:text-primary transition-colors">Ruang Ibadah/Musholla</h3>
                            <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-emerald-50 text-primary flex items-center justify-center flex-shrink-0 font-black shadow-inner border border-emerald-100/50 text-lg sm:text-xl">1</div>
                        </div>
                        <p class="text-[10px] sm:text-xs text-slate-400 font-bold tracking-wider uppercase">Unit Ruangan</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection
