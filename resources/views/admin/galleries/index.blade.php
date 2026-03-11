<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <i class="fa-regular fa-images text-purple-600/70"></i> {{ __('Media Galeri') }}
            </h2>
            <a href="{{ route('admin.galleries.create') }}" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2.5 px-5 rounded-full text-sm transition shadow-md hover:shadow-lg hover:-translate-y-0.5 flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Media
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-0 overflow-x-auto">
                    <table class="w-full whitespace-nowrap text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm uppercase tracking-wider">
                                <th class="py-4 px-6 font-bold">Nama Kegiatan</th>
                                <th class="py-4 px-6 font-bold">Jenis Media</th>
                                <th class="py-4 px-6 font-bold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($galleries as $gallery)
                            <tr class="hover:bg-purple-50/50 transition duration-150">
                                <td class="py-4 px-6 font-medium text-slate-800">{{ $gallery->event_name }}</td>
                                <td class="py-4 px-6 capitalize">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $gallery->type === 'video' ? 'bg-red-100 text-red-800' : 'bg-purple-100 text-purple-800' }}">
                                        @if($gallery->type === 'video')<i class="fa-solid fa-play mr-1.5 text-[10px]"></i>@else<i class="fa-solid fa-camera mr-1.5 text-[10px]"></i>@endif{{ $gallery->type }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition tooltip" title="Edit">
                                            <i class="fa-solid fa-pen-to-square text-sm"></i>
                                        </a>
                                        <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-500 hover:text-white flex items-center justify-center transition tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus media ini?')">
                                                <i class="fa-solid fa-trash-can text-sm"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="py-12 px-6 text-center">
                                    <div class="flex flex-col items-center justify-center text-slate-400">
                                        <i class="fa-regular fa-image text-4xl mb-3 opacity-50"></i>
                                        <p class="text-sm">Belum ada media galeri yang ditambahkan.</p>
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
