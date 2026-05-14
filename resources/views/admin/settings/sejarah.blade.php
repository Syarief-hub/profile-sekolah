<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                <i class="fa-solid fa-clock-rotate-left text-primary/70"></i> {{ __('Informasi Sejarah Sekolah') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
                <div class="p-8 text-gray-900">
                    
                    @if (session('success'))
                        <div class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
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

                    <form action="{{ route('admin.settings.sejarah.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-6">
                            <label for="sejarah_content" class="block text-gray-700 text-sm font-bold mb-2 border-b pb-2">
                                Konten Sejarah Sekolah
                            </label>
                            <p class="text-sm text-gray-500 mb-3">Anda dapat menggunakan tag HTML untuk memformat teks (misalnya: &lt;p&gt;, &lt;strong&gt;, &lt;br&gt;).</p>
                            <textarea name="sejarah_content" id="sejarah_content" rows="15" class="shadow-sm border-slate-200 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition" required>{{ old('sejarah_content', $settings['sejarah_content'] ?? '') }}</textarea>
                        </div>

                        <div class="flex items-center justify-end mt-4 pt-6 border-t border-slate-100">
                            <button type="submit" class="bg-primary hover:bg-emerald-700 text-white font-bold py-3 px-8 rounded-full focus:outline-none focus:ring-4 focus:ring-primary/30 shadow-md hover:shadow-lg transition hover:-translate-y-0.5 flex items-center gap-2">
                                <i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
