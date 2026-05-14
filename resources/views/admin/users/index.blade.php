<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight flex items-center gap-2">
                <i class="fa-solid fa-users-gear text-primary/70"></i> {{ __('Manajemen Akun') }}
            </h2>
            <a href="{{ route('admin.users.create') }}" class="bg-primary hover:bg-emerald-700 text-white font-bold py-2.5 px-5 rounded-full text-sm transition shadow-md hover:shadow-lg hover:-translate-y-0.5 flex items-center gap-2">
                <i class="fa-solid fa-plus"></i> Tambah Akun
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

            @if(session('error'))
            <div class="bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl mb-4" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
            @endif
            
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-0 overflow-x-auto">
                    <table class="w-full whitespace-nowrap text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm uppercase tracking-wider">
                                <th class="py-4 px-6 font-bold">Pengguna</th>
                                <th class="py-4 px-6 font-bold">Username</th>
                                <th class="py-4 px-6 font-bold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($users as $user)
                            <tr class="hover:bg-emerald-50/50 transition duration-150">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center font-bold text-lg">
                                            {{ substr($user->name, 0, 1) }}
                                        </div>
                                        <div>
                                            <div class="font-bold text-slate-800">{{ $user->name }}</div>
                                            <div class="text-xs text-slate-500">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-slate-600 font-medium">
                                    {{ $user->username }}
                                </td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.users.edit', $user->id) }}" class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition tooltip" title="Edit">
                                            <i class="fa-solid fa-pen-to-square text-sm"></i>
                                        </a>
                                        @if(auth()->id() !== $user->id)
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-500 hover:text-white flex items-center justify-center transition tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus akun ini?')">
                                                <i class="fa-solid fa-trash-can text-sm"></i>
                                            </button>
                                        </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-12 px-6 text-center">
                                    <div class="flex flex-col items-center justify-center text-slate-400">
                                        <i class="fa-solid fa-users-slash text-4xl mb-3 opacity-50"></i>
                                        <p class="text-sm">Belum ada data pengguna.</p>
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
