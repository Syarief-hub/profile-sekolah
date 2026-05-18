<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <i class="fa-solid fa-pen-to-square text-sky-600/70"></i> {{ __('Edit Fasilitas') }}
            </h2>
            <a href="{{ route('admin.facilities.index') }}" class="text-slate-500 hover:text-slate-700 font-medium text-sm transition flex items-center gap-2">
                <i class="fa-solid fa-arrow-left"></i> Kembali
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">
            <form action="{{ route('admin.facilities.update', $facility->id) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6 sm:p-8">
                @csrf
                @method('PUT')
                
                <div class="space-y-6">
                    <div>
                        <label for="category" class="block text-sm font-bold text-slate-700 mb-2">Kategori Fasilitas</label>
                        <select name="category" id="category" class="w-full rounded-xl border-slate-200 focus:border-sky-500 focus:ring focus:ring-sky-200 transition" required>
                            <option value="kelas" {{ old('category', $facility->category) == 'kelas' ? 'selected' : '' }}>Ruang Kelas</option>
                            <option value="lab" {{ old('category', $facility->category) == 'lab' ? 'selected' : '' }}>Laboratorium</option>
                            <option value="perpus" {{ old('category', $facility->category) == 'perpus' ? 'selected' : '' }}>Perpustakaan</option>
                            <option value="olahraga" {{ old('category', $facility->category) == 'olahraga' ? 'selected' : '' }}>Olahraga & Seni</option>
                            <option value="ibadah" {{ old('category', $facility->category) == 'ibadah' ? 'selected' : '' }}>Musholla / Tempat Ibadah</option>
                            <option value="aula" {{ old('category', $facility->category) == 'aula' ? 'selected' : '' }}>Aula Utama</option>
                            <option value="admin" {{ old('category', $facility->category) == 'admin' ? 'selected' : '' }}>Administrasi & Guru</option>
                            <option value="layanan" {{ old('category', $facility->category) == 'layanan' ? 'selected' : '' }}>Layanan Siswa (UKS, BK, dll)</option>
                            <option value="umum" {{ old('category', $facility->category) == 'umum' ? 'selected' : '' }}>Fasilitas Umum (Kamar Mandi, dll)</option>
                        </select>
                        @error('category') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Ruangan / Area</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $facility->name) }}" class="w-full rounded-xl border-slate-200 focus:border-sky-500 focus:ring focus:ring-sky-200 transition" required>
                        @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="unit" class="block text-sm font-bold text-slate-700 mb-2">Jumlah Unit (Ruangan)</label>
                        <input type="number" name="unit" id="unit" value="{{ old('unit', $facility->unit) }}" min="1" class="w-full sm:w-1/3 rounded-xl border-slate-200 focus:border-sky-500 focus:ring focus:ring-sky-200 transition" required>
                        @error('unit') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Lengkap</label>
                        <textarea name="description" id="description" rows="4" class="w-full rounded-xl border-slate-200 focus:border-sky-500 focus:ring focus:ring-sky-200 transition" required>{{ old('description', $facility->description) }}</textarea>
                        @error('description') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-bold text-slate-700 mb-2">Ubah Foto Ruangan (Opsional)</label>
                        @if($facility->image)
                            <div class="mb-3 w-48 rounded-xl overflow-hidden shadow-sm border border-slate-200">
                                <img src="{{ str_starts_with($facility->image, 'http') ? $facility->image : asset('storage/' . $facility->image) }}" alt="Current Image" class="w-full h-32 object-cover">
                            </div>
                        @endif
                        <input type="file" name="image" id="image" accept="image/*" class="w-full rounded-xl border border-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-sky-50 file:text-sky-700 hover:file:bg-sky-100 transition cursor-pointer">
                        <p class="mt-2 text-xs text-slate-500">Biarkan kosong jika tidak ingin mengubah foto. Format: JPG, PNG, WEBP. Maks 5MB.</p>
                        @error('image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mt-8 pt-6 border-t border-slate-100 flex justify-end gap-3">
                    <a href="{{ route('admin.facilities.index') }}" class="px-5 py-2.5 rounded-xl font-bold text-slate-600 bg-slate-100 hover:bg-slate-200 transition">Batal</a>
                    <button type="submit" class="px-6 py-2.5 rounded-xl font-bold text-white bg-sky-600 hover:bg-sky-700 shadow-md hover:shadow-lg transition">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
