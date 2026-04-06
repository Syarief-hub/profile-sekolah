@extends('layouts.public')

@section('title', 'Kurikulum | SMA Negeri 1 Suwawa')

@section('content')
    <!-- Page Header -->
    <section class="relative bg-brand-dark py-20 lg:py-28 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=2000&auto=format&fit=crop" alt="Background Kurikulum" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div class="inline-flex items-center justify-center gap-3 text-primary font-bold text-sm tracking-widest uppercase mb-4">
                <span class="w-10 h-0.5 bg-primary rounded-full"></span> Akademik <span class="w-10 h-0.5 bg-primary rounded-full"></span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-black text-white leading-tight mb-6 drop-shadow-md">
                Kurikulum
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Struktur program pembelajaran di SMA Negeri 1 Suwawa.
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
                            <i class="fa-solid fa-book-open"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-800 tracking-tight leading-none mb-1">Informasi Kurikulum</h2>
                            <p class="text-slate-500 text-sm">Informasi struktur dan penerapan kurikulum sekolah (Sedang dalam pengembangan)</p>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-12 relative z-10 py-4">
                    
                    <!-- Intro Kurikulum -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100 rounded-3xl p-8 md:p-10 relative overflow-hidden group">
                        <!-- Ornamen / Dekorasi -->
                        <div class="absolute -right-8 -top-8 w-40 h-40 bg-blue-500/10 rounded-full blur-2xl group-hover:scale-110 transition-transform duration-700"></div>
                        <div class="absolute right-20 -bottom-10 w-32 h-32 bg-indigo-500/10 rounded-full blur-xl group-hover:scale-110 transition-transform duration-700 delay-100"></div>
                        
                        <div class="flex flex-col md:flex-row gap-8 items-center relative z-10">
                            <div class="w-32 h-32 flex-shrink-0 bg-white rounded-[2rem] shadow-sm flex items-center justify-center border border-white relative group-hover:-translate-y-2 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-tr from-blue-100 to-indigo-50 rounded-[2rem] transform -rotate-6 group-hover:rotate-0 transition-transform duration-500"></div>
                                <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center text-blue-600 text-4xl shadow-sm relative z-10">
                                    <i class="fa-solid fa-book-bookmark"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-black text-2xl md:text-3xl text-slate-800 mb-3 tracking-tight">Menerapkan <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Kurikulum Merdeka</span></h3>
                                <p class="text-slate-600 leading-relaxed text-sm lg:text-base">
                                    SMA Negeri 1 Suwawa telah menerapkan <strong>Kurikulum Merdeka</strong> penuh. Kami memberikan kebebasan kepada peserta didik untuk memilih mata pelajaran mendalam sesuai dengan minat, bakat, dan aspirasi akademis mereka, sembari berfokus pada asimilasi materi esensial dan pengembangan karakter <b>Profil Pelajar Pancasila</b>.
                                </p>
                                <div class="mt-6 flex flex-wrap gap-3 text-xs md:text-sm font-bold">
                                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-white text-blue-700 rounded-lg shadow-sm border border-blue-100"><i class="fa-solid fa-check-circle text-emerald-500"></i> Fokus Esensial</span>
                                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-white text-blue-700 rounded-lg shadow-sm border border-blue-100"><i class="fa-solid fa-check-circle text-emerald-500"></i> Pengembangan Karakter</span>
                                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-white text-blue-700 rounded-lg shadow-sm border border-blue-100"><i class="fa-solid fa-check-circle text-emerald-500"></i> Mandiri & Fleksibel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Struktur Kurikulum -->
                    <div>
                        <div class="inline-flex items-center gap-4 mb-6 relative">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl shadow-sm border border-emerald-100">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <div>
                                <h3 class="text-2xl font-black text-slate-800 tracking-tight">Struktur Kurikulum</h3>
                                <div class="h-1 w-12 bg-emerald-500 rounded-full mt-1"></div>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                            <!-- Fase E -->
                            <div class="bg-white border border-slate-100 shadow-sm rounded-3xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                                <div class="bg-gradient-to-r from-emerald-500 to-teal-600 p-6 text-white relative overflow-hidden">
                                    <i class="fa-solid fa-seedling absolute -right-4 -bottom-4 text-7xl opacity-20 transform -rotate-12 group-hover:scale-110 transition-transform duration-500"></i>
                                    <h4 class="font-black text-2xl relative z-10">Fase E</h4>
                                    <p class="text-emerald-50 text-sm font-medium mt-1 relative z-10 flex items-center gap-2">
                                        <i class="fa-solid fa-chalkboard-user"></i> Diterapkan di Kelas X Umum
                                    </p>
                                </div>
                                <div class="p-8">
                                    <p class="text-slate-500 text-sm mb-6 leading-relaxed bg-slate-50 p-4 rounded-xl border border-slate-100">
                                        Peserta didik mengambil <b>seluruh mata pelajaran wajib</b>. Di jenjang ini, peserta didik diarahkan untuk mengenali minat dan bakatnya sebelum menetapkan pilihan vokasional di Fase F.
                                    </p>
                                    <h5 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">Muatan Pelajaran</h5>
                                    <ul class="space-y-3 text-sm font-semibold text-slate-700">
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-check text-xs"></i></div> Pendidikan Agama dan Budi Pekerti</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-check text-xs"></i></div> Pendidikan Pancasila</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-check text-xs"></i></div> Bahasa Indonesia, Matematika, B. Inggris</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-check text-xs"></i></div> IPA (Fisika, Kimia, Biologi)</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-check text-xs"></i></div> IPS (Sosiologi, Ekonomi, Sejarah, Geografi)</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-check text-xs"></i></div> PJOK & Seni Budaya / Keterampilan</li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Fase F -->
                            <div class="bg-white border border-slate-100 shadow-sm rounded-3xl overflow-hidden hover:shadow-lg hover:-translate-y-1 transition-all duration-300 group">
                                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-6 text-white relative overflow-hidden">
                                    <i class="fa-solid fa-graduation-cap absolute -right-4 -bottom-4 text-7xl opacity-20 transform -rotate-12 group-hover:scale-110 transition-transform duration-500"></i>
                                    <h4 class="font-black text-2xl relative z-10">Fase F</h4>
                                    <p class="text-blue-100 text-sm font-medium mt-1 relative z-10 flex items-center gap-2">
                                        <i class="fa-solid fa-user-graduate"></i> Diterapkan di Kelas XI & XII
                                    </p>
                                </div>
                                <div class="p-8">
                                    <p class="text-slate-500 text-sm mb-6 leading-relaxed bg-slate-50 p-4 rounded-xl border border-slate-100">
                                        Peserta didik <b>memilih mata pelajaran penjurusan</b> sesuai gaya belajar, minat, dan studi lanjut. Kami menghilangkan sekat kaku pengotakan (tidak lagi hanya IPA / IPS).
                                    </p>
                                    <h5 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-3">Kelompok Pelajaran</h5>
                                    <ul class="space-y-3 text-sm font-semibold text-slate-700">
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-briefcase text-xs"></i></div> Kelompok Umum (Dasar Wajib)</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-flask text-xs"></i></div> Kelompok MIPA (Matematika Lanjut, Kimia Organik)</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-earth-americas text-xs"></i></div> Kelompok IPS (Sosiologi Terapan, Geospasial)</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-language text-xs"></i></div> Kelompok Bahasa dan Budaya</li>
                                        <li class="flex items-start gap-3"><div class="w-6 h-6 rounded-full bg-blue-50 flex items-center justify-center text-blue-500 flex-shrink-0 mt-0.5"><i class="fa-solid fa-laptop-code text-xs"></i></div> Kelompok Vokasi & Prakarya (Kewirausahaan IT)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- P5 (Projek Penguatan Profil Pelajar Pancasila) -->
                    <div class="mt-8">
                        <div class="bg-white border border-slate-200 rounded-3xl p-6 md:p-10 flex flex-col md:flex-row gap-10 items-center justify-between shadow-sm relative overflow-hidden group">
                            <!-- Aksen ornamen -->
                            <div class="absolute right-0 top-0 w-32 h-full bg-gradient-to-l from-amber-50 to-transparent"></div>
                            
                            <div class="flex-1 relative z-10 w-full">
                                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 mb-5 rounded-lg bg-amber-50 text-amber-600 border border-amber-200 text-xs font-bold tracking-widest uppercase">
                                    <i class="fa-solid fa-hands-holding-child"></i> Project-based Learning
                                </div>
                                <h4 class="font-black text-2xl md:text-3xl text-slate-800 mb-4 tracking-tight">Projek Penguatan <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-500 to-orange-500">Profil Pelajar Pancasila (P5)</span></h4>
                                <p class="text-slate-500 text-sm md:text-base leading-relaxed mb-6">Sebagai inti dari Kurikulum Merdeka, sekolah kami menyelenggarakan kegiatan kokurikuler khusus P5 yang memakan alokasi waktu hingga 30% per semester. Siswa diajarkan menuntaskan persoalan nyata melalui projek lintas disiplin ilmu.</p>
                                
                                <!-- Tags P5 Tema -->
                                <div class="flex flex-wrap gap-2 text-[11px] md:text-xs font-bold text-slate-600">
                                    <span class="px-4 py-2 rounded-full border border-slate-200 bg-slate-50 shadow-sm hover:border-amber-300 hover:bg-amber-50 transition cursor-default">#GayaHidupBerkelanjutan</span>
                                    <span class="px-4 py-2 rounded-full border border-slate-200 bg-slate-50 shadow-sm hover:border-amber-300 hover:bg-amber-50 transition cursor-default">#KearifanLokal</span>
                                    <span class="px-4 py-2 rounded-full border border-slate-200 bg-slate-50 shadow-sm hover:border-amber-300 hover:bg-amber-50 transition cursor-default">#BhinnekaTunggalIka</span>
                                    <span class="px-4 py-2 rounded-full border border-slate-200 bg-slate-50 shadow-sm hover:border-amber-300 hover:bg-amber-50 transition cursor-default">#BangunlahJiwaRaganya</span>
                                    <span class="px-4 py-2 rounded-full border border-slate-200 bg-slate-50 shadow-sm hover:border-amber-300 hover:bg-amber-50 transition cursor-default">#SuaraDemokrasi</span>
                                </div>
                            </div>
                            <div class="w-full md:w-2/5 flex-shrink-0 relative z-10">
                                <div class="aspect-square md:aspect-[4/3] rounded-2xl bg-slate-100 overflow-hidden relative shadow-lg group-hover:shadow-xl transition-shadow duration-500">
                                    <!-- Image (placeholder, can substitute with real school doc later) -->
                                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Siswa Belajar">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent"></div>
                                    <div class="absolute bottom-6 left-6 right-6">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center text-white shadow-lg border-2 border-white/50">
                                                <i class="fa-solid fa-leaf"></i>
                                            </div>
                                            <div class="text-white">
                                                <div class="font-bold text-sm">Gelar Karya (Panen Hasil)</div>
                                                <div class="text-white/80 text-xs">Pameran Tahunan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
@endsection
