<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Manage Gallery') }}
            </h2>
            <a href="{{ route('admin.galleries.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm transition">Add Media</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr class="text-left font-bold text-gray-600 border-b border-gray-200">
                                <th class="pb-3 px-4">Event Name</th>
                                <th class="pb-3 px-4">Type</th>
                                <th class="pb-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($galleries as $gallery)
                            <tr class="hover:bg-gray-50 border-b border-gray-100">
                                <td class="py-3 px-4">{{ $gallery->event_name }}</td>
                                <td class="py-3 px-4 capitalize">{{ $gallery->type }}</td>
                                <td class="py-3 px-4">
                                    <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="py-4 px-4 text-center text-gray-500">No gallery items found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
