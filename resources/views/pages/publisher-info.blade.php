<x-main-layout>
    <section class="container mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-bold mb-4">Publisher Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- publisher Details -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Name:</h3>
                    <p class="text-gray-600">{{ $publisher->name }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Address:</h3>
                    <p class="text-gray-600">{{ $publisher->address ?? 'N/A' }}</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Details</h3>
                    <p class="text-gray-600">{{ $publisher->details ?? 'N/A' }}</p>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('publishers') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">
                Back to Publishers Table
            </a>
        </div>
    </section>
</x-main-layout>
