<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                <i class="fa-solid fa-microphone-lines text-primary/70"></i> {{ __('Profil Sambutan') }}
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

                    <form action="{{ route('admin.settings.sekolah.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Kolom Kiri -->
                            <div>
                                <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">Informasi Umum Beranda</h3>
                                
                                <div class="mb-6">
                                    <label for="hero_badge" class="block text-gray-700 text-sm font-bold mb-2">Teks Badge (Contoh: Tahun Ajaran...):</label>
                                    <input type="text" name="hero_badge" id="hero_badge" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('hero_badge', $settings['hero_badge'] ?? 'Tahun Ajaran 2026/2027') }}" required>
                                </div>

                                <div class="mb-8">
                                    <label for="hero_image" class="block text-gray-700 text-sm font-bold mb-2">Foto Beranda Utama: (Siswa Belajar)</label>
                                    @if(isset($settings['hero_image']) && $settings['hero_image'] !== '')
                                        <div class="mb-3">
                                            <img src="{{ Storage::url($settings['hero_image']) }}" alt="Foto Beranda" class="h-32 rounded-lg shadow-sm object-cover border border-slate-200">
                                        </div>
                                    @endif
                                    <input type="file" name="hero_image" id="hero_image" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition cursor-pointer border border-slate-200 rounded-lg" accept="image/*">
                                    <p class="text-xs text-gray-500 mt-2">Biarkan kosong jika tidak ingin mengubah foto. Format: JPG/PNG, Max: 5MB.</p>
                                </div>

                                <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">Profil Kepala Sekolah</h3>
                                
                                <div class="mb-4">
                                    <label for="principal_name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap Kepala Sekolah:</label>
                                    <input type="text" name="principal_name" id="principal_name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('principal_name', $settings['principal_name'] ?? '') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label for="principal_title" class="block text-gray-700 text-sm font-bold mb-2">Jabatan (Title):</label>
                                    <input type="text" name="principal_title" id="principal_title" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('principal_title', $settings['principal_title'] ?? '') }}" required>
                                </div>

                                <div class="mb-6">
                                    <label for="principal_photo" class="block text-gray-700 text-sm font-bold mb-2">Foto Kepala Sekolah: (Optional)</label>
                                    @if(isset($settings['principal_photo']) && $settings['principal_photo'] !== '')
                                        <div class="mb-3">
                                            <p class="text-xs text-gray-500 mb-2">Foto saat ini:</p>
                                            <img src="{{ Storage::url($settings['principal_photo']) }}" alt="Foto Kepala Sekolah" class="h-32 rounded-lg shadow-sm object-cover border border-slate-200">
                                        </div>
                                    @endif
                                    <input type="file" name="principal_photo" id="principal_photo" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition cursor-pointer border border-slate-200 rounded-lg" accept="image/*">
                                    <p class="text-xs text-gray-500 mt-2">Biarkan kosong jika tidak ingin mengubah foto. Format: JPG/PNG, Max: 5MB.</p>
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div>
                                <h3 class="font-bold text-lg mb-4 text-gray-700 border-b pb-2">Teks Sambutan</h3>

                                <div class="mb-4">
                                    <label for="principal_heading" class="block text-gray-700 text-sm font-bold mb-2">Judul Sambutan (Heading):</label>
                                    <input type="text" name="principal_heading" id="principal_heading" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('principal_heading', $settings['principal_heading'] ?? '') }}" required>
                                    <p class="text-xs text-gray-500 mt-1">Contoh: Menyongsong Masa Depan dengan Pendidikan Berkualitas</p>
                                </div>

                                <div class="mb-6">
                                    <label for="principal_message" class="block text-gray-700 text-sm font-bold mb-2">Isi Pesan Sambutan:</label>
                                    <textarea name="principal_message" id="principal_message" rows="8" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('principal_message', $settings['principal_message'] ?? '') }}</textarea>
                                    <p class="text-xs text-gray-500 mt-1">Anda tidak perlu menggunakan tag HTML lagi. Tekan Enter untuk paragraf baru.</p>
                                </div>

                                <div class="mb-6">
                                    <label for="principal_quote" class="block text-gray-700 text-sm font-bold mb-2">Quote / Motto Sambutan (Opsional):</label>
                                    <input type="text" name="principal_quote" id="principal_quote" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('principal_quote', $settings['principal_quote'] ?? '') }}">
                                    <p class="text-xs text-gray-500 mt-1">Contoh: Bersama wujudkan SMAN 1 Suwawa HEBAT...</p>
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
