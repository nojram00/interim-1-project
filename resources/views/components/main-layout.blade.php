<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website - {{ Route::currentRouteName() }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">
    <header class="bg-blue-600 text-white py-4 px-3">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">My Website</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('home') }}" @class(['hover:underline', 'text-gray-200' => Route::currentRouteName() == 'home']) >Home</a></li>

                    <li><a href="{{ route('books') }}" @class(['hover:underline', 'text-gray-200' => Route::currentRouteName() == 'books'])>Books</a></li>

                    <li><a href="{{ route('authors') }}" @class(['hover:underline', 'text-gray-200' => Route::currentRouteName() == 'authors'])>Authors</a></li>

                    <li><a href="{{ route('publishers') }}" @class(['hover:underline', 'text-gray-200' => Route::currentRouteName() == 'publishers'])>Publishers</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-10 flex-grow px-4">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white py-4">


        <div class="container mx-auto text-center">
            <p>&copy; <span id="year"></span> My Website. All rights reserved.</p>
        </div>
        <script>
            // Get the current year
            const year = new Date().getFullYear();
            // Set the year in the footer
            document.getElementById('year').innerText = year;
        </script>
    </footer>
</body>
</html>