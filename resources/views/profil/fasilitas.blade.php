@extends('layouts.public')

@section('title', 'Fasilitas | SMA Negeri 1 Suwawa')

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
               <i class="fa-solid fa-building"></i> Fasilitas
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-black text-white leading-tight mb-6 drop-shadow-xl">
                Fasilitas Sekolah
            </h1>
            <p class="text-blue-50/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                Sarana dan prasarana penunjang kegiatan pembelajaran terpadu di SMA Negeri 1 Suwawa.
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
            
            <div class="bg-slate-50/50 rounded-[2.5rem] border-[8px] border-white shadow-xl shadow-primary/5 p-6 sm:p-8 md:p-12 relative overflow-hidden group">
                <!-- Abstract Background -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/4"></div>
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-10 relative z-10 border-b border-slate-200/60 pb-6">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 flex-shrink-0 bg-white text-primary rounded-2xl flex items-center justify-center text-2xl shadow-sm border border-slate-100">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl sm:text-3xl font-heading font-black text-slate-800 tracking-tight leading-none mb-1">Daftar Ruangan & Sarana</h2>
                            <p class="text-slate-500 text-sm">Klik pada kartu fasilitas untuk melihat detail unit ruangan.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Alpine Component Data -->
                @php
                $dbItems = isset($dbFacilities) ? $dbFacilities : collect();
                $mapItems = function($cat) use ($dbItems) {
                    if (!$dbItems->has($cat)) return [];
                    return $dbItems[$cat]->map(function($i) {
                        return [
                            'name' => $i->name, 
                            'unit' => $i->unit, 
                            'img' => str_starts_with($i->image, 'http') ? $i->image : asset('storage/' . $i->image), 
                            'desc' => $i->description
                        ];
                    })->toArray();
                };

                $facilitiesData = [
                    'kelas' => [
                        'title' => 'Ruang Kelas', 'icon' => 'fa-school', 'color' => 'sky', 'count' => '3 Tingkat Kelas',
                        'items' => $mapItems('kelas')
                    ],
                    'lab' => [
                        'title' => 'Laboratorium', 'icon' => 'fa-microscope', 'color' => 'emerald', 'count' => '5 Tipe Ruangan',
                        'items' => $mapItems('lab')
                    ],
                    'perpus' => [
                        'title' => 'Perpustakaan', 'icon' => 'fa-book', 'color' => 'orange', 'count' => '3 Area Fasilitas',
                        'items' => $mapItems('perpus')
                    ],
                    'olahraga' => [
                        'title' => 'Olahraga & Seni', 'icon' => 'fa-futbol', 'color' => 'red', 'count' => '3 Fasilitas Utama',
                        'items' => $mapItems('olahraga')
                    ],
                    'ibadah' => [
                        'title' => 'Musholla', 'icon' => 'fa-mosque', 'color' => 'purple', 'count' => '3 Area Fasilitas',
                        'items' => $mapItems('ibadah')
                    ],
                    'aula' => [
                        'title' => 'Aula Utama', 'icon' => 'fa-masks-theater', 'color' => 'pink', 'count' => '3 Area Fasilitas',
                        'items' => $mapItems('aula')
                    ],
                    'admin' => [
                        'title' => 'Administrasi & Guru', 'icon' => 'fa-user-tie', 'color' => 'blue', 'count' => '4 Tipe Ruangan',
                        'items' => $mapItems('admin')
                    ],
                    'layanan' => [
                        'title' => 'Layanan Siswa', 'icon' => 'fa-users', 'color' => 'indigo', 'count' => '5 Tipe Ruangan',
                        'items' => $mapItems('layanan')
                    ],
                    'umum' => [
                        'title' => 'Fasilitas Umum', 'icon' => 'fa-restroom', 'color' => 'slate', 'count' => '5 Tipe Ruangan',
                        'items' => $mapItems('umum')
                    ]
                ];
                @endphp
                <div x-data="{ activeModal: null, categories: {{ json_encode($facilitiesData) }}, get activeData() { return this.activeModal ? this.categories[this.activeModal] : null; } }" class="relative z-10">
                    <!-- Cards Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Card 1: Kelas -->
                        <div @click="activeModal = 'kelas'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(59,130,246,0.15)] hover:border-blue-200 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=600&auto=format&fit=crop" alt="Ruang Kelas" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-[#0ea5e9] text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-sky-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-school"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-[#0ea5e9] transition-colors mt-2">Ruang Kelas</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Ruang kelas teori yang representatif untuk kegiatan KBM harian siswa.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-[#0ea5e9] text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>
                        
                        <!-- Card 2: Lab -->
                        <div @click="activeModal = 'lab'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(16,185,129,0.15)] hover:border-emerald-200 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?q=80&w=600&auto=format&fit=crop" alt="Laboratorium" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-[#10b981] text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-emerald-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-microscope"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-[#10b981] transition-colors mt-2">Laboratorium</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Fasilitas praktikum IPA, Komputer, dan Bahasa dengan peralatan modern.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-[#10b981] text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>

                        <!-- Card 3: Perpus -->
                        <div @click="activeModal = 'perpus'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(249,115,22,0.15)] hover:border-orange-200 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1568667256549-094345857637?q=80&w=600&auto=format&fit=crop" alt="Perpustakaan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-[#f97316] text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-orange-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-[#f97316] transition-colors mt-2">Perpustakaan</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Koleksi buku lengkap, ruang baca nyaman, dan referensi sumber belajar.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-[#f97316] text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>

                        <!-- Card 4: Olahraga -->
                        <div @click="activeModal = 'olahraga'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(239,68,68,0.15)] hover:border-red-200 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1526232761682-d26e03ac148e?q=80&w=600&auto=format&fit=crop" alt="Olahraga" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-[#ef4444] text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-red-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-futbol"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-[#ef4444] transition-colors mt-2">Olahraga & Seni</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Fasilitas pengembangan bakat olahraga dan keterampilan seni siswa.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-[#ef4444] text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>

                        <!-- Card 5: Musholla -->
                        <div @click="activeModal = 'ibadah'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(168,85,247,0.15)] hover:border-purple-200 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?q=80&w=600&auto=format&fit=crop" alt="Musholla" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-[#a855f7] text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-purple-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-mosque"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-[#a855f7] transition-colors mt-2">Musholla</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Musholla representatif untuk kegiatan ibadah seluruh warga sekolah.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-[#a855f7] text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>

                        <!-- Card 6: Aula -->
                        <div @click="activeModal = 'aula'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(236,72,153,0.15)] hover:border-pink-200 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?q=80&w=600&auto=format&fit=crop" alt="Aula" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-[#ec4899] text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-pink-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-masks-theater"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-[#ec4899] transition-colors mt-2">Aula Utama</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Aula serbaguna luas untuk berbagai acara pertemuan dan pementasan.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-[#ec4899] text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>

                        <!-- Card 7: Admin -->
                        <div @click="activeModal = 'admin'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(59,130,246,0.15)] hover:border-blue-200 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=600&auto=format&fit=crop" alt="Administrasi" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-blue-600 text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-blue-600/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-user-tie"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-blue-600 transition-colors mt-2">Administrasi</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Fasilitas ruang pimpinan, dewan guru, dan operasional staf tata usaha.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-blue-600 text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>

                        <!-- Card 8: Layanan Siswa -->
                        <div @click="activeModal = 'layanan'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(99,102,241,0.15)] hover:border-indigo-200 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=600&auto=format&fit=crop" alt="Layanan Siswa" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-[#6366f1] text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-indigo-500/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-[#6366f1] transition-colors mt-2">Layanan Siswa</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Ruang UKS, BK/BP, Koperasi, serta ruang penunjang organisasi siswa.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-[#6366f1] text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>

                        <!-- Card 9: Umum -->
                        <div @click="activeModal = 'umum'" class="bg-white rounded-3xl border border-slate-100 shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_10px_30px_rgba(100,116,139,0.15)] hover:border-slate-300 hover:-translate-y-1 cursor-pointer transition-all duration-300 group overflow-hidden flex flex-col">
                            <div class="h-40 w-full relative overflow-hidden bg-slate-100">
                                <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?q=80&w=600&auto=format&fit=crop" alt="Fasilitas Umum" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                            </div>
                            <div class="p-6 pt-10 relative flex-1 text-center flex flex-col">
                                <div class="w-16 h-16 mx-auto bg-slate-600 text-white rounded-2xl flex items-center justify-center text-3xl shadow-lg shadow-slate-600/30 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300 absolute -top-8 left-1/2 -translate-x-1/2 border-4 border-white">
                                    <i class="fa-solid fa-restroom"></i>
                                </div>
                                <h3 class="text-xl font-bold text-slate-800 mb-3 group-hover:text-slate-600 transition-colors mt-2">Fasilitas Umum</h3>
                                <p class="text-slate-500 text-sm leading-relaxed mb-4">Infrastruktur pendukung sanitasi, toilet, dan gudang logistik.</p>
                                <span class="inline-flex justify-center items-center gap-1 text-slate-600 text-sm font-bold opacity-0 group-hover:opacity-100 transition-opacity mt-auto"><i class="fa-solid fa-arrow-right"></i> Lihat Detail</span>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Backdrop & Dialog -->
                    <template x-teleport="body">
                        <div x-show="activeModal !== null" style="display: none" class="fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6">
                        <!-- Backdrop -->
                        <div x-show="activeModal !== null" x-transition.opacity.duration.300ms class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm" @click="activeModal = null"></div>

                        <!-- Dialog -->
                        <div x-show="activeModal !== null" 
                             x-transition:enter="transition ease-out duration-300 delay-100" 
                             x-transition:enter-start="opacity-0 translate-y-8 scale-95" 
                             x-transition:enter-end="opacity-100 translate-y-0 scale-100" 
                             x-transition:leave="transition ease-in duration-200" 
                             x-transition:leave-start="opacity-100 translate-y-0 scale-100" 
                             x-transition:leave-end="opacity-0 translate-y-8 scale-95"
                             class="bg-slate-50 rounded-3xl shadow-2xl w-full max-w-3xl relative z-10 overflow-hidden flex flex-col max-h-[90vh]">
                            
                            <!-- Header -->
                            <div class="flex items-center justify-between p-5 border-b border-slate-200 bg-white shadow-sm z-10 relative">
                                <h3 class="text-lg font-bold text-slate-800">Rincian Ruangan</h3>
                                <button @click="activeModal = null" class="w-8 h-8 flex items-center justify-center rounded-full bg-slate-100 text-slate-600 hover:bg-red-100 hover:text-red-600 transition-colors">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            <!-- Body (Scrollable) -->
                            <div class="p-4 sm:p-6 overflow-y-auto">
                                <template x-if="activeData">
                                    <div>
                                        <!-- Dynamic Header Info -->
                                        <div class="flex items-center gap-5 mb-8 pb-6 border-b border-slate-200/60">
                                            <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl shadow-lg border text-white"
                                                 :class="{
                                                    'bg-sky-500 border-sky-400 shadow-sky-500/30': activeData.color === 'sky',
                                                    'bg-emerald-500 border-emerald-400 shadow-emerald-500/30': activeData.color === 'emerald',
                                                    'bg-orange-500 border-orange-400 shadow-orange-500/30': activeData.color === 'orange',
                                                    'bg-red-500 border-red-400 shadow-red-500/30': activeData.color === 'red',
                                                    'bg-purple-500 border-purple-400 shadow-purple-500/30': activeData.color === 'purple',
                                                    'bg-pink-500 border-pink-400 shadow-pink-500/30': activeData.color === 'pink',
                                                    'bg-blue-600 border-blue-500 shadow-blue-600/30': activeData.color === 'blue',
                                                    'bg-indigo-500 border-indigo-400 shadow-indigo-500/30': activeData.color === 'indigo',
                                                    'bg-slate-600 border-slate-500 shadow-slate-600/30': activeData.color === 'slate'
                                                 }">
                                                <i class="fa-solid" :class="activeData.icon"></i>
                                            </div>
                                            <div>
                                                <h4 class="font-bold text-slate-800 text-2xl mb-1" x-text="activeData.title"></h4>
                                                <p class="text-sm font-semibold text-slate-500" x-text="'Terdapat ' + activeData.count"></p>
                                            </div>
                                        </div>

                                        <!-- Dynamic Items Loop -->
                                        <div class="space-y-4">
                                            <template x-for="item in activeData.items" :key="item.name">
                                                <div class="flex flex-col sm:flex-row bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md hover:border-slate-300 transition-all overflow-hidden group">
                                                    <!-- Thumbnail -->
                                                    <div class="h-48 sm:h-auto sm:w-56 relative bg-slate-100 overflow-hidden flex-shrink-0">
                                                        <img :src="item.img" :alt="item.name" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                                        <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors duration-300"></div>
                                                    </div>
                                                    <!-- Content -->
                                                    <div class="p-5 flex-1 flex flex-col justify-center">
                                                        <div class="flex justify-between items-start gap-4 mb-2">
                                                            <h5 class="font-bold text-slate-800 text-lg leading-tight" x-text="item.name"></h5>
                                                            <span class="px-3 py-1 bg-slate-100 text-slate-700 font-bold rounded-lg text-xs border border-slate-200 whitespace-nowrap" x-text="item.unit + ' Unit'"></span>
                                                        </div>
                                                        <p class="text-sm text-slate-500 leading-relaxed mb-4" x-text="item.desc"></p>
                                                    </div>
                                                </div>
                                            </template>
                                        </div>
                                    </div>
                                </template>
                            </div>
                            
                            <!-- Modal Footer -->
                            <div class="p-4 border-t border-slate-200 bg-white flex justify-end shadow-[0_-4px_10px_rgba(0,0,0,0.02)] relative z-10">
                                <button @click="activeModal = null" class="px-6 py-2.5 bg-slate-800 hover:bg-slate-700 text-white font-bold rounded-xl shadow-md hover:shadow-lg transition-all focus:ring-4 focus:ring-slate-200">Tutup</button>
                            </div>
                        </div>
                        </div>
                    </template>
                </div>
            </div>
            
        </div>
    </section>
@endsection
