<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <i class="fa-solid fa-users text-primary/70"></i> {{ __('Manajemen Guru & Staf') }}
            </h2>
            <a href="{{ route('admin.employees.create') }}" class="bg-primary hover:bg-emerald-700 text-white font-bold py-2.5 px-5 rounded-full text-sm transition shadow-md hover:shadow-lg hover:-translate-y-0.5 flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Data
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
                                <th class="py-4 px-6 font-bold">Nama / Jabatan</th>
                                <th class="py-4 px-6 font-bold">Kategori</th>
                                <th class="py-4 px-6 font-bold">NIP</th>
                                <th class="py-4 px-6 font-bold">Urutan</th>
                                <th class="py-4 px-6 font-bold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($employees as $employee)
                            <tr class="hover:bg-emerald-50/50 transition duration-150">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        @if($employee->image)
                                            <img src="{{ Storage::url($employee->image) }}" alt="Foto" class="w-10 h-10 rounded-full object-cover border border-slate-200">
                                        @else
                                            <div class="w-10 h-10 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center border border-slate-200">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        @endif
                                        <div>
                                            <div class="font-bold text-slate-800">{{ $employee->name }}</div>
                                            <div class="text-xs font-semibold text-primary">{{ $employee->position }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold 
                                        {{ $employee->type == 'Pimpinan' ? 'bg-amber-100 text-amber-700 border-amber-200' : '' }}
                                        {{ $employee->type == 'Guru' ? 'bg-blue-100 text-blue-700 border-blue-200' : '' }}
                                        {{ $employee->type == 'Staf' ? 'bg-purple-100 text-purple-700 border-purple-200' : '' }}
                                        border">
                                        {{ $employee->type }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 text-slate-500 text-sm">{{ $employee->nip ?? '-' }}</td>
                                <td class="py-4 px-6 text-slate-500 text-sm">{{ $employee->order_number }}</td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.employees.edit', $employee->id) }}" class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition tooltip" title="Edit">
                                            <i class="fa-solid fa-pen-to-square text-sm"></i>
                                        </a>
                                        <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="POST" class="inline">
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
                                <td colspan="5" class="py-12 px-6 text-center">
                                    <div class="flex flex-col items-center justify-center text-slate-400">
                                        <i class="fa-regular fa-folder-open text-4xl mb-3 opacity-50"></i>
                                        <p class="text-sm">Belum ada data guru/staf.</p>
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
