<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.extracurriculars.index') }}" class="w-10 h-10 rounded-full bg-white shadow-sm border border-slate-200 flex items-center justify-center text-slate-500 hover:text-primary hover:bg-slate-50 transition-colors">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Ubah Data Ekstrakurikuler') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-slate-100 overflow-hidden">
                <div class="p-6 sm:p-10">
                    
                    <form method="POST" action="{{ route('admin.extracurriculars.update', $extracurricular->id) }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama -->
                            <div class="md:col-span-2">
                                <label for="name" class="block text-sm font-bold text-slate-700 mb-1">Nama Ekstrakurikuler</label>
                                <input type="text" id="name" name="name" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Contoh: Bola Voli / Pramuka / PMR" value="{{ old('name', $extracurricular->name) }}" required>
                                @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Kategori -->
                            <div>
                                <label for="category" class="block text-sm font-bold text-slate-700 mb-1">Kategori</label>
                                <select id="category" name="category" required class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3">
                                    <option value="Wajib" {{ old('category', $extracurricular->category) == 'Wajib' ? 'selected' : '' }}>Wajib</option>
                                    <option value="Olahraga" {{ old('category', $extracurricular->category) == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                                    <option value="Seni & Budaya" {{ old('category', $extracurricular->category) == 'Seni & Budaya' ? 'selected' : '' }}>Seni & Budaya</option>
                                    <option value="Akademik / Sains" {{ old('category', $extracurricular->category) == 'Akademik / Sains' ? 'selected' : '' }}>Akademik / Sains</option>
                                    <option value="Kedisiplinan & Bela Negara" {{ old('category', $extracurricular->category) == 'Kedisiplinan & Bela Negara' ? 'selected' : '' }}>Kedisiplinan & Bela Negara</option>
                                    <option value="Keagamaan" {{ old('category', $extracurricular->category) == 'Keagamaan' ? 'selected' : '' }}>Keagamaan</option>
                                </select>
                                @error('category')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Jadwal -->
                            <div>
                                <label for="schedule" class="block text-sm font-bold text-slate-700 mb-1">Jadwal Pelaksanaan</label>
                                <input type="text" id="schedule" name="schedule" 
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors py-3" 
                                    placeholder="Contoh: Setiap Jumat, 15:30 WITA" value="{{ old('schedule', $extracurricular->schedule) }}">
                                @error('schedule')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>

                            <!-- Deskripsi -->
                            <div class="md:col-span-2">
                                <label for="description" class="block text-sm font-bold text-slate-700 mb-1">Deskripsi Singkat (Opsional)</label>
                                <textarea id="description" name="description" rows="3"
                                    class="w-full rounded-xl border-slate-200 shadow-sm focus:border-primary focus:ring focus:ring-primary/20 transition-colors" 
                                    placeholder="Jelaskan secara singkat kegiatan dari ekstrakurikuler ini...">{{ old('description', $extracurricular->description) }}</textarea>
                                @error('description')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                            </div>
                            
                            <!-- Foto -->
                            <div class="md:col-span-2">
                                <label class="block text-sm font-bold text-slate-700 mb-2">Foto Saat Ini</label>
                                @if($extracurricular->image)
                                    <div class="mb-4">
                                        <img src="{{ Storage::url($extracurricular->image) }}" class="h-32 rounded-xl object-cover shadow-sm border border-slate-200" alt="Foto">
                                    </div>
                                @else
                                    <div class="mb-4 text-sm text-slate-500 italic px-4 py-3 bg-slate-50 rounded-xl border border-dashed border-slate-200 inline-block">Belum ada foto.</div>
                                @endif
                                
                                <label for="image" class="block text-sm font-bold text-slate-700 mb-1">Ganti Foto Sampul / Kegiatan Baru</label>
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
                            <a href="{{ route('admin.extracurriculars.index') }}" class="px-6 py-2.5 rounded-full text-slate-600 font-bold hover:bg-slate-100 transition">Batal</a>
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
