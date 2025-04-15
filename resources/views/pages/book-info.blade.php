<x-main-layout>
    <section class="container mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-bold mb-4">Book Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Book Details -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Title:</h3>
                    <p class="text-gray-600">{{ $book->title }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Author:</h3>
                    <p class="text-gray-600">{{ $book->author ?? 'N/A' }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Year Published</h3>
                    <p class="text-gray-600">{{ $book->year_published ?? 'N/A' }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Details:</h3>
                    <p class="text-gray-600">{{ $book->details ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('books') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">
                Back to Books Table
            </a>
        </div>
    </section>
</x-main-layout>