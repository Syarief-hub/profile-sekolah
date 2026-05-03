<nav x-data="{ mobileMenuOpen: false }" class="shrink-0">
    
    <!-- Mobile Menu Button (Fixed Top Left) -->
    <div class="lg:hidden fixed top-5 left-4 z-50">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="w-10 h-10 rounded-xl bg-white/90 backdrop-blur-md shadow-lg border border-slate-200 flex items-center justify-center text-slate-700 hover:text-primary hover:bg-white transition-all">
            <i class="fa-solid fa-bars text-lg" x-show="!mobileMenuOpen"></i>
            <i class="fa-solid fa-xmark text-lg" x-show="mobileMenuOpen" x-cloak></i>
        </button>
    </div>

    <!-- Backdrop for Mobile -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 lg:hidden"
         @click="mobileMenuOpen = false">
    </div>

    <!-- Sidebar Container -->
    <div :class="mobileMenuOpen ? 'translate-x-0' : '-translate-x-full'"
         class="fixed inset-y-0 left-0 z-40 w-[280px] lg:w-72 transition-transform duration-300 ease-in-out lg:translate-x-0">
         
        <!-- The Floating Glassmorphism Panel -->
        <div class="h-full py-4 lg:py-6 pl-4 lg:pl-6 pr-0 lg:pr-6 flex flex-col">
            <div class="flex-1 bg-white/80 backdrop-blur-2xl rounded-3xl lg:border border-white/60 shadow-[0_8px_30px_rgb(0,0,0,0.04)] overflow-hidden flex flex-col relative before:absolute before:inset-0 before:bg-gradient-to-br before:from-white/40 before:to-transparent before:pointer-events-none">
                
                <!-- Logo Area -->
                <div class="p-6 lg:p-8 flex items-center justify-center relative z-10">
                    <a href="{{ route('dashboard') }}" class="group flex flex-col items-center gap-3">
                        <div class="w-14 h-14 bg-gradient-to-br from-primary to-emerald-800 rounded-2xl shadow-lg shadow-primary/30 flex items-center justify-center text-white text-2xl group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 relative overflow-hidden">
                            <i class="fa-solid fa-graduation-cap relative z-10"></i>
                            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20 hidden group-hover:block mix-blend-overlay"></div>
                        </div>
                        <div class="text-center">
                            <div class="font-extrabold text-xl tracking-tight text-slate-800">
                                SMAN 1 <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-emerald-500">Suwawa</span>
                            </div>
                            <div class="text-[10px] font-bold tracking-widest uppercase text-slate-400 mt-0.5">Admin Portal</div>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="flex-1 px-4 py-6 overflow-y-auto custom-scrollbar relative z-10">
                    <div class="space-y-1">
                        <x-nav-item route="dashboard" icon="fa-solid fa-layer-group" label="Dashboard" />
                        
                        @if(Auth::user()->role === 'Admin')
                            <div class="pt-6 pb-2">
                                <span class="text-xs font-bold uppercase tracking-wider text-slate-400 pl-4">Manajemen Konten</span>
                            </div>
                            
                            <x-nav-item route="admin.articles.index" routeGroup="admin.articles.*" icon="fa-solid fa-newspaper" label="Berita / Artikel" />
                            <x-nav-item route="admin.galleries.index" routeGroup="admin.galleries.*" icon="fa-solid fa-images" label="Galeri Media" />
                            <x-nav-item route="admin.employees.index" routeGroup="admin.employees.*" icon="fa-solid fa-users-viewfinder" label="Guru & Staf" />
                            <x-nav-item route="admin.extracurriculars.index" routeGroup="admin.extracurriculars.*" icon="fa-solid fa-volleyball" label="Ekstrakurikuler" />
                            <x-nav-item route="admin.achievements.index" routeGroup="admin.achievements.*" icon="fa-solid fa-trophy" label="Prestasi Siswa" />
                            <x-nav-item route="admin.settings.sekolah" routeGroup="admin.settings.sekolah" icon="fa-solid fa-microphone-lines" label="Profil Sambutan" />
                            <x-nav-item route="admin.settings.struktur" routeGroup="admin.settings.struktur" icon="fa-solid fa-sitemap" label="Struktur Organisasi" />

                        @endif
                    </div>
                </div>

                <!-- Quick Action / User Menu Area (Bottom) -->
                <div class="p-4 relative z-10 border-t border-slate-100/50 bg-white/50">
                    <!-- Mobile only User info & logout (Desktop has header) -->
                    <div class="lg:hidden mb-4 p-3 bg-white rounded-2xl shadow-sm border border-slate-100">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center font-bold text-lg">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <div class="overflow-hidden">
                                <div class="font-bold text-sm text-slate-800 truncate">{{ Auth::user()->name }}</div>
                                <div class="text-xs text-slate-500 truncate">{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ route('profile.edit') }}" class="py-2 px-3 text-center text-xs font-bold text-slate-600 bg-slate-50 hover:bg-slate-100 rounded-lg transition">Profil</a>
                            <form method="POST" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <button type="submit" class="w-full py-2 px-3 text-center text-xs font-bold text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition">Logout</button>
                            </form>
                        </div>
                    </div>

                    <!-- Desktop & Mobile Logout button -->
                    <form method="POST" action="{{ route('logout') }}" class="hidden lg:block">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 px-4 py-3.5 rounded-2xl text-slate-600 font-bold text-sm hover:bg-red-50 hover:text-red-600 transition-all group">
                            <div class="w-8 h-8 rounded-lg bg-white shadow-sm border border-slate-200 flex items-center justify-center group-hover:bg-red-100 group-hover:border-red-200 transition-colors">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </div>
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</nav>

<!-- Reusable Nav Item Component Macro (Inline for simplicity) -->
@php
    function isRouteActive($route, $group = null) {
        if ($group && request()->routeIs($group)) return true;
        return request()->routeIs($route);
    }
@endphp

@once
<style>
    /* Custom Scrollbar for Sidebar */
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background-color: #cbd5e1;
        border-radius: 20px;
    }
</style>
@endonce
