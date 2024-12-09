<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Channeling</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('icon.png') }}" type="image/png">


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="flex justify-between items-center p-5 bg-blue-600 text-white">
        <div class="flex items-center space-x-4">
            <svg class="h-10 w-auto" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- SVG Logo goes here -->
            </svg>
            <span class="text-2xl font-semibold">Doctor Channeling</span>
        </div>

        @if (Route::has('login'))
        <nav class="flex space-x-4">
            @auth
            <a href="{{ url('/dashboard') }}" class="px-4 py-2 rounded bg-green-500 hover:bg-green-600 text-white">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 text-white">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 text-white">Register</a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <main class="max-w-7xl mx-auto py-20 px-4">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/icon.png') }}" alt="Logo" width="13%">
        </div>
        <div class="text-center">
            <h1 class="text-5xl font-extrabold text-blue-700 mb-4">Welcome to Doctor Channeling</h1>
            <p class="text-lg text-gray-700 mb-6">A simple platform to channel doctors directly.</p>

            <div class="flex justify-center">
                @auth
                <a href="{{ url('/dashboard') }}" class="px-6 py-3 text-lg font-semibold bg-green-500 hover:bg-green-600 text-white rounded-md">Go to Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="px-6 py-3 text-lg font-semibold bg-blue-500 hover:bg-blue-600 text-white rounded-md">Log in</a>
                <a href="{{ route('register') }}" class="px-6 py-3 ml-4 text-lg font-semibold bg-blue-500 hover:bg-blue-600 text-white rounded-md">Register</a>
                @endauth
            </div>
        </div>
        <div>
            
        </div>

    </main>

    <footer class="bg-blue-600 text-white text-center py-4">
        <p>&copy; 2024 Doctor Channeling. All rights reserved.</p>
    </footer>
</body>

</html>
