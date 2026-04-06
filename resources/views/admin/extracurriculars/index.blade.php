<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <i class="fa-solid fa-volleyball text-primary/70"></i> {{ __('Manajemen Ekstrakurikuler') }}
            </h2>
            <a href="{{ route('admin.extracurriculars.create') }}" class="bg-primary hover:bg-emerald-700 text-white font-bold py-2.5 px-5 rounded-full text-sm transition shadow-md hover:shadow-lg hover:-translate-y-0.5 flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Ekskul
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-auto">
            @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-600 px-4 py-3 rounded-xl mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif
            
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-0 overflow-x-auto">
                    <table class="w-full whitespace-nowrap text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm uppercase tracking-wider">
                                <th class="py-4 px-6 font-bold">Ekstrakurikuler</th>
                                <th class="py-4 px-6 font-bold">Kategori</th>
                                <th class="py-4 px-6 font-bold">Jadwal</th>
                                <th class="py-4 px-6 font-bold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($extracurriculars as $ekskul)
                            <tr class="hover:bg-emerald-50/50 transition duration-150">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        @if($ekskul->image)
                                            <img src="{{ Storage::url($ekskul->image) }}" alt="Foto" class="w-12 h-12 rounded-xl object-cover border border-slate-200 shadow-sm">
                                        @else
                                            <div class="w-12 h-12 rounded-xl bg-slate-100 text-slate-400 flex items-center justify-center border border-slate-200 shadow-sm">
                                                <i class="fa-solid fa-image"></i>
                                            </div>
                                        @endif
                                        <div>
                                            <div class="font-bold text-slate-800">{{ $ekskul->name }}</div>
                                            <div class="text-xs font-semibold text-slate-500 w-48 truncate" title="{{ $ekskul->description }}">{{ Str::limit($ekskul->description, 40) ?: '-' }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold 
                                        {{ $ekskul->category == 'Olahraga' ? 'bg-orange-100 text-orange-700 border-orange-200' : '' }}
                                        {{ $ekskul->category == 'Seni & Budaya' ? 'bg-pink-100 text-pink-700 border-pink-200' : '' }}
                                        {{ $ekskul->category == 'Akademik / Sains' ? 'bg-blue-100 text-blue-700 border-blue-200' : '' }}
                                        {{ $ekskul->category == 'Kedisiplinan & Bela Negara' ? 'bg-emerald-100 text-emerald-700 border-emerald-200' : '' }}
                                        border bg-slate-100 text-slate-600">
                                        {{ $ekskul->category }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 text-sm font-medium">
                                    <i class="fa-regular fa-calendar text-slate-400 mr-2"></i> {{ $ekskul->schedule ?? '-' }}
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.extracurriculars.edit', $ekskul->id) }}" class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition tooltip" title="Edit">
                                            <i class="fa-solid fa-pen-to-square text-sm"></i>
                                        </a>
                                        <form action="{{ route('admin.extracurriculars.destroy', $ekskul->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-500 hover:text-white flex items-center justify-center transition tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="fa-solid fa-trash-can text-sm"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-12 px-6 text-center">
                                    <div class="flex flex-col items-center justify-center text-slate-400">
                                        <i class="fa-regular fa-folder-open text-4xl mb-3 opacity-50"></i>
                                        <p class="text-sm">Belum ada data Ekstrakurikuler.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
