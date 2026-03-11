<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Gallery Media:') }} {{ $gallery->event_name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 border-b border-gray-200">
                    
                    @if ($errors->any())
                        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="event_name" class="block text-gray-700 text-sm font-bold mb-2">Event / Image Name:</label>
                            <input type="text" name="event_name" id="event_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('event_name', $gallery->event_name) }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-gray-700 text-sm font-bold mb-2">Media Type:</label>
                            <select name="type" id="type" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="photo" {{ (old('type') ?? $gallery->type) == 'photo' ? 'selected' : '' }}>Photo</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="url" class="block text-gray-700 text-sm font-bold mb-2">Upload File Image: (Optional, biarkan kosong jika tidak ingin mengubah gambar)</label>
                            @if($gallery->url)
                                <div class="mb-2">
                                    <img src="{{ Storage::url($gallery->url) }}" alt="Current Media" class="h-32 w-auto object-cover rounded border">
                                </div>
                            @endif
                            <input type="file" name="url" id="url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" accept="image/*">
                        </div>

                        <div class="mb-6">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description (Optional):</label>
                            <textarea name="description" id="description" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $gallery->description) }}</textarea>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-primary hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition">
                                Update Media
                            </button>
                            <a href="{{ route('admin.galleries.index') }}" class="inline-block align-baseline font-bold text-sm text-emerald-500 hover:text-emerald-800 transition">
                                Cancel
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
