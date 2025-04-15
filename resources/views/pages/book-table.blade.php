<x-main-layout>
    <section class="container mx-auto mt-10">
        <h2 class="text-2xl font-bold mb-6">Books Table</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">ID</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">Title</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">Author</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">Published Date</th>
                        <th class="px-6 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-sm font-semibold text-gray-600 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $book->id }}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $book->title }}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $book->author ?? 'N/A' }}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">{{ $book->published_date ?? 'N/A' }}</td>
                            <td class="px-6 py-4 border-b border-gray-200 text-sm text-gray-700">
                                <a href="{{ route('book', $book->id) }}" class="text-blue-600 hover:underline">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-main-layout>