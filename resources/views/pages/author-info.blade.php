<x-main-layout>
    <section class="container mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-bold mb-4">Author Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Author Details -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Name:</h3>
                    <p class="text-gray-600">{{ $author->name }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Age:</h3>
                    <p class="text-gray-600">{{ $author->age ?? 'N/A' }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Email:</h3>
                    <p class="text-gray-600">{{ $author->email ?? 'N/A' }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Address:</h3>
                    <p class="text-gray-600">{{ $author->address ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('authors') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">
                Back to Authors Table
            </a>
        </div>
    </section>
</x-main-layout>