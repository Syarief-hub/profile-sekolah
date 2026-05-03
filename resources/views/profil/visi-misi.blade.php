@extends('layouts.public')

@section('title', 'Visi & Misi | SMA Negeri 1 Suwawa')

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
               <i class="fa-solid fa-bullseye"></i> Profil SMAN 1 Suwawa
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white leading-tight mb-6 drop-shadow-xl">
                Visi, Misi & Tujuan
            </h1>
            <p class="text-emerald-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Arah, cita-cita strategis, dan dedikasi luhur pendidikan berkelanjutan di SMA Negeri 1 Suwawa.
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
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Visi Section -->
            <div class="bg-emerald-50 rounded-[2.5rem] shadow-xl shadow-primary/5 border-[8px] border-white p-8 md:p-12 mb-16 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4 group-hover:bg-primary/10 transition duration-700"></div>
                
                <div class="flex items-center gap-4 mb-8 relative z-10">
                    <div class="w-14 h-14 bg-emerald-50 text-primary rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-emerald-100">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                    <h2 class="text-3xl font-heading font-black text-slate-800 tracking-tight">Visi Sekolah</h2>
                </div>
                
                <div class="relative z-10">
                    <p class="text-slate-600 text-lg leading-relaxed text-justify mb-8">
                        Perkembangan dan tantangan masa depan seperti perkembangan ilmu pengetahuan dan teknologi, globalisasi yang sangat cepat, era informasi dan budaya kesadaran masyarakat dan orang tua terhadap pendidikan memicu sekolah untuk merespon tantangan sekaligus peluang itu. SMA Negeri 1 Suwawa memiliki citra moral yang menggambarkan profil sekolah yang diinginkan dimasa depan yang diwujudkan dalam visi sekolah sebagai berikut :
                    </p>
                    
                    <blockquote class="bg-white border-l-4 border-primary p-6 md:p-8 rounded-r-3xl rounded-bl-3xl italic text-xl md:text-3xl font-heading font-bold text-slate-800 text-center leading-snug shadow-sm relative mt-8 mb-8">
                        <i class="fa-solid fa-quote-left absolute top-4 left-4 text-slate-200 text-3xl"></i>
                        "Mewujudkan Peserta Didik yang Cerdas, Unggul, dan Berbudaya Lingkungan"
                        <i class="fa-solid fa-quote-right absolute bottom-4 right-4 text-slate-200 text-3xl"></i>
                    </blockquote>
                    
                    <p class="text-slate-600 text-lg leading-relaxed text-justify mt-8">
                        Visi tersebut mencerminkan cita-cita sekolah yang berorientasi ke depan dengan memperhatikan potensi kekinian, sesuai dengan norma dan harapan masyarakat. Untuk mewujudkan, sekolah menentukan langkah-langkah strategis yang dinyatakan dalam Misi berikut:
                    </p>
                </div>
            </div>

            <!-- Misi Section -->
            <div class="mb-16">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-14 h-14 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-green-100">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h2 class="text-3xl font-heading font-black text-slate-800 tracking-tight">Misi Sekolah</h2>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
                    <!-- Point 1: Cerdas -->
                    <div class="bg-white rounded-[2rem] p-8 shadow-sm border-[4px] border-emerald-50 hover:shadow-xl hover:shadow-primary/5 hover:-translate-y-2 transition duration-300 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-primary/5 rounded-full blur-2xl -translate-y-1/2 translate-x-1/4 group-hover:bg-primary/10 transition duration-700"></div>
                        <h3 class="text-2xl font-bold text-primary font-heading mb-6 relative inline-block">
                            "Cerdas"
                            <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-secondary rounded-full"></span>
                        </h3>
                        <ul class="space-y-4 text-slate-600">
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-emerald-50 text-primary flex items-center justify-center text-xs font-bold mt-0.5">1</span>
                                <span class="leading-relaxed">Menciptakan suasana religius di sekolah melalui kegiatan keagamaan.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-emerald-50 text-primary flex items-center justify-center text-xs font-bold mt-0.5">2</span>
                                <span class="leading-relaxed">Melaksanakan kegiatan belajar mengajar yang berorientasi pada peningkatan kemampuan dan kompetensi peserta didik.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-emerald-50 text-primary flex items-center justify-center text-xs font-bold mt-0.5">3</span>
                                <span class="leading-relaxed">Membentuk peserta didik yang sadar pentingnya ilmu pengetahuan dan teknologi yang berlandaskan nilai spiritual dan sosial.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-emerald-50 text-primary flex items-center justify-center text-xs font-bold mt-0.5">4</span>
                                <span class="leading-relaxed">Meningkatkan pendidikan karakter bangsa melalui implementasi penguatan pendidikan karakter.</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Point 2: Unggul -->
                    <div class="bg-white rounded-[2rem] p-8 shadow-sm border-[4px] border-green-50 hover:shadow-xl hover:shadow-green-500/5 hover:-translate-y-2 transition duration-300 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-green-500/5 rounded-full blur-2xl -translate-y-1/2 translate-x-1/4 group-hover:bg-green-500/10 transition duration-700"></div>
                        <h3 class="text-2xl font-bold text-green-600 font-heading mb-6 relative inline-block">
                            "Unggul"
                            <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-secondary rounded-full"></span>
                        </h3>
                        <ul class="space-y-4 text-slate-600">
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs font-bold mt-0.5">1</span>
                                <span class="leading-relaxed">Mengembangkan sistem kelembagaan, organisasi, manajemen, administrasi, budaya kerja sinergis, serta pengembangan SDM warga sekolah.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs font-bold mt-0.5">2</span>
                                <span class="leading-relaxed">Melakukan pembiasaan, pengembangan dan pembelajaran penumbuhan budaya literasi sekolah.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-green-50 text-green-600 flex items-center justify-center text-xs font-bold mt-0.5">3</span>
                                <span class="leading-relaxed">Melakukan kerjasama dengan pihak-pihak tertentu dalam rangka layanan kegiatan ekstrakurikuler.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Point 3: Berbudaya Lingkungan -->
                    <div class="bg-white rounded-[2rem] p-8 shadow-sm border-[4px] border-purple-50 hover:shadow-xl hover:shadow-purple-500/5 hover:-translate-y-2 transition duration-300 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/5 rounded-full blur-2xl -translate-y-1/2 translate-x-1/4 group-hover:bg-purple-500/10 transition duration-700"></div>
                        <h3 class="text-2xl font-bold text-purple-600 font-heading mb-6 relative inline-block">
                            "Berbudaya Lingkungan"
                            <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-secondary rounded-full"></span>
                        </h3>
                        <ul class="space-y-4 text-slate-600">
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center text-xs font-bold mt-0.5">1</span>
                                <span class="leading-relaxed">Menciptakan lingkungan sekolah sebagai media yang dapat menjunjung proses pembelajaran dengan pendekatan saintifik.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center text-xs font-bold mt-0.5">2</span>
                                <span class="leading-relaxed">Melakukan program pengembangan diri melalui bimbingan konseling dan ekstrakurikuler.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center text-xs font-bold mt-0.5">3</span>
                                <span class="leading-relaxed">Melakukan pembinaan dan pengembangan kemampuan peserta didik dalam melestarikan lingkungan, kearifan lokal dan nasional.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center text-xs font-bold mt-0.5">4</span>
                                <span class="leading-relaxed">Melakukan pembinaan dan pembiasaan setiap warga sekolah tentang new normal pada masa transisi covid-19 melalui penerapan pola hidup bersih dan sehat.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tujuan Section -->
            <div class="bg-emerald-50 rounded-[2.5rem] shadow-xl shadow-primary/5 border-[8px] border-white p-8 md:p-12 mb-16 relative overflow-hidden group">
                <div class="absolute bottom-0 right-0 w-80 h-80 bg-secondary/5 rounded-full blur-3xl translate-y-1/2 translate-x-1/4 group-hover:bg-secondary/10 transition duration-700"></div>
                
                <div class="flex items-center gap-4 mb-8 relative z-10">
                    <div class="w-14 h-14 bg-yellow-50 text-secondary rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-yellow-100">
                        <i class="fa-solid fa-flag-checkered"></i>
                    </div>
                    <h2 class="text-3xl font-heading font-black text-slate-800 tracking-tight">Tujuan Sekolah</h2>
                </div>
                
                <div class="relative z-10">
                    <p class="text-slate-600 text-lg leading-relaxed text-justify mb-8">
                        Tujuan SMA Negeri 1 Suwawa sebagai bagian dari tujuan pendidikan nasional adalah meningkatkan kecerdasan, pengetahuan, kepribadian, akhlak mulia, serta keterampilan untuk hidup mandiri dan mengikuti pendidikan lebih lanjut.
                        <br><br>
                        Secara lebih rinci tujuan SMA Negeri 1 Suwawa adalah sebagai berikut :
                    </p>
                    
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6 text-slate-600">
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">1</span>
                            <span class="leading-relaxed">Terbentuknya lulusan yang meyadari pentingnya ilmu pengetahuan dan teknologi yang berlandaskan nilai spiritual dan sosial.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">2</span>
                            <span class="leading-relaxed">Terciptanya suasana religius melalui kegiatan keagamaan.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">3</span>
                            <span class="leading-relaxed">Terciptanya proses mendidik peserta didik agar memiliki kemampuan 4C (Creative, Critical Thinking, Communicative dan Collaborative).</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">4</span>
                            <span class="leading-relaxed">Terlaksananya proses pendidikan dengan karakter bangsa melalui implementasi penguatan pendidikan karakter.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">5</span>
                            <span class="leading-relaxed">Terciptanya lingkungan sekolah sebagai media yang dapat menjunjung proses pembelajaran dengan pendekatan ilmiah dan penilaian autentik.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">6</span>
                            <span class="leading-relaxed">Terlaksananya sistem kelembagaan, organisasi, manajemen, administrasi, budaya kerja sinergis, serta pengembangan SDM warga sekolah dalam rangka peningkatkan mutu layanan pendidikan.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">7</span>
                            <span class="leading-relaxed">Meningkatnya program pengembangan diri kepramukaan.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">8</span>
                            <span class="leading-relaxed">Terciptanya proses pembinaan dan pengembangan kemampuan peserta didik dalam melestarikan kearifan lokal dan nasional.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">9</span>
                            <span class="leading-relaxed">Terciptanya lingkungan sekolah bersih dan sehat yang dicintai dan dimanfaatkan untuk menunjang pelaksanaan layanan pendidikan.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">10</span>
                            <span class="leading-relaxed">Terciptanya proses pembiasaan, pengembangan dan pembelajaran penumbuhan budaya literasi sekolah.</span>
                        </li>
                        <li class="flex items-start gap-4 break-inside-avoid">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-slate-100 text-slate-500 border border-slate-200 flex items-center justify-center text-sm font-bold mt-0.5 font-heading">11</span>
                            <span class="leading-relaxed">Terselenggaranya kerjasama dengan pihak-pihak tertentu dalam rangka layanan kegiatan akademik dan non akademik.</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
@endsection
