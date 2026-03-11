<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                <i class="fa-solid fa-envelope text-emerald-600/70"></i> {{ __('Pesan Masuk') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-full mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-0 overflow-x-auto">
                    <table class="w-full whitespace-nowrap text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50 border-b border-slate-200 text-slate-600 text-sm uppercase tracking-wider">
                                <th class="py-4 px-6 font-bold">Waktu</th>
                                <th class="py-4 px-6 font-bold">Pengirim</th>
                                <th class="py-4 px-6 font-bold">Subjek Pesan</th>
                                <th class="py-4 px-6 font-bold text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @forelse($contacts as $contact)
                            <tr class="hover:bg-emerald-50/50 transition duration-150">
                                <td class="py-4 px-6 text-slate-500 text-sm">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-slate-100 text-slate-600 border border-slate-200">
                                        <i class="fa-regular fa-clock mr-1.5 opacity-70"></i> {{ \Carbon\Carbon::parse($contact->created_at)->diffForHumans() }}
                                    </span>
                                </td>
                                <td class="py-4 px-6 font-medium text-slate-800 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-xs uppercase">{{ substr($contact->name, 0, 1) }}</div>
                                    {{ $contact->name }}
                                </td>
                                <td class="py-4 px-6 font-medium text-slate-700 truncate max-w-xs">{{ $contact->subject }}</td>
                                <td class="py-4 px-6 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.contacts.show', $contact->id) }}" class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-500 hover:text-white flex items-center justify-center transition tooltip" title="Baca Pesan">
                                            <i class="fa-solid fa-eye text-sm"></i>
                                        </a>
                                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-500 hover:text-white flex items-center justify-center transition tooltip" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
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
                                        <i class="fa-regular fa-envelope-open text-4xl mb-3 opacity-50"></i>
                                        <p class="text-sm">Belum ada pesan masuk kotak saran/pertanyaan.</p>
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
