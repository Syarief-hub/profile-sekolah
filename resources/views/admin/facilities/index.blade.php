<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <i class="fa-solid fa-building text-sky-600/70"></i> {{ __('Fasilitas Sekolah') }}
            </h2>
            <a href="{{ route('admin.facilities.create') }}" class="bg-sky-600 hover:bg-sky-700 text-white font-bold py-2.5 px-5 rounded-full text-sm transition shadow-md hover:shadow-lg hover:-translate-y-0.5 flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Fasilitas
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
                                <th class="py-4 px-6 font-bold">Kategori</th>
                                <th class="py-4 px-6 font-bold">Nama Fasilitas</th>
                                <th class="py-4 px-6 font-bold">Jumlah Unit</th>
                                <th class="py-4 px-6 font-bold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($facilities as $facility)
                            <tr class="hover:bg-sky-50/50 transition duration-150">
                                <td class="py-4 px-6 font-medium text-slate-800 capitalize">{{ $facility->category }}</td>
                                <td class="py-4 px-6 font-medium text-slate-800">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-lg bg-slate-100 overflow-hidden flex-shrink-0">
                                            @if($facility->image)
                                                <img src="{{ str_starts_with($facility->image, 'http') ? $facility->image : asset('storage/' . $facility->image) }}" class="w-full h-full object-cover">
                                            @else
                                                <div class="w-full h-full flex items-center justify-center text-slate-400"><i class="fa-solid fa-image"></i></div>
                                            @endif
                                        </div>
                                        <span>{{ $facility->name }}</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-slate-600">{{ $facility->unit }} Unit</td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.facilities.edit', $facility->id) }}" class="w-8 h-8 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-500 hover:text-white flex items-center justify-center transition tooltip" title="Edit">
                                            <i class="fa-solid fa-pen-to-square text-sm"></i>
                                        </a>
                                        <form action="{{ route('admin.facilities.destroy', $facility->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-500 hover:text-white flex items-center justify-center transition tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?')">
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
                                        <i class="fa-regular fa-building text-4xl mb-3 opacity-50"></i>
                                        <p class="text-sm">Belum ada fasilitas yang ditambahkan.</p>
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
