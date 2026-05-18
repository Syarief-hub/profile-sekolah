<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                <i class="fa-solid fa-book-open text-primary/70"></i> {{ __('Informasi Kurikulum') }}
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

                    <form action="{{ route('admin.settings.kurikulum.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-6">
                            <label for="kurikulum_intro" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Pengantar Kurikulum:</label>
                            <p class="text-xs text-gray-500 mb-2">Anda dapat menggunakan tag HTML dasar seperti &lt;strong&gt; atau &lt;b&gt;.</p>
                            <textarea name="kurikulum_intro" id="kurikulum_intro" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('kurikulum_intro', $settings['kurikulum_intro'] ?? 'SMA Negeri 1 Suwawa telah menerapkan <strong>Kurikulum Merdeka</strong> penuh. Kami memberikan kebebasan kepada peserta didik untuk memilih mata pelajaran mendalam sesuai dengan minat, bakat, dan aspirasi akademis mereka, sembari berfokus pada asimilasi materi esensial dan pengembangan karakter <b>Profil Pelajar Pancasila</b>.') }}</textarea>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="kurikulum_fase_e_desc" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Fase E (Kelas X):</label>
                                <textarea name="kurikulum_fase_e_desc" id="kurikulum_fase_e_desc" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('kurikulum_fase_e_desc', $settings['kurikulum_fase_e_desc'] ?? 'Peserta didik mengambil <b>seluruh mata pelajaran wajib</b>. Di jenjang ini, peserta didik diarahkan untuk mengenali minat dan bakatnya sebelum menetapkan pilihan vokasional di Fase F.') }}</textarea>
                            </div>
                            <div>
                                <label for="kurikulum_fase_f_desc" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Fase F (Kelas XI & XII):</label>
                                <textarea name="kurikulum_fase_f_desc" id="kurikulum_fase_f_desc" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('kurikulum_fase_f_desc', $settings['kurikulum_fase_f_desc'] ?? 'Peserta didik <b>memilih mata pelajaran penjurusan</b> sesuai gaya belajar, minat, dan studi lanjut. Kami menghilangkan sekat kaku pengotakan (tidak lagi hanya IPA / IPS).') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-8">
                            <label for="kurikulum_p5_desc" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi Program P5:</label>
                            <textarea name="kurikulum_p5_desc" id="kurikulum_p5_desc" rows="4" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('kurikulum_p5_desc', $settings['kurikulum_p5_desc'] ?? 'Sebagai inti dari Kurikulum Merdeka, sekolah kami menyelenggarakan kegiatan kokurikuler khusus P5 yang memakan alokasi waktu hingga 30% per semester. Siswa diajarkan menuntaskan persoalan nyata melalui projek lintas disiplin ilmu.') }}</textarea>
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

