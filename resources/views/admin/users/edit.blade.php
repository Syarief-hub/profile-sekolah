<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <a href="{{ route('admin.users.index') }}" class="text-slate-500 hover:text-primary transition">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Edit Akun Pengguna') }}
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

                    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-6">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap:</label>
                            <input type="text" name="name" id="name" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('name', $user->name) }}" required>
                        </div>

                        <div class="mb-6">
                            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                            <input type="text" name="username" id="username" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" value="{{ old('username', $user->username) }}" required>
                        </div>

                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <h3 class="font-bold text-lg text-slate-800 mb-4">Ganti Password (Opsional)</h3>
                            <p class="text-sm text-slate-500 mb-6">Kosongkan kolom password di bawah ini jika Anda tidak ingin mengubah password akun ini.</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                                <div x-data="{ show: false }">
                                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password Baru:</label>
                                    <div class="relative">
                                        <input :type="show ? 'text' : 'password'" name="password" id="password" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 pl-3 pr-10 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" minlength="8">
                                        <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-primary focus:outline-none">
                                            <i class="fa-solid" :class="show ? 'fa-eye-slash' : 'fa-eye'"></i>
                                        </button>
                                    </div>
                                </div>
                                <div x-data="{ show: false }">
                                    <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Password Baru:</label>
                                    <div class="relative">
                                        <input :type="show ? 'text' : 'password'" name="password_confirmation" id="password_confirmation" class="shadow-sm border-slate-200 rounded-lg w-full py-2.5 pl-3 pr-10 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" minlength="8">
                                        <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-primary focus:outline-none">
                                            <i class="fa-solid" :class="show ? 'fa-eye-slash' : 'fa-eye'"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-6 border-t border-slate-100">
                            <a href="{{ route('admin.users.index') }}" class="text-slate-500 hover:text-slate-700 font-bold py-2 px-4 mr-4 transition">Batal</a>
                            <button type="submit" class="bg-primary hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-primary/30 shadow-md hover:shadow-lg transition hover:-translate-y-0.5 flex items-center gap-2">
                                <i class="fa-solid fa-save"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

