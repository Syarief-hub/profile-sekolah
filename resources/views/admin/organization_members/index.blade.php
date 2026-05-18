<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <i class="fa-solid fa-sitemap text-primary/70"></i> {{ __('Struktur Organisasi') }}
            </h2>
            <a href="{{ route('admin.organization-members.create') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-primary hover:bg-blue-700 text-white text-sm font-medium rounded-lg transition-colors shadow-sm">
                <i class="fa-solid fa-plus"></i> Tambah Pejabat/Staf
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-6">
                    @if (session('success'))
                        <div class="mb-4 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl relative flex items-center gap-3">
                            <i class="fa-solid fa-circle-check text-green-500"></i>
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 border-y border-slate-200">
                                    <th class="py-3 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Foto</th>
                                    <th class="py-3 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Nama</th>
                                    <th class="py-3 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Jabatan</th>
                                    <th class="py-3 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider">Kategori Tingkat</th>
                                    <th class="py-3 px-4 text-xs font-bold text-slate-500 uppercase tracking-wider text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                @forelse ($members as $member)
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-3 px-4">
                                            @if($member->photo)
                                                <img src="{{ asset('storage/' . $member->photo) }}" alt="{{ $member->name }}" class="w-12 h-12 rounded-lg object-cover border border-slate-200">
                                            @else
                                                <div class="w-12 h-12 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400 border border-slate-200">
                                                    <i class="fa-solid fa-user"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="py-3 px-4 font-semibold text-slate-800">{{ $member->name }}</td>
                                        <td class="py-3 px-4 text-slate-600">{{ $member->position }}</td>
                                        <td class="py-3 px-4">
                                            @if($member->category === 'Pimpinan')
                                                <span class="px-2.5 py-1 bg-rose-100 text-rose-700 text-xs font-bold rounded-md">Pimpinan</span>
                                            @elseif($member->category === 'Wakil')
                                                <span class="px-2.5 py-1 bg-purple-100 text-purple-700 text-xs font-bold rounded-md">Wakil</span>
                                            @else
                                                <span class="px-2.5 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-md">Staf</span>
                                            @endif
                                        </td>
                                        <td class="py-3 px-4 text-right">
                                            <div class="flex items-center justify-end gap-2">
                                                <a href="{{ route('admin.organization-members.edit', $member) }}" class="w-8 h-8 rounded-lg bg-amber-50 text-amber-600 hover:bg-amber-100 flex items-center justify-center transition-colors">
                                                    <i class="fa-solid fa-pen-to-square text-sm"></i>
                                                </a>
                                                <form action="{{ route('admin.organization-members.destroy', $member) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota ini?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 flex items-center justify-center transition-colors">
                                                        <i class="fa-solid fa-trash text-sm"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="py-8 text-center text-slate-500">
                                            <div class="flex flex-col items-center justify-center">
                                                <i class="fa-solid fa-sitemap text-4xl text-slate-300 mb-3"></i>
                                                <p>Belum ada data struktur organisasi.</p>
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
    </div>
</x-app-layout>
