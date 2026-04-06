<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.achievements.index') }}" class="w-10 h-10 rounded-full bg-white shadow-sm border border-slate-200 flex items-center justify-center text-slate-500 hover:text-primary hover:bg-slate-50 transition-colors">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Ubah Data Prestasi Siswa') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 overflow-hidden">
                <div class="p-6 sm:p-10">
                    
                    <form method="POST" action="{{ route('admin.achievements.update', $achievement->id) }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Judul -->
                            <div class="md:col-span-2">
                                <label for="title" class="block text-sm font-bold text-slate-700 mb-1">Nama Prestasi / Perlombaan</label>
                                <input type="text" id="title" name="title" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Contoh: Juara 1 Olimpiade Sains Nasional (OSN) Fisika" value="{{ old('title', $achievement->title) }}" required>
                                @error('title')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="category" class="block text-sm font-bold text-slate-700 mb-1">Kategori / Bidang</label>
                                <select id="category" name="category" required class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3">
                                    <option value="Akademik & Keilmuan" {{ old('category', $achievement->category) == 'Akademik & Keilmuan' ? 'selected' : '' }}>Akademik & Keilmuan (Sains)</option>
                                    <option value="Olahraga" {{ old('category', $achievement->category) == 'Olahraga' ? 'selected' : '' }}>Olahraga / Atletik</option>
                                    <option value="Seni & Budaya" {{ old('category', $achievement->category) == 'Seni & Budaya' ? 'selected' : '' }}>Seni & Kesenian</option>
                                    <option value="Keagamaan" {{ old('category', $achievement->category) == 'Keagamaan' ? 'selected' : '' }}>Keagamaan</option>
                                    <option value="Non-Akademik Lainnya" {{ old('category', $achievement->category) == 'Non-Akademik Lainnya' ? 'selected' : '' }}>Non-Akademik Lainnya</option>
                                </select>
                                @error('category')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Tingkat -->
                            <div>
                                <label for="level" class="block text-sm font-bold text-slate-700 mb-1">Tingkat Perlombaan</label>
                                <select id="level" name="level" required class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3">
                                    <option value="Kabupaten / Kota" {{ old('level', $achievement->level) == 'Kabupaten / Kota' ? 'selected' : '' }}>Kabupaten / Kota</option>
                                    <option value="Provinsi" {{ old('level', $achievement->level) == 'Provinsi' ? 'selected' : '' }}>Provinsi</option>
                                    <option value="Nasional" {{ old('level', $achievement->level) == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                                    <option value="Internasional" {{ old('level', $achievement->level) == 'Internasional' ? 'selected' : '' }}>Internasional</option>
                                    <option value="Sekolah / Antar Kelas" {{ old('level', $achievement->level) == 'Sekolah / Antar Kelas' ? 'selected' : '' }}>Lokal / Sekolah</option>
                                </select>
                                @error('level')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Nama Peraih -->
                            <div>
                                <label for="student_name" class="block text-sm font-bold text-slate-700 mb-1">Nama Peraih / Tim</label>
                                <input type="text" id="student_name" name="student_name" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Contoh: Budi Santoso" value="{{ old('student_name', $achievement->student_name) }}" required>
                                @error('student_name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Tahun / Waktu -->
                            <div>
                                <label for="achievement_year" class="block text-sm font-bold text-slate-700 mb-1">Tahun Perolehan</label>
                                <input type="text" id="achievement_year" name="achievement_year" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Contoh: 2026" value="{{ old('achievement_year', $achievement->achievement_year) }}" required>
                                @error('achievement_year')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            
                            <!-- Foto -->
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-slate-700 mb-2">Foto Saat Ini</label>
                                @if($achievement->image)
                                    <div class="mb-4">
                                        <img src="{{ Storage::url($achievement->image) }}" class="h-32 rounded-xl object-cover shadow-sm border border-slate-200" alt="Foto">
                                    </div>
                                @else
                                    <div class="mb-4 text-sm text-slate-500 italic px-4 py-3 bg-slate-50 rounded-xl border border-dashed border-slate-200 inline-block">Belum ada foto dokumentasi.</div>
                                @endif
                                
                                <label for="image" class="block text-sm font-bold text-slate-700 mb-1">Ganti Foto Baru</label>
                                <input type="file" id="image" name="image" accept="image/*"
                                    class="block w-full text-sm text-slate-500
                                      file:mr-4 file:py-2.5 file:px-4
                                      file:rounded-full file:border-0
                                      file:text-sm file:font-semibold
                                      file:bg-emerald-50 file:text-emerald-700
                                      hover:file:bg-emerald-100 border border-slate-200 rounded-xl p-2 cursor-pointer transition">
                                <p class="text-slate-400 text-xs mt-1">Kosongkan jika tidak ingin mengganti foto. Format: JPG, PNG, WEBP maksimal 2MB.</p>
                                @error('image')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-end gap-3 pt-6 border-t border-slate-100 mt-8">
                            <a href="{{ route('admin.achievements.index') }}" class="px-6 py-2.5 rounded-full text-slate-600 font-bold hover:bg-slate-100 transition">Batal</a>
                            <button type="submit" class="bg-primary hover:bg-emerald-700 text-white font-bold py-2.5 px-6 rounded-full shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition flex items-center gap-2">
                                <i class="fa-solid fa-save"></i> Perbarui Data
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
