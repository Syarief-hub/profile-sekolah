<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 glass-effect shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <!-- 
                   Catatan: Pastikan Anda telah meletakkan file logo sekolah 
                   di folder public/images dengan nama logo.png 
                -->
                <img src="{{ asset('images/logo.png') }}" alt="Logo SMAN 1 Suwawa" class="h-10 w-auto object-contain drop-shadow-sm">
                
                <div class="flex flex-col">
                    <span class="font-heading font-bold text-xl text-slate-800 leading-none tracking-tight">SMAN 1</span>
                    <span class="font-bold text-primary text-sm leading-none tracking-widest mt-1">SUWAWA</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center space-x-6 xl:space-x-8 font-medium">
                <a href="{{ url('/') }}" class="text-slate-700 hover:text-primary transition py-2">Beranda</a>
                
                <!-- Dropdown Profil -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="flex items-center gap-1 text-slate-700 group-hover:text-primary transition py-2">
                        Profil <i class="fa-solid fa-chevron-down text-[10px] transition duration-200" :class="open ? 'rotate-180 text-primary' : ''"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div x-show="open" x-transition.opacity class="absolute top-full left-0 w-48 bg-white shadow-xl rounded-b-lg py-2 border border-slate-100 z-50 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('profil.sejarah') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Sejarah</a>
                        <a href="{{ route('profil.visi-misi') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Visi Misi</a>
                        <a href="{{ route('profil.struktur-organisasi') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Struktur Organisasi</a>
                        <a href="{{ route('profil.fasilitas') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Fasilitas</a>
                    </div>
                </div>

                <!-- Dropdown Akademik -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="flex items-center gap-1 text-slate-700 group-hover:text-primary transition py-2">
                        Akademik <i class="fa-solid fa-chevron-down text-[10px] transition duration-200" :class="open ? 'rotate-180 text-primary' : ''"></i>
                    </button>
                    <div x-show="open" x-transition.opacity class="absolute top-full left-0 w-48 bg-white shadow-xl rounded-b-lg py-2 border border-slate-100 z-50 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('akademik.guru-staf') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Guru & Staf</a>
                        <a href="{{ route('akademik.kurikulum') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Kurikulum</a>
                    </div>
                </div>

                <!-- Dropdown Kesiswaan -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="flex items-center gap-1 text-slate-700 group-hover:text-primary transition py-2">
                        Kesiswaan <i class="fa-solid fa-chevron-down text-[10px] transition duration-200" :class="open ? 'rotate-180 text-primary' : ''"></i>
                    </button>
                    <div x-show="open" x-transition.opacity class="absolute top-full left-0 w-48 bg-white shadow-xl rounded-b-lg py-2 border border-slate-100 z-50 ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('kesiswaan.osis-mpk') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">OSIS / MPK</a>
                        <a href="{{ route('kesiswaan.ekstrakurikuler') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Ekstrakurikuler</a>
                        <a href="{{ route('kesiswaan.prestasi') }}" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Prestasi</a>
                    </div>
                </div>

                <!-- Dropdown Layanan -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="flex items-center gap-1 text-slate-700 group-hover:text-primary transition py-2">
                        Layanan <i class="fa-solid fa-chevron-down text-[10px] transition duration-200" :class="open ? 'rotate-180 text-primary' : ''"></i>
                    </button>
                    <div x-show="open" x-transition.opacity class="absolute top-full left-0 w-48 bg-white shadow-xl rounded-b-lg py-2 border border-slate-100 z-50 ring-1 ring-black ring-opacity-5">
                        <a href="#" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">PPDB Online</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-slate-600 hover:bg-emerald-50 hover:text-primary hover:font-semibold transition">Download Center</a>
                    </div>
                </div>
                
                <!-- CTA Portal Login -->
                <a href="{{ route('login') }}" class="bg-primary hover:bg-emerald-700 text-white px-6 py-2.5 rounded-full font-semibold transition flex items-center gap-2 text-sm shadow-[0_4px_10px_rgba(5,150,105,0.3)] ml-2 border border-emerald-600 lg:px-6">
                    <i class="fa-solid fa-right-to-bracket text-emerald-100"></i> Login
                </a>
            </nav>

            <!-- Mobile Menu Toggle Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden text-2xl text-slate-700 focus:outline-none w-10 h-10 flex items-center justify-center rounded hover:bg-slate-100">
                <i class="fa-solid fa-bars" x-show="!mobileMenuOpen"></i>
                <i class="fa-solid fa-xmark text-red-500" x-show="mobileMenuOpen" x-cloak style="display: none;"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Canvas -->
    <div x-show="mobileMenuOpen" x-transition.origin.top class="lg:hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-slate-100 py-4 px-4 flex flex-col h-auto max-h-[85vh] overflow-y-auto" x-cloak style="display: none;">
        <a href="{{ url('/') }}" class="py-3 font-medium text-slate-800 border-b border-slate-100 pl-2">Beranda</a>
        
        <!-- Accordion Profil -->
        <div x-data="{ expanded: false }" class="border-b border-slate-100">
            <button @click="expanded = !expanded" class="w-full text-left py-3 font-medium text-slate-800 flex justify-between items-center pl-2">
                <span :class="expanded ? 'text-primary' : ''">Profil</span> 
                <i class="fa-solid fa-chevron-down text-xs transition" :class="expanded ? 'rotate-180 text-primary' : ''"></i>
            </button>
            <div x-show="expanded" class="pl-4 pb-3 flex flex-col gap-1 text-sm text-slate-600" style="display: none;">
                <a href="{{ route('profil.sejarah') }}" class="hover:text-primary py-1 block">Sejarah</a>
                <a href="{{ route('profil.visi-misi') }}" class="hover:text-primary py-1 block">Visi Misi</a>
                <a href="{{ route('profil.struktur-organisasi') }}" class="hover:text-primary py-1 block">Struktur Organisasi</a>
                <a href="{{ route('profil.fasilitas') }}" class="hover:text-primary py-1 block">Fasilitas</a>
            </div>
        </div>

        <!-- Accordion Akademik -->
        <div x-data="{ expanded: false }" class="border-b border-slate-100">
            <button @click="expanded = !expanded" class="w-full text-left py-3 font-medium text-slate-800 flex justify-between items-center pl-2">
                <span :class="expanded ? 'text-primary' : ''">Akademik</span> 
                <i class="fa-solid fa-chevron-down text-xs transition" :class="expanded ? 'rotate-180 text-primary' : ''"></i>
            </button>
            <div x-show="expanded" class="pl-4 pb-3 flex flex-col gap-1 text-sm text-slate-600" style="display: none;">
                <a href="{{ route('akademik.guru-staf') }}" class="hover:text-primary py-1 block">Guru & Staf</a>
                <a href="{{ route('akademik.kurikulum') }}" class="hover:text-primary py-1 block">Kurikulum</a>
            </div>
        </div>

        <!-- Accordion Kesiswaan -->
        <div x-data="{ expanded: false }" class="border-b border-slate-100">
            <button @click="expanded = !expanded" class="w-full text-left py-3 font-medium text-slate-800 flex justify-between items-center pl-2">
                <span :class="expanded ? 'text-primary' : ''">Kesiswaan</span> 
                <i class="fa-solid fa-chevron-down text-xs transition" :class="expanded ? 'rotate-180 text-primary' : ''"></i>
            </button>
            <div x-show="expanded" class="pl-4 pb-3 flex flex-col gap-1 text-sm text-slate-600" style="display: none;">
                <a href="{{ route('kesiswaan.osis-mpk') }}" class="hover:text-primary py-1 block">OSIS / MPK</a>
                <a href="{{ route('kesiswaan.ekstrakurikuler') }}" class="hover:text-primary py-1 block">Ekstrakurikuler</a>
                <a href="{{ route('kesiswaan.prestasi') }}" class="hover:text-primary py-1 block">Prestasi</a>
            </div>
        </div>

        <!-- Accordion Layanan -->
        <div x-data="{ expanded: false }" class="border-b border-slate-100">
            <button @click="expanded = !expanded" class="w-full text-left py-3 font-medium text-slate-800 flex justify-between items-center pl-2">
                <span :class="expanded ? 'text-primary' : ''">Layanan</span> 
                <i class="fa-solid fa-chevron-down text-xs transition" :class="expanded ? 'rotate-180 text-primary' : ''"></i>
            </button>
            <div x-show="expanded" class="pl-4 pb-3 flex flex-col gap-1 text-sm text-slate-600" style="display: none;">
                <a href="#" class="hover:text-primary py-1 block">PPDB Online</a>
                <a href="#" class="hover:text-primary py-1 block">Download Center</a>
            </div>
        </div>

        <div class="mt-6 mb-2 flex flex-col gap-3">
            <a href="{{ route('login') }}" class="w-full bg-primary hover:bg-emerald-700 text-white text-center py-3 rounded-xl font-semibold transition border border-emerald-600 flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-to-bracket"></i> Login
            </a>
        </div>
    </div>
</header>
