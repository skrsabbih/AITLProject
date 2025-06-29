<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to {{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center space-y-4 max-w-md">
        <h1 class="text-3xl font-bold text-gray-800">Welcome to {{ config('app.name') }}</h1>
        <p class="text-gray-600">Your Laravel + Breeze + Tailwind app is ready to go!</p>

        <div class="flex justify-center space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-800">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Login</a>
                <a href="{{ route('register') }}" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Register</a>
            @endauth
        </div>
    </div>
</body>
</html>
