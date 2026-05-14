<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <a href="{{ route('admin.users.index') }}" class="text-slate-500 hover:text-primary transition">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Tambah Akun Baru') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-8 text-gray-900">
                    @if ($errors->any())
                        <div class="mb-6 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded-xl relative">
                            <ul class="list-disc pl-5 text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap:</label>
                            <input type="text" name="name" id="name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('name') }}" placeholder="John Doe" required>
                        </div>

                        <div class="mb-6">
                            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                            <input type="text" name="username" id="username" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('username') }}" placeholder="johndoe123" required>
                            <p class="text-xs text-slate-500 mt-1">Gunakan huruf dan angka tanpa spasi.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div>
                                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
                                <input type="password" name="password" id="password" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required minlength="8">
                            </div>
                            <div>
                                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password:</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required minlength="8">
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-6 border-t border-slate-100">
                            <a href="{{ route('admin.users.index') }}" class="text-slate-500 hover:text-slate-700 font-bold py-2 px-4 mr-4 transition">Batal</a>
                            <button type="submit" class="bg-primary hover:bg-emerald-700 text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-primary/30 shadow-md hover:shadow-lg transition hover:-translate-y-0.5 flex items-center gap-2">
                                <i class="fa-solid fa-save"></i> Simpan Akun
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
