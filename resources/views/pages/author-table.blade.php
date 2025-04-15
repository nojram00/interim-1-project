<x-main-layout>
    <section class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6">Authors</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">ID</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">Author Name</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">Author Age</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">Address</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $author->id }}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $author->name }}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $author->age ?? 'N/A' }}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $author->address ?? 'N/A' }}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                <a href="{{ route('author', $author->id) }}" class="text-blue-600 hover:underline">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-main-layout>