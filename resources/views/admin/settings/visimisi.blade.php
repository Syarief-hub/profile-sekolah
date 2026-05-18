<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                <i class="fa-solid fa-bullseye text-primary/70"></i> {{ __('Foto Visi & Misi') }}
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

                    <div class="bg-blue-50 border-l-4 border-primary p-4 rounded-r-lg mb-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <i class="fa-solid fa-circle-info text-primary mt-0.5"></i>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-blue-800 font-medium">Informasi</p>
                                <p class="text-sm text-blue-700 mt-1">Gunakan halaman ini khusus untuk mengatur foto-foto penghias pada halaman Visi & Misi agar terlihat lebih estetik dan profesional.</p>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('admin.settings.visimisi.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-6">
                            <!-- Foto Visi -->
                            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                                <label for="visi_image" class="block text-gray-800 text-base font-bold mb-3 border-b border-slate-200 pb-2">
                                    <i class="fa-solid fa-image text-primary mr-2"></i> Foto Visi Sekolah (Kiri)
                                </label>
                                @if(isset($settings['visi_image']))
                                    <div class="mb-4">
                                        <img src="{{ str_starts_with($settings['visi_image'], 'http') ? $settings['visi_image'] : asset('storage/' . $settings['visi_image']) }}" alt="Foto Visi" class="w-full h-48 object-cover rounded-xl shadow-md border-4 border-white">
                                    </div>
                                @endif
                                <input type="file" name="visi_image" id="visi_image" accept="image/*" class="w-full rounded-xl border border-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20 transition cursor-pointer bg-white">
                                <p class="mt-3 text-xs text-slate-500 leading-relaxed">Foto ini akan tampil di sebelah kiri teks Visi. Disarankan menggunakan rasio potret (berdiri) agar proporsional. Maks 5MB.</p>
                            </div>

                            <!-- Foto Misi -->
                            <div class="bg-slate-50 p-6 rounded-2xl border border-slate-100">
                                <label for="misi_image" class="block text-gray-800 text-base font-bold mb-3 border-b border-slate-200 pb-2">
                                    <i class="fa-solid fa-panorama text-green-600 mr-2"></i> Foto Misi Sekolah (Panorama)
                                </label>
                                @if(isset($settings['misi_image']))
                                    <div class="mb-4">
                                        <img src="{{ str_starts_with($settings['misi_image'], 'http') ? $settings['misi_image'] : asset('storage/' . $settings['misi_image']) }}" alt="Foto Misi" class="w-full h-48 object-cover rounded-xl shadow-md border-4 border-white">
                                    </div>
                                @endif
                                <input type="file" name="misi_image" id="misi_image" accept="image/*" class="w-full rounded-xl border border-slate-200 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition cursor-pointer bg-white">
                                <p class="mt-3 text-xs text-slate-500 leading-relaxed">Foto ini akan membentang sangat lebar (landscape/panorama) di atas daftar Misi Sekolah sebagai pemisah visual. Maks 5MB.</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-6 border-t border-slate-100">
                            <button type="submit" class="bg-primary hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-primary/30 shadow-md hover:shadow-lg transition hover:-translate-y-0.5 flex items-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan Foto
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
