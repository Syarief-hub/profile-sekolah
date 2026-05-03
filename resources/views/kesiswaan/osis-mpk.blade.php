@extends('layouts.public')

@section('title', 'OSIS & MPK | SMA Negeri 1 Suwawa')

@section('content')
    <!-- Premium Inner Page Header -->
    <section class="relative bg-brand-dark pt-32 pb-24 lg:pt-40 lg:pb-32 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2000&auto=format&fit=crop" alt="Campus Background" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-b from-brand-dark via-brand-dark/90 to-brand-dark"></div>
        </div>
        
        <!-- Abstract Decorations -->
        <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary/20 rounded-full blur-3xl z-0 pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-96 h-96 bg-secondary/20 rounded-full blur-3xl z-0 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center gap-3 text-secondary font-bold text-sm tracking-widest uppercase mb-6 px-5 py-2 bg-secondary/10 rounded-full border border-secondary/20 backdrop-blur-md">
               <i class="fa-solid fa-user-group"></i> Kesiswaan
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white leading-tight mb-6 drop-shadow-xl">
                OSIS & MPK
            </h1>
            <p class="text-emerald-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Badan kepengurusan organisasi intra sekolah dan perwakilan kelas di SMA Negeri 1 Suwawa.
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
                            <i class="fa-solid fa-users-viewfinder"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-800 tracking-tight leading-none mb-1">Profil Organisasi</h2>
                            <p class="text-slate-500 text-sm">Organisasi utama siswa di lingkungan sekolah (Sedang dalam pengembangan)</p>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-16 relative z-10 py-4">
                    
                    <!-- Intro OSIS & MPK -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <!-- Card OSIS -->
                        <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-3xl p-8 border border-indigo-100 flex flex-col items-center text-center shadow-sm relative overflow-hidden group hover:shadow-md transition duration-300">
                            <div class="absolute -right-10 -top-10 w-40 h-40 bg-indigo-500/10 rounded-full blur-2xl group-hover:bg-indigo-500/20 transition duration-500"></div>
                            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-md mb-6 relative z-10 text-indigo-600 border border-indigo-50">
                                <i class="fa-solid fa-users-viewfinder text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-800 mb-3 tracking-tight">OSIS SMAN 1 Suwawa</h3>
                            <div class="h-1 w-12 bg-indigo-500 rounded-full mb-4 mx-auto"></div>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6">Organisasi Siswa Intra Sekolah (OSIS) adalah wadah pembinaan generasi muda di lingkungan sekolah untuk mengembangkan potensi, karakter, kepemimpinan, dan kemandirian siswa secara kolektif.</p>
                            <span class="mt-auto px-4 py-1.5 bg-white text-indigo-700 text-xs font-bold rounded-lg border border-indigo-100 shadow-sm uppercase tracking-wider">Eksekutif Siswa</span>
                        </div>
                        
                        <!-- Card MPK -->
                        <div class="bg-gradient-to-br from-purple-50 to-fuchsia-50 rounded-3xl p-8 border border-purple-100 flex flex-col items-center text-center shadow-sm relative overflow-hidden group hover:shadow-md transition duration-300">
                            <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-purple-500/10 rounded-full blur-2xl group-hover:bg-purple-500/20 transition duration-500"></div>
                            <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center shadow-md mb-6 relative z-10 text-purple-600 border border-purple-50">
                                <i class="fa-solid fa-scale-balanced text-4xl"></i>
                            </div>
                            <h3 class="text-2xl font-black text-slate-800 mb-3 tracking-tight">MPK SMAN 1 Suwawa</h3>
                            <div class="h-1 w-12 bg-purple-500 rounded-full mb-4 mx-auto"></div>
                            <p class="text-slate-600 text-sm leading-relaxed mb-6">Majelis Perwakilan Kelas (MPK) merupakan badan legislatif tingkat siswa yang bertugas mengawasi, mengevaluasi, dan menampung aspirasi siswa untuk kemajuan tata kelola berbagai program OSIS.</p>
                            <span class="mt-auto px-4 py-1.5 bg-white text-purple-700 text-xs font-bold rounded-lg border border-purple-100 shadow-sm uppercase tracking-wider">Legislatif Siswa</span>
                        </div>
                    </div>

                    <!-- Visi & Misi -->
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden">
                        <div class="grid grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-2 bg-gradient-to-br from-slate-800 to-slate-900 p-8 md:p-10 text-white flex flex-col justify-center relative overflow-hidden">
                                <i class="fa-solid fa-quote-left py-2 text-8xl absolute top-4 left-6 opacity-10"></i>
                                <div class="relative z-10">
                                    <div class="inline-block px-3 py-1 mb-4 rounded bg-emerald-500/20 text-emerald-400 text-xs font-bold uppercase tracking-widest border border-emerald-500/30">Visi Organisasi</div>
                                    <h3 class="font-bold text-2xl lg:text-3xl leading-snug mb-6">"Menjadikan siswa-siswi SMAN 1 Suwawa berkarakter, inovatif, dan berprestasi berlandaskan IMTAK dan IPTEK."</h3>
                                    <div class="flex items-center gap-4">
                                        <div class="w-12 h-12 bg-slate-700 rounded-full flex items-center justify-center border border-slate-600">
                                            <i class="fa-solid fa-bullseye text-emerald-400"></i>
                                        </div>
                                        <div>
                                            <div class="text-xs text-slate-400 uppercase tracking-widest font-bold">Periode Berjalan</div>
                                            <div class="font-bold">Kepengurusan Aktif</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="md:col-span-3 p-8 md:p-10">
                                <h4 class="font-black text-2xl text-slate-800 mb-6 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded bg-blue-100 text-blue-600 flex items-center justify-center text-sm"><i class="fa-solid fa-list-check"></i></div>
                                    Misi Utama OSIS
                               </h4>
                                <ul class="space-y-4">
                                    <li class="flex gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 transition duration-300 hover:bg-white hover:shadow-sm">
                                        <div class="w-8 h-8 flex-shrink-0 bg-primary/10 text-primary font-bold rounded-full flex items-center justify-center mt-0.5 shadow-sm border border-primary/20">1</div>
                                        <div>
                                            <h5 class="font-bold text-slate-800 mb-1">Meningkatkan Kedisiplinan</h5>
                                            <p class="text-slate-600 text-sm">Menanamkan sikap disiplin dan patuh terhadap tata tertib tertulis maupun tidak tertulis di sekolah.</p>
                                        </div>
                                    </li>
                                    <li class="flex gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 transition duration-300 hover:bg-white hover:shadow-sm">
                                        <div class="w-8 h-8 flex-shrink-0 bg-primary/10 text-primary font-bold rounded-full flex items-center justify-center mt-0.5 shadow-sm border border-primary/20">2</div>
                                        <div>
                                            <h5 class="font-bold text-slate-800 mb-1">Pengembangan Minat Bakat</h5>
                                            <p class="text-slate-600 text-sm">Menyelenggarakan kegiatan ekstrakurikuler serta ajang lomba intern guna memfasilitasi ragam minat dan talenta siswa.</p>
                                        </div>
                                    </li>
                                    <li class="flex gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 transition duration-300 hover:bg-white hover:shadow-sm">
                                        <div class="w-8 h-8 flex-shrink-0 bg-primary/10 text-primary font-bold rounded-full flex items-center justify-center mt-0.5 shadow-sm border border-primary/20">3</div>
                                        <div>
                                            <h5 class="font-bold text-slate-800 mb-1">Kepedulian Sosial & Lingkungan</h5>
                                            <p class="text-slate-600 text-sm">Menumbuhkan kepekaan sosial dan solidaritas antar warga sekolah maupun masyarakat secara umum.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Program Kerja OSIS -->
                    <div>
                        <div class="flex items-center gap-4 mb-8">
                            <h3 class="text-2xl font-black text-slate-800 tracking-tight">Program Kerja Unggulan</h3>
                            <div class="flex-1 h-px bg-slate-200"></div>
                            <span class="text-[10px] sm:text-xs font-bold uppercase tracking-widest text-slate-400 bg-slate-100 px-3 py-1 rounded">Highlight Program</span>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Prog 1 -->
                            <div class="bg-white border border-slate-200 rounded-3xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 relative overflow-hidden group">
                                <div class="absolute inset-x-0 bottom-0 h-1 bg-blue-500 scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-500"></div>
                                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center text-2xl mb-5 shadow-sm border border-blue-100 group-hover:rotate-6 transition duration-300">
                                    <i class="fa-solid fa-trophy"></i>
                                </div>
                                <h4 class="font-bold text-lg text-slate-800 mb-2">Class Meeting & Porseni</h4>
                                <p class="text-slate-500 text-sm line-clamp-3">Ajang kompetisi olahraga dan seni antar kelas rutin yang selalu digemari dan dilaksanakan pasca ujian semester demi memperkokoh ikatan persaudaraan.</p>
                            </div>
                            
                            <!-- Prog 2 -->
                            <div class="bg-white border border-slate-200 rounded-3xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 relative overflow-hidden group">
                                <div class="absolute inset-x-0 bottom-0 h-1 bg-emerald-500 scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-500"></div>
                                <div class="w-14 h-14 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-5 shadow-sm border border-emerald-100 group-hover:rotate-6 transition duration-300">
                                    <i class="fa-solid fa-leaf"></i>
                                </div>
                                <h4 class="font-bold text-lg text-slate-800 mb-2">Gerakan Lingkungan Bersih</h4>
                                <p class="text-slate-500 text-sm line-clamp-3">Program kolaborasi pemeliharaan lingkungan sekolah dengan konsep go-green, mendaur ulang sampah, serta inisiatif memperindah area kelas.</p>
                            </div>

                            <!-- Prog 3 -->
                            <div class="bg-white border border-slate-200 rounded-3xl p-6 hover:shadow-lg hover:-translate-y-1 transition duration-300 relative overflow-hidden group">
                                <div class="absolute inset-x-0 bottom-0 h-1 bg-amber-500 scale-x-0 group-hover:scale-x-100 origin-left transition-transform duration-500"></div>
                                <div class="w-14 h-14 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center text-2xl mb-5 shadow-sm border border-amber-100 group-hover:rotate-6 transition duration-300">
                                    <i class="fa-solid fa-calendar-star"></i>
                                </div>
                                <h4 class="font-bold text-lg text-slate-800 mb-2">Perayaan Hari Besar</h4>
                                <p class="text-slate-500 text-sm line-clamp-3">Penyelenggaraan acara religius & kebangsaan yang atraktif seperti perayaan kemerdekaan 17 Agustus, Sumpah Pemuda, dan kegiatan hari keagamaan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
@endsection
