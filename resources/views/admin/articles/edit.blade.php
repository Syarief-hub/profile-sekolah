<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit Article:') }} {{ $article->title }}
            </h2>
            <a href="{{ route('admin.articles.index') }}" class="text-gray-500 hover:text-gray-700 text-sm transition">Back to Articles</a>
        </div>
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

                    <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('title', $article->title) }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Category:</label>
                            <input type="text" name="category" id="category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('category', $article->category) }}" placeholder="e.g. Pengumuman, Prestasi, Kegiatan" required>
                        </div>

                        <div class="mb-4">
                            <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                            <input type="date" name="date" id="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('date', $article->date) }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="thumbnail" class="block text-gray-700 text-sm font-bold mb-2">Thumbnail Image: (Optional, Leave blank to keep current)</label>
                            @if($article->thumbnail)
                                <div class="mb-2">
                                    <img src="{{ Storage::url($article->thumbnail) }}" alt="Current Thumbnail" class="h-32 w-auto object-cover rounded border">
                                </div>
                            @endif
                            <input type="file" name="thumbnail" id="thumbnail" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" accept="image/*">
                        </div>

                        <div class="mb-6">
                            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                            <textarea name="content" id="content" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('content', $article->content) }}</textarea>
                            <p class="text-xs text-gray-500 mt-1">You may use HTML tags for formatting if needed.</p>
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-primary hover:bg-emerald-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition">
                                Update Article
                            </button>
                            <a href="{{ route('admin.articles.index') }}" class="inline-block align-baseline font-bold text-sm text-emerald-500 hover:text-emerald-800 transition">
                                Cancel
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
