<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.employees.index') }}" class="w-10 h-10 rounded-full bg-white shadow-sm border border-slate-200 flex items-center justify-center text-slate-500 hover:text-primary hover:bg-slate-50 transition-colors">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Tambah Data Guru & Staf') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 overflow-hidden">
                <div class="p-6 sm:p-10">
                    
                    <form method="POST" action="{{ route('admin.employees.store') }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama -->
                            <div class="md:col-span-2">
                                <label for="name" class="block text-sm font-bold text-slate-700 mb-1">Nama Lengkap & Gelar</label>
                                <input type="text" id="name" name="name" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Contoh: Dr. H. Ahmad, M.Pd" value="{{ old('name') }}" required>
                                @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="type" class="block text-sm font-bold text-slate-700 mb-1">Kategori</label>
                                <select id="type" name="type" required class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3">
                                    <option value="Guru" {{ old('type') == 'Guru' ? 'selected' : '' }}>Guru (Pendidik)</option>
                                    <option value="Staf" {{ old('type') == 'Staf' ? 'selected' : '' }}>Staf TU (Kependidikan)</option>
                                    <option value="Pimpinan" {{ old('type') == 'Pimpinan' ? 'selected' : '' }}>Pimpinan Sekolah</option>
                                </select>
                                @error('type')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Jabatan -->
                            <div>
                                <label for="position" class="block text-sm font-bold text-slate-700 mb-1">Jabatan / Mata Pelajaran</label>
                                <input type="text" id="position" name="position" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Contoh: Guru Matematika" value="{{ old('position') }}" required>
                                @error('position')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- NIP -->
                            <div>
                                <label for="nip" class="block text-sm font-bold text-slate-700 mb-1">NIP (Opsional)</label>
                                <input type="text" id="nip" name="nip" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Nomor Induk Pegawai" value="{{ old('nip') }}">
                                @error('nip')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Urutan -->
                            <div>
                                <label for="order_number" class="block text-sm font-bold text-slate-700 mb-1">Nomor Urut Tampil</label>
                                <input type="number" id="order_number" name="order_number" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Contoh: 1" value="{{ old('order_number', 0) }}">
                                <p class="text-slate-400 text-xs mt-1">Mengatur urutan tampil, paling kecil urutan pertama.</p>
                                @error('order_number')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            
                            <!-- Foto -->
                            <div class="md:col-span-2">
                                <label for="image" class="block text-sm font-bold text-slate-700 mb-1">Pas Foto (Opsional)</label>
                                <input type="file" id="image" name="image" accept="image/*"
                                    class="block w-full text-sm text-slate-500
                                      file:mr-4 file:py-2.5 file:px-4
                                      file:rounded-full file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-emerald-50 file:text-emerald-700
                                      hover:file:bg-emerald-100 border border-slate-200 rounded-xl p-2 cursor-pointer transition">
                                <p class="text-slate-400 text-xs mt-1">Format: JPG, PNG maksimal 2MB. Rasio kotak/portrait (pas foto) lebih disarankan.</p>
                                @error('image')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-end gap-3 pt-6 border-t border-slate-100 mt-8">
                            <a href="{{ route('admin.employees.index') }}" class="px-6 py-2.5 rounded-full text-slate-600 font-bold hover:bg-slate-100 transition">Batal</a>
                            <button type="submit" class="bg-primary hover:bg-emerald-700 text-white font-bold py-2.5 px-6 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition flex items-center gap-2">
                                <i class="fa-solid fa-save"></i> Simpan Data
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
