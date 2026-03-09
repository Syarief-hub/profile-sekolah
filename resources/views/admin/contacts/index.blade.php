<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead>
                            <tr class="text-left font-bold text-gray-600 border-b border-gray-200">
                                <th class="pb-3 px-4">Date</th>
                                <th class="pb-3 px-4">Name</th>
                                <th class="pb-3 px-4">Subject</th>
                                <th class="pb-3 px-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contacts as $contact)
                            <tr class="hover:bg-gray-50 border-b border-gray-100">
                                <td class="py-3 px-4">{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                                <td class="py-3 px-4">{{ $contact->name }}</td>
                                <td class="py-3 px-4">{{ $contact->subject }}</td>
                                <td class="py-3 px-4">
                                    <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">View</a>
                                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="py-4 px-4 text-center text-gray-500">No messages found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
