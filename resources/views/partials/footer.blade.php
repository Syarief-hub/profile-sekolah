<!-- Pre-Footer CTA -->
<div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mb-16">
    <div class="bg-primary rounded-2xl p-8 md:p-10 shadow-2xl flex flex-col lg:flex-row items-center justify-between gap-8 border-b-8 border-secondary">
        <div class="max-w-3xl text-center lg:text-left">
            <h3 class="text-2xl md:text-3xl lg:text-4xl font-heading font-black text-white leading-tight mb-2">Kenali Lebih Bangga SMAN 1 Suwawa</h3>
            <p class="text-emerald-50 text-sm md:text-base font-medium">Pelajari lebih dalam mengenai sejarah berdiri, visi, misi, dan dedikasi institusi kami.</p>
        </div>
        <div class="shrink-0 flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
            <a href="{{ route('profil.sejarah') }}" class="bg-brand-dark text-white hover:bg-secondary px-6 py-3.5 rounded-xl font-bold shadow-lg transition flex items-center justify-center gap-2 whitespace-nowrap">
                <i class="fa-solid fa-clock-rotate-left"></i> Sejarah
            </a>
            <a href="{{ route('profil.visi-misi') }}" class="bg-white text-brand-dark hover:bg-emerald-50 px-6 py-3.5 rounded-xl font-bold shadow-lg transition flex items-center justify-center gap-2 whitespace-nowrap">
                <i class="fa-solid fa-bullseye"></i> Visi Misi
            </a>
        </div>
    </div>
</div>

<footer class="bg-[#011c15] text-slate-300 pt-32 pb-8 border-t border-brand-dark mt-auto relative">
    <!-- Abstract wavy shapes behind footer -->
    <div class="absolute inset-0 opacity-5 pointer-events-none overflow-hidden">
        <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg" class="absolute -right-1/4 bottom-0 w-full h-full">
            <path fill="#ffffff" d="M438.5,302Q534,222,637.5,273.5Q741,325,765.5,435.5Q790,546,711.5,630.5Q633,715,526,750.5Q419,786,322,727Q225,668,171.5,561.5Q118,455,183.5,357Q249,259,343,382Q438.5,302Z" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 mb-16">
            
            <!-- Kolom 1: Deskripsi Sekolah (Span 4 cols) -->
            <div class="lg:col-span-4 pr-0 lg:pr-8">
                <div class="flex items-center gap-3 mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo SMAN 1 Suwawa" class="h-12 w-auto object-contain">
                    <div class="flex flex-col">
                        <span class="font-heading font-black text-2xl text-white leading-none tracking-tight">SMAN 1</span>
                        <span class="font-bold text-slate-500 text-xs leading-none tracking-widest mt-1">SUWAWA</span>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="inline-block px-3 py-1 bg-white/10 text-emerald-400 text-xs font-bold rounded-full border border-white/5 tracking-wider">NPSN: 40500897</span>
                </div>
                <p class="text-sm text-slate-400 leading-relaxed mb-8 block font-medium">
                    Sekolah rujukan pencetak generasi unggul, berprestasi, berakhlak mulia, dan berwawasan global yang tanggap terhadap tuntutan kompetensi abad 21.
                </p>
                <!-- Social Media -->
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 rounded bg-white/5 flex items-center justify-center text-slate-300 hover:bg-primary hover:text-white transition"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="w-10 h-10 rounded bg-white/5 flex items-center justify-center text-slate-300 hover:bg-primary hover:text-white transition"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="w-10 h-10 rounded bg-white/5 flex items-center justify-center text-slate-300 hover:bg-primary hover:text-white transition"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="w-10 h-10 rounded bg-white/5 flex items-center justify-center text-slate-300 hover:bg-primary hover:text-white transition"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <!-- Kolom 2: Link Cepat (Span 3 cols) -->
            <div class="lg:col-span-2 text-sm">
                <h4 class="text-white font-bold font-heading mb-6 tracking-wide text-lg relative inline-block">
                    Navigasi
                    <span class="absolute -bottom-2 left-0 w-1/2 h-0.5 bg-primary"></span>
                </h4>
                <ul class="space-y-3 text-slate-400 font-medium">
                    <li><a href="{{ route('profil.sejarah') }}" class="hover:text-primary transition flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-primary"></i> Profil Sekolah</a></li>
                    <li><a href="{{ route('akademik.kurikulum') }}" class="hover:text-primary transition flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-primary"></i> Program Studi</a></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-primary transition flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-primary"></i> Info Berita</a></li>
                    <li><a href="{{ route('kesiswaan.ekstrakurikuler') }}" class="hover:text-primary transition flex items-center gap-2"><i class="fa-solid fa-chevron-right text-[10px] text-primary"></i> Kesiswaan</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Kontak (Span 3 cols) -->
            <div class="lg:col-span-3 text-sm">
                <h4 class="text-white font-bold font-heading mb-6 tracking-wide text-lg relative inline-block">
                    Hubungi Kami
                    <span class="absolute -bottom-2 left-0 w-1/2 h-0.5 bg-primary"></span>
                </h4>
                <ul class="space-y-4 text-slate-400 font-medium">
                    <li class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-location-dot text-primary text-xs"></i>
                        </div>
                        <span class="leading-relaxed mt-1">Jl. Pasar Minggu, Tingkohubu Timur, Kec. Suwawa, Kab. Bone Bolango, Prov. Gorontalo 96184</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-phone text-primary text-xs"></i>
                        </div>
                        <span class="hover:text-primary transition">(0435) 8591620</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center shrink-0">
                            <i class="fa-solid fa-envelope text-primary text-xs"></i>
                        </div>
                        <span class="hover:text-primary cursor-pointer transition truncate">info@sman1suwawa.sch.id</span>
                    </li>
                </ul>
            </div>

            <!-- Kolom 4: Lokasi Maps (Span 3 cols) -->
            <div class="lg:col-span-3">
                <h4 class="text-white font-bold font-heading mb-6 tracking-wide text-lg relative inline-block">
                    Lokasi
                    <span class="absolute -bottom-2 left-0 w-1/2 h-0.5 bg-primary"></span>
                </h4>
                <div class="w-full h-40 bg-brand-dark rounded-xl overflow-hidden border-2 border-white/5">
                    <iframe src="https://maps.google.com/maps?q=SMAN%201%20Suwawa,%20Bone%20Bolango,%20Gorontalo&t=&z=14&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
        </div>

        <!-- Copyright -->
        <div class="border-t border-brand-dark pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-slate-500 font-medium">
            <p>&copy; {{ date('Y') }} SMAN 1 Suwawa. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="#" class="hover:text-white transition">Terms & Conditions</a>
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>
