<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <i class="fa-solid fa-plus text-sky-600/70"></i> {{ __('Tambah Fasilitas') }}
            </h2>
            <a href="{{ route('admin.facilities.index') }}" class="text-slate-500 hover:text-slate-700 font-medium text-sm transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">
            <form action="{{ route('admin.facilities.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 sm:p-8">
                @csrf
                
                <div class="space-y-6">
                    <div>
                        <label for="category" class="block text-sm font-bold text-slate-700 mb-2">Kategori Fasilitas</label>
                        <select name="category" id="category" class="w-full rounded-xl border-slate-200 focus:border-sky-500 focus:ring focus:ring-sky-200 transition" required>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="kelas">Ruang Kelas</option>
                            <option value="lab">Laboratorium</option>
                            <option value="perpus">Perpustakaan</option>
                            <option value="olahraga">Olahraga & Seni</option>
                            <option value="ibadah">Musholla / Tempat Ibadah</option>
                            <option value="aula">Aula Utama</option>
                            <option value="admin">Administrasi & Guru</option>
                            <option value="layanan">Layanan Siswa (UKS, BK, dll)</option>
                            <option value="umum">Fasilitas Umum (Kamar Mandi, dll)</option>
                        </select>
                        @error('category') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Ruangan / Area</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full rounded-xl border-slate-200 focus:border-sky-500 focus:ring focus:ring-sky-200 transition" required placeholder="Contoh: Ruang Kelas X, LAB. Biologi">
                        @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="unit" class="block text-sm font-bold text-slate-700 mb-2">Jumlah Unit (Ruangan)</label>
                        <input type="number" name="unit" id="unit" value="{{ old('unit', 1) }}" min="1" class="w-full sm:w-1/3 rounded-xl border-slate-200 focus:border-sky-500 focus:ring focus:ring-sky-200 transition" required>
                        @error('unit') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Lengkap</label>
                        <textarea name="description" id="description" rows="4" class="w-full rounded-xl border-slate-200 focus:border-sky-500 focus:ring focus:ring-sky-200 transition" required placeholder="Fasilitas yang ada di dalam ruangan ini...">{{ old('description') }}</textarea>
                        @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-bold text-slate-700 mb-2">Foto Ruangan / Fasilitas</label>
                        <input type="file" name="image" id="image" accept="image/*" class="w-full rounded-xl border border-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-sky-50 file:text-sky-700 hover:file:bg-sky-100 transition cursor-pointer" required>
                        <p class="mt-2 text-xs text-slate-500">Format: JPG, PNG, WEBP. Maksimal 5MB. Disarankan ukuran lanskap (horizontal).</p>
                        @error('image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end gap-3">
                    <a href="{{ route('admin.facilities.index') }}" class="px-5 py-2.5 rounded-xl font-bold text-slate-600 bg-slate-100 hover:bg-slate-200 transition">Batal</a>
                    <button type="submit" class="px-6 py-2.5 rounded-xl font-bold text-white bg-sky-600 hover:bg-sky-700 shadow-md hover:shadow-lg transition">Simpan Fasilitas</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
