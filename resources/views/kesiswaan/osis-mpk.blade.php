@extends('layouts.public')

@section('title', 'OSIS & MPK | SMA Negeri 1 Suwawa')

@section('content')
    <!-- Page Header -->
    <section class="relative bg-brand-dark py-20 lg:py-28 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2000&auto=format&fit=crop" alt="Background OSIS MPK" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                <span class="w-10 h-0.5 bg-primary rounded-full"></span> Kesiswaan <span class="w-10 h-0.5 bg-primary rounded-full"></span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-black text-white leading-tight mb-6 drop-shadow-md">
                OSIS & MPK
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Organisasi Siswa Intra Sekolah dan Majelis Perwakilan Kelas SMA Negeri 1 Suwawa.
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
                            <i class="fa-solid fa-users-viewfinder"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-800 tracking-tight leading-none mb-1">Profil Organisasi</h2>
                            <p class="text-slate-500 text-sm">Organisasi utama siswa di lingkungan sekolah (Sedang dalam pengembangan)</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative z-10 text-center py-16 px-4 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                    <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-slate-400 text-3xl mx-auto mb-6 shadow-sm border border-slate-100">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-700 mb-2">Data Pengurus Belum Tersedia</h3>
                    <p class="text-slate-500 max-w-md mx-auto mb-8">Informasi visi misi, struktur kepengurusan, dan program kerja OSIS/MPK sedang disusun. Silakan hubungi admin untuk memperbarui informasi ini.</p>
                </div>
                
            </div>
            
        </div>
    </section>
@endsection
