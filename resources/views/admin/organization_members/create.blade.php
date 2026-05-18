<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <a href="{{ route('admin.organization-members.index') }}" class="text-slate-500 hover:text-primary transition-colors">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Tambah Pejabat / Staf') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-8">
                    @if ($errors->any())
                        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl relative">
                            <ul class="list-disc list-inside text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.organization-members.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div class="col-span-1 md:col-span-2">
                                <label for="name" class="block text-sm font-bold text-slate-700 mb-2">Nama Lengkap (beserta Gelar)</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-colors" required placeholder="Cth: Dr. Budi Santoso, M.Pd.">
                            </div>

                            <div>
                                <label for="position" class="block text-sm font-bold text-slate-700 mb-2">Jabatan</label>
                                <input type="text" name="position" id="position" value="{{ old('position') }}" class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-colors" required placeholder="Cth: Kepala Sekolah / Waka Kurikulum">
                            </div>

                            <div>
                                <label for="category" class="block text-sm font-bold text-slate-700 mb-2">Kategori Tingkat Hierarki</label>
                                <select name="category" id="category" class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-colors" required>
                                    <option value="" disabled selected>Pilih Kategori...</option>
                                    <option value="Pimpinan" {{ old('category') == 'Pimpinan' ? 'selected' : '' }}>Pimpinan (Kepala Sekolah)</option>
                                    <option value="Wakil" {{ old('category') == 'Wakil' ? 'selected' : '' }}>Wakil (Wakasek)</option>
                                    <option value="Staf" {{ old('category') == 'Staf' ? 'selected' : '' }}>Staf / Koordinator / Pembina</option>
                                </select>
                                <p class="text-xs text-slate-500 mt-1">Digunakan untuk mengatur posisi dalam struktur (Tingkat 1, 2, atau 3).</p>
                            </div>

                            <div>
                                <label for="order" class="block text-sm font-bold text-slate-700 mb-2">Urutan Tampil (Opsional)</label>
                                <input type="number" name="order" id="order" value="{{ old('order', 0) }}" class="w-full rounded-lg border-slate-200 focus:border-primary focus:ring focus:ring-primary/20 shadow-sm transition-colors" placeholder="0">
                                <p class="text-xs text-slate-500 mt-1">Semakin kecil angkanya, semakin kiri urutannya.</p>
                            </div>

                            <div class="col-span-1 md:col-span-2">
                                <label for="photo" class="block text-sm font-bold text-slate-700 mb-2">Foto Profil</label>
                                <input type="file" name="photo" id="photo" class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-primary hover:file:bg-blue-100 transition-colors border border-slate-200 rounded-lg p-1 bg-slate-50" accept="image/*">
                            </div>
                        </div>

                        <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-100">
                            <a href="{{ route('admin.organization-members.index') }}" class="px-5 py-2.5 text-sm font-medium text-slate-600 bg-slate-100 hover:bg-slate-200 rounded-lg transition-colors">Batal</a>
                            <button type="submit" class="px-5 py-2.5 text-sm font-medium text-white bg-primary hover:bg-blue-700 rounded-lg transition-colors shadow-sm">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
