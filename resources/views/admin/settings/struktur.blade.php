<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                <i class="fa-solid fa-sitemap text-primary/70"></i> {{ __('Struktur Organisasi') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-8 text-gray-900">
                    
                    @if (session('success'))
                        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-8 p-4 bg-emerald-50 border-l-4 border-primary rounded-r-lg">
                        <p class="text-sm text-emerald-800">
                            <strong>Catatan:</strong> Data Kepala Sekolah diambil secara otomatis dari menu <a href="{{ route('admin.settings.sekolah') }}" class="font-bold underline hover:text-primary">Profil Sambutan</a>. Silakan lengkapi nama pejabat untuk struktur di bawah ini.
                        </p>
                    </div>

                    <form action="{{ route('admin.settings.struktur.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Kolom Kiri -->
                            <div>
                                <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">Level Pimpinan & Staf</h3>
                                
                                <div class="mb-4">
                                    <label for="structure_komite_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Ketua Komite:</label>
                                    <input type="text" name="structure_komite_name" id="structure_komite_name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('structure_komite_name', $settings['structure_komite_name'] ?? 'H. Nama Komite, S.Pd., M.Si') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label for="structure_tu_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Kepala Tata Usaha (TU):</label>
                                    <input type="text" name="structure_tu_name" id="structure_tu_name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('structure_tu_name', $settings['structure_tu_name'] ?? 'Nama Kepala TU, S.E') }}" required>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div>
                                <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">Jajaran Wakil Kepala Sekolah</h3>

                                <div class="mb-4">
                                    <label for="structure_waka_kurikulum_name" class="block text-gray-700 text-sm font-bold mb-2">Waka Kurikulum:</label>
                                    <input type="text" name="structure_waka_kurikulum_name" id="structure_waka_kurikulum_name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('structure_waka_kurikulum_name', $settings['structure_waka_kurikulum_name'] ?? 'Nama Waka Kurikulum, S.Pd') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label for="structure_waka_kesiswaan_name" class="block text-gray-700 text-sm font-bold mb-2">Waka Kesiswaan:</label>
                                    <input type="text" name="structure_waka_kesiswaan_name" id="structure_waka_kesiswaan_name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('structure_waka_kesiswaan_name', $settings['structure_waka_kesiswaan_name'] ?? 'Nama Waka Kesiswaan, S.Pd') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label for="structure_waka_sarpras_name" class="block text-gray-700 text-sm font-bold mb-2">Waka Sarana & Prasarana:</label>
                                    <input type="text" name="structure_waka_sarpras_name" id="structure_waka_sarpras_name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('structure_waka_sarpras_name', $settings['structure_waka_sarpras_name'] ?? 'Nama Waka Sarpras, S.Pd') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label for="structure_waka_humas_name" class="block text-gray-700 text-sm font-bold mb-2">Waka Humas:</label>
                                    <input type="text" name="structure_waka_humas_name" id="structure_waka_humas_name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('structure_waka_humas_name', $settings['structure_waka_humas_name'] ?? 'Nama Waka Humas, S.Pd') }}" required>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-6 border-t border-slate-100">
                            <button type="submit" class="bg-primary hover:bg-emerald-700 text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-primary/30 shadow-md hover:shadow-lg transition hover:-translate-y-0.5 flex items-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan Struktur
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
