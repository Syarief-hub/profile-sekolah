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

                    <form action="{{ route('admin.settings.osismpk.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <!-- 1. Bagian Pengenalan -->
                        <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">1. Pengenalan Organisasi</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <label for="osis_description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi OSIS:</label>
                                <textarea name="osis_description" id="osis_description" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_description', $settings['osis_description'] ?? 'Organisasi Siswa Intra Sekolah (OSIS) adalah wadah pembinaan generasi muda di lingkungan sekolah untuk mengembangkan potensi, karakter, kepemimpinan, dan kemandirian siswa secara kolektif.') }}</textarea>
                            </div>
                            <div>
                                <label for="mpk_description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi MPK:</label>
                                <textarea name="mpk_description" id="mpk_description" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('mpk_description', $settings['mpk_description'] ?? 'Majelis Perwakilan Kelas (MPK) merupakan badan legislatif tingkat siswa yang bertugas mengawasi, mengevaluasi, dan menampung aspirasi siswa untuk kemajuan tata kelola berbagai program OSIS.') }}</textarea>
                            </div>
                        </div>

                        <!-- 2. Bagian Visi & Misi -->
                        <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">2. Visi & Misi</h3>
                        <div class="mb-6">
                            <label for="osis_vision" class="block text-gray-700 text-sm font-bold mb-2">Visi Organisasi:</label>
                            <input type="text" name="osis_vision" id="osis_vision" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('osis_vision', $settings['osis_vision'] ?? 'Menjadikan siswa-siswi SMAN 1 Suwawa berkarakter, inovatif, dan berprestasi berlandaskan IMTAK dan IPTEK.') }}" required>
                        </div>
                        <div class="mb-8">
                            <label for="osis_mission" class="block text-gray-700 text-sm font-bold mb-2">Misi Organisasi:</label>
                            <p class="text-xs text-gray-500 mb-2">Gunakan format list HTML seperti &lt;ul&gt; dan &lt;li&gt; jika diperlukan.</p>
                            <textarea name="osis_mission" id="osis_mission" rows="6" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_mission', $settings['osis_mission'] ?? '<ul>
    <li>Meningkatkan Kedisiplinan</li>
    <li>Pengembangan Minat Bakat</li>
    <li>Kepedulian Sosial & Lingkungan</li>
</ul>') }}</textarea>
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
                                <div>
                                    <label for="osis_program_1_desc" class="block text-gray-700 text-sm font-bold mb-1">Deskripsi Program 1:</label>
                                    <textarea name="osis_program_1_desc" id="osis_program_1_desc" rows="2" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_program_1_desc', $settings['osis_program_1_desc'] ?? 'Ajang kompetisi olahraga dan seni antar kelas rutin yang selalu digemari dan dilaksanakan pasca ujian semester demi memperkokoh ikatan persaudaraan.') }}</textarea>
                                </div>
                            </div>

                            <!-- Program 2 -->
                            <div class="p-4 bg-slate-50 border border-slate-200 rounded-xl">
                                <h4 class="font-bold text-md mb-3 text-emerald-600">Program Unggulan 2</h4>
                                <div class="mb-3">
                                    <label for="osis_program_2_title" class="block text-gray-700 text-sm font-bold mb-1">Judul Program 2:</label>
                                    <input type="text" name="osis_program_2_title" id="osis_program_2_title" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('osis_program_2_title', $settings['osis_program_2_title'] ?? 'Gerakan Lingkungan Bersih') }}" required>
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
                                <div>
                                    <label for="osis_program_3_desc" class="block text-gray-700 text-sm font-bold mb-1">Deskripsi Program 3:</label>
                                    <textarea name="osis_program_3_desc" id="osis_program_3_desc" rows="2" class="shadow-sm border-slate-200 rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('osis_program_3_desc', $settings['osis_program_3_desc'] ?? 'Penyelenggaraan acara religius & kebangsaan yang atraktif seperti perayaan kemerdekaan 17 Agustus, Sumpah Pemuda, dan kegiatan hari keagamaan.') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-6 border-t border-slate-100">
                            <button type="submit" class="bg-primary hover:bg-emerald-700 text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-primary/30 shadow-md hover:shadow-lg transition hover:-translate-y-0.5 flex items-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
