<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                <i class="fa-solid fa-clock-rotate-left text-primary/70"></i> {{ __('Informasi Sejarah Sekolah') }}
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

                    <form action="{{ route('admin.settings.sejarah.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-6">
                            <label for="sejarah_images" class="block text-gray-700 text-sm font-bold mb-2">Foto Sejarah (Kolase)</label>
                            @php
                                $sejarah_images = isset($settings['sejarah_images']) ? json_decode($settings['sejarah_images'], true) : [];
                            @endphp
                            @if(!empty($sejarah_images))
                                <div class="mb-4 grid grid-cols-3 gap-3">
                                    @foreach($sejarah_images as $img)
                                    <img src="{{ str_starts_with($img, 'http') ? $img : asset('storage/' . $img) }}" alt="Foto Sejarah" class="w-full h-24 object-cover rounded-lg shadow-sm border border-slate-200">
                                    @endforeach
                                </div>
                            @endif
                            <input type="file" name="sejarah_images[]" id="sejarah_images" accept="image/*" multiple class="w-full rounded-xl border border-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition cursor-pointer">
                            <p class="mt-2 text-xs text-slate-500">Pilih 3 hingga 4 foto terbaik untuk membuat kolase yang indah. Mengunggah foto baru akan menggantikan foto lama. Format: JPG, PNG. Maks 5MB per file.</p>
                        </div>

                        <div class="mb-6">
                            <label for="sejarah_title" class="block text-gray-700 text-sm font-bold mb-2">
                                Judul / Tema Sejarah (Opsional)
                            </label>
                            <p class="text-sm text-gray-500 mb-3">Teks ini akan otomatis ditampilkan dengan jenis font yang berbeda dan ukuran lebih besar di halaman utama.</p>
                            <input type="text" name="sejarah_title" id="sejarah_title" value="{{ old('sejarah_title', $settings['sejarah_title'] ?? '') }}" placeholder="Contoh: Menelusuri Jejak Awal Mula..." class="shadow-sm border-slate-200 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition">
                        </div>

                        <div class="mb-6">
                            <label for="sejarah_content" class="block text-gray-700 text-sm font-bold mb-2 border-b pb-2">
                                Konten Sejarah Sekolah
                            </label>
                            <p class="text-sm text-gray-500 mb-3">Cukup ketikkan teks secara biasa tanpa kode HTML. Tekan tombol <kbd class="px-2 py-1 bg-gray-100 border rounded text-xs">Enter</kbd> pada keyboard Anda untuk membuat paragraf atau baris baru.</p>
                            <textarea name="sejarah_content" id="sejarah_content" rows="15" class="shadow-sm border-slate-200 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('sejarah_content', $settings['sejarah_content'] ?? '') }}</textarea>
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

