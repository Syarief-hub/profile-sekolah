<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                <i class="fa-solid fa-users-viewfinder text-primary/70"></i> {{ __('Profil OSIS & MPK') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-8 text-gray-900">
                    
                    @if (session('success'))
                        <div class="mb-6 bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative">
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

                    <form action="{{ route('admin.settings.osismpk.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <!-- 0. Sambutan -->
                        <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">1. Sambutan</h3>
                        <div class="mb-8">
                            <label for="osis_sambutan_photo" class="block text-gray-700 text-sm font-bold mb-2">Foto Wakasek Kesiswaan (Opsional):</label>
                            @if(isset($settings['osis_sambutan_photo']) && $settings['osis_sambutan_photo'])
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $settings['osis_sambutan_photo']) }}" alt="Foto Sambutan" class="h-24 w-24 object-cover rounded-xl shadow-sm border border-slate-200">
                                </div>
                            @endif
                            <input type="file" name="osis_sambutan_photo" id="osis_sambutan_photo" class="mb-4 w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-primary hover:file:bg-blue-100 transition-colors border border-slate-200 rounded-lg p-1 bg-slate-50" accept="image/*">

                            <label for="osis_sambutan" class="block text-gray-700 text-sm font-bold mb-2">Pesan Sambutan Wakasek Kesiswaan:</label>
                            <p class="text-xs text-gray-500 mb-2">Gunakan Enter untuk baris baru (tidak perlu menggunakan tag HTML).</p>
                            <textarea name="osis_sambutan" id="osis_sambutan" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition">{{ old('osis_sambutan', $settings['osis_sambutan'] ?? 'Selamat datang di halaman resmi OSIS & MPK SMAN 1 Suwawa. Kami berkomitmen untuk terus berinovasi dan berkontribusi bagi kemajuan sekolah tercinta melalui berbagai program kerja unggulan.') }}</textarea>
                        </div>

                        <!-- 1. Bagian Pengenalan -->
                        <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">2. Pengenalan Organisasi</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                            <div>
                                <label for="osis_photo" class="block text-gray-700 text-sm font-bold mb-2">Foto/Logo OSIS (Opsional):</label>
                                @if(isset($settings['osis_photo']) && $settings['osis_photo'])
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $settings['osis_photo']) }}" alt="Foto OSIS" class="h-20 w-20 object-cover rounded-xl shadow-sm border border-slate-200">
                                    </div>
                                @endif
                                <input type="file" name="osis_photo" id="osis_photo" class="mb-3 w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-primary hover:file:bg-blue-100 transition-colors border border-slate-200 rounded-lg p-1 bg-slate-50" accept="image/*">
                                
                                <label for="osis_description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi OSIS:</label>
                                <textarea name="osis_description" id="osis_description" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_description', $settings['osis_description'] ?? 'Organisasi Siswa Intra Sekolah (OSIS) adalah wadah pembinaan generasi muda di lingkungan sekolah untuk mengembangkan potensi, karakter, kepemimpinan, dan kemandirian siswa secara kolektif.') }}</textarea>
                            </div>
                            <div>
                                <label for="mpk_photo" class="block text-gray-700 text-sm font-bold mb-2">Foto/Logo MPK (Opsional):</label>
                                @if(isset($settings['mpk_photo']) && $settings['mpk_photo'])
                                    <div class="mb-3">
                                        <img src="{{ asset('storage/' . $settings['mpk_photo']) }}" alt="Foto MPK" class="h-20 w-20 object-cover rounded-xl shadow-sm border border-slate-200">
                                    </div>
                                @endif
                                <input type="file" name="mpk_photo" id="mpk_photo" class="mb-3 w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-primary hover:file:bg-blue-100 transition-colors border border-slate-200 rounded-lg p-1 bg-slate-50" accept="image/*">
                                
                                <label for="mpk_description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi MPK:</label>
                                <textarea name="mpk_description" id="mpk_description" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('mpk_description', $settings['mpk_description'] ?? 'Majelis Perwakilan Kelas (MPK) merupakan badan legislatif tingkat siswa yang bertugas mengawasi, mengevaluasi, dan menampung aspirasi siswa untuk kemajuan tata kelola berbagai program OSIS.') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-8 p-4 bg-slate-50 rounded-xl border border-slate-200">
                            <label for="ketua_osis_name" class="block text-gray-700 text-sm font-bold mb-2">Nama (Opsional):</label>
                            <input type="text" name="ketua_osis_name" id="ketua_osis_name" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition mb-4" value="{{ old('ketua_osis_name', $settings['ketua_osis_name'] ?? '') }}" placeholder="Contoh: Wirda Abdullah, M.Pd">

                            <label for="ketua_osis_role" class="block text-gray-700 text-sm font-bold mb-2">Keterangan Jabatan (Opsional):</label>
                            <input type="text" name="ketua_osis_role" id="ketua_osis_role" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition mb-4" value="{{ old('ketua_osis_role', $settings['ketua_osis_role'] ?? '') }}" placeholder="Contoh: Wakasek Kesiswaan">

                            <label for="ketua_osis_photo" class="block text-gray-700 text-sm font-bold mb-2">Foto Ketua OSIS / Tengah (Opsional):</label>
                            <p class="text-xs text-gray-500 mb-2">Foto ini akan ditampilkan tepat di tengah, di antara kartu OSIS dan MPK.</p>
                            @if(isset($settings['ketua_osis_photo']) && $settings['ketua_osis_photo'])
                                <div class="mb-3">
                                    <img src="{{ asset('storage/' . $settings['ketua_osis_photo']) }}" alt="Foto Ketua OSIS" class="h-20 w-20 object-cover rounded-xl shadow-sm border border-slate-200">
                                </div>
                            @endif
                            <input type="file" name="ketua_osis_photo" id="ketua_osis_photo" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-primary hover:file:bg-blue-100 transition-colors border border-slate-200 rounded-lg p-1 bg-white" accept="image/*">
                        </div>

                        <!-- 2. Bagian Visi & Misi -->
                        <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">2. Visi & Misi</h3>
                        <div class="mb-6">
                            <div>
                                <label for="osis_vision" class="block text-gray-700 text-sm font-bold mb-2">Visi OSIS & MPK:</label>
                                <textarea name="osis_vision" id="osis_vision" rows="6" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_vision', $settings['osis_vision'] ?? 'Mewujudkan lingkungan sekolah yang CERIA (Cerdas, Etis, Religius, Inovatif, dan Aktif), serta menjadikan OSIS sebagai wadah pengembangan potensi, karakter, dan kepemimpinan untuk berkontribusi positif bagi seluruh siswa/i di SMAN 1 Suwawa.') }}</textarea>
                            </div>
                            
                            <div>
                                <label for="osis_mission" class="block text-gray-700 text-sm font-bold mb-2">Misi OSIS & MPK:</label>
                                <p class="text-xs text-gray-500 mb-2">Tuliskan misi dengan menekan Enter untuk baris baru (tidak perlu menggunakan tag HTML).</p>
                                <textarea name="osis_mission" id="osis_mission" rows="6" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition font-mono text-sm" required>{{ old('osis_mission', $settings['osis_mission'] ?? '1. C (Cerdas) – mengembangkan potensi anggota agar berpikir kritis dan berwawasan luas.
2. E (Etis) – menanamkan sikap santun, disiplin, dan menghargai sesama siswa/i.
3. R (Religius) – memperkuat keimanan dan ketakwaan melalui kegiatan keagamaan yang rutin.
4. I (Inovatif) – mendorong kreativitas dan gagasan baru untuk memperluas wawasan siswa/i SMAN 1 Suwawa.
5. A (Aktif) – berpartisipasi dalam berbagai program positif dengan semangat kebersamaan.') }}</textarea>
                            </div>
                        </div>

                        <!-- 3. Bagian Program Kerja -->
                        <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">3. Program Kerja Unggulan</h3>
                        <div class="space-y-6 mb-8">
                            <!-- Program 1 -->
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                                <h4 class="font-bold text-md mb-3 text-primary">Program Unggulan 1</h4>
                                <div class="mb-3">
                                    <label for="osis_program_1_title" class="block text-gray-700 text-sm font-bold mb-1">Judul Program 1:</label>
                                    <input type="text" name="osis_program_1_title" id="osis_program_1_title" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('osis_program_1_title', $settings['osis_program_1_title'] ?? 'Class Meeting & Porseni') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="osis_program_1_photo" class="block text-gray-700 text-sm font-bold mb-1">Foto Ilustrasi (Opsional):</label>
                                    @if(isset($settings['osis_program_1_photo']) && $settings['osis_program_1_photo'])
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $settings['osis_program_1_photo']) }}" alt="Foto Prog 1" class="h-20 w-32 object-cover rounded-lg shadow-sm border border-slate-200">
                                        </div>
                                    @endif
                                    <input type="file" name="osis_program_1_photo" id="osis_program_1_photo" class="w-full text-sm text-slate-500 file:mr-2 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*">
                                </div>
                                <div>
                                    <label for="osis_program_1_desc" class="block text-gray-700 text-sm font-bold mb-1">Deskripsi Program 1:</label>
                                    <textarea name="osis_program_1_desc" id="osis_program_1_desc" rows="2" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_program_1_desc', $settings['osis_program_1_desc'] ?? 'Ajang kompetisi olahraga dan seni antar kelas rutin yang selalu digemari dan dilaksanakan pasca ujian semester demi memperkokoh ikatan persaudaraan.') }}</textarea>
                                </div>
                            </div>

                            <!-- Program 2 -->
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                                <h4 class="font-bold text-md mb-3 text-blue-600">Program Unggulan 2</h4>
                                <div class="mb-3">
                                    <label for="osis_program_2_title" class="block text-gray-700 text-sm font-bold mb-1">Judul Program 2:</label>
                                    <input type="text" name="osis_program_2_title" id="osis_program_2_title" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('osis_program_2_title', $settings['osis_program_2_title'] ?? 'Gerakan Lingkungan Bersih') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="osis_program_2_photo" class="block text-gray-700 text-sm font-bold mb-1">Foto Ilustrasi (Opsional):</label>
                                    @if(isset($settings['osis_program_2_photo']) && $settings['osis_program_2_photo'])
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $settings['osis_program_2_photo']) }}" alt="Foto Prog 2" class="h-20 w-32 object-cover rounded-lg shadow-sm border border-slate-200">
                                        </div>
                                    @endif
                                    <input type="file" name="osis_program_2_photo" id="osis_program_2_photo" class="w-full text-sm text-slate-500 file:mr-2 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*">
                                </div>
                                <div>
                                    <label for="osis_program_2_desc" class="block text-gray-700 text-sm font-bold mb-1">Deskripsi Program 2:</label>
                                    <textarea name="osis_program_2_desc" id="osis_program_2_desc" rows="2" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_program_2_desc', $settings['osis_program_2_desc'] ?? 'Program kolaborasi pemeliharaan lingkungan sekolah dengan konsep go-green, mendaur ulang sampah, serta inisiatif memperindah area kelas.') }}</textarea>
                                </div>
                            </div>

                            <!-- Program 3 -->
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                                <h4 class="font-bold text-md mb-3 text-amber-500">Program Unggulan 3</h4>
                                <div class="mb-3">
                                    <label for="osis_program_3_title" class="block text-gray-700 text-sm font-bold mb-1">Judul Program 3:</label>
                                    <input type="text" name="osis_program_3_title" id="osis_program_3_title" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('osis_program_3_title', $settings['osis_program_3_title'] ?? 'Perayaan Hari Besar') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="osis_program_3_photo" class="block text-gray-700 text-sm font-bold mb-1">Foto Ilustrasi (Opsional):</label>
                                    @if(isset($settings['osis_program_3_photo']) && $settings['osis_program_3_photo'])
                                        <div class="mb-2">
                                            <img src="{{ asset('storage/' . $settings['osis_program_3_photo']) }}" alt="Foto Prog 3" class="h-20 w-32 object-cover rounded-lg shadow-sm border border-slate-200">
                                        </div>
                                    @endif
                                    <input type="file" name="osis_program_3_photo" id="osis_program_3_photo" class="w-full text-sm text-slate-500 file:mr-2 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*">
                                </div>
                                <div>
                                    <label for="osis_program_3_desc" class="block text-gray-700 text-sm font-bold mb-1">Deskripsi Program 3:</label>
                                    <textarea name="osis_program_3_desc" id="osis_program_3_desc" rows="2" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_program_3_desc', $settings['osis_program_3_desc'] ?? 'Penyelenggaraan acara religius & kebangsaan yang atraktif seperti perayaan kemerdekaan 17 Agustus, Sumpah Pemuda, dan kegiatan hari keagamaan.') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-6 border-t border-slate-100">
                            <button type="submit" class="bg-primary hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-primary/30 shadow-md hover:shadow-lg transition hover:-translate-y-0.5 flex items-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

