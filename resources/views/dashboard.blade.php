<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
            <i class="fa-solid fa-gauge-high text-primary/70"></i> {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            
            <!-- Welcome Banner -->
            <div class="bg-gradient-to-r from-primary to-emerald-800 rounded-3xl shadow-xl overflow-hidden mb-8 relative">
                <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
                <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-secondary opacity-20 rounded-full blur-3xl"></div>
                
                <div class="px-8 py-10 md:py-12 relative z-10 flex flex-col md:flex-row items-center justify-between">
                    <div class="text-white mb-6 md:mb-0">
                        <h3 class="text-3xl font-extrabold mb-2 text-transparent bg-clip-text bg-gradient-to-r from-white to-emerald-100">Halo, {{ Auth::user()->name }}! 👋</h3>
                        <p class="text-emerald-100 leading-relaxed max-w-2xl">Selamat datang kembali di panel administrasi SMA Negeri 1 Suwawa. Anda dapat mengelola konten website dan memperbarui informasi sekolah melalui menu-menu yang tersedia.</p>
                    </div>
                    <div class="hidden lg:block shrink-0">
                        <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-md shadow-lg border border-white/30">
                            <i class="fa-solid fa-graduation-cap text-5xl text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Links / Dashboard Cards -->
            <h4 class="text-slate-800 font-bold justify-between text-xl mb-6 flex items-center">
                <span><i class="fa-solid fa-bolt text-secondary mr-2"></i> Akses Cepat</span>
            </h4>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                @if(Auth::user()->role === 'Admin')
                <!-- Card 1 -->
                <a href="{{ route('admin.articles.index') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl border border-slate-100 transition duration-300 transform hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-teal-50 rounded-bl-full -z-10 group-hover:scale-110 transition duration-500"></div>
                    <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-teal-600 group-hover:text-white transition duration-300 shadow-sm">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <h5 class="font-bold text-slate-800 text-lg mb-1 group-hover:text-teal-600 transition">Kelola Berita</h5>
                    <p class="text-slate-500 text-sm">Tulis dan publikasikan berita sekolah terbaru.</p>
                </a>

                <!-- Card 2 -->
                <a href="{{ route('admin.galleries.index') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl border border-slate-100 transition duration-300 transform hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-purple-50 rounded-bl-full -z-10 group-hover:scale-110 transition duration-500"></div>
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-purple-600 group-hover:text-white transition duration-300 shadow-sm">
                        <i class="fa-regular fa-images"></i>
                    </div>
                    <h5 class="font-bold text-slate-800 text-lg mb-1 group-hover:text-purple-600 transition">Media Galeri</h5>
                    <p class="text-slate-500 text-sm">Unggah foto dan video kegiatan sekolah.</p>
                </a>

                <!-- Card 3 -->
                <a href="{{ route('admin.settings.sekolah') }}" class="group bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl border border-slate-100 transition duration-300 transform hover:-translate-y-1 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-bl-full -z-10 group-hover:scale-110 transition duration-500"></div>
                    <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-amber-500 group-hover:text-white transition duration-300 shadow-sm">
                        <i class="fa-solid fa-microphone-lines"></i>
                    </div>
                    <h5 class="font-bold text-slate-800 text-lg mb-1 group-hover:text-amber-600 transition">Sambutan</h5>
                    <p class="text-slate-500 text-sm">Edit profil dan teks sambutan Kepala Sekolah.</p>
                </a>


                @endif
                
            </div>
            
        </div>
    </div>
</x-app-layout>
