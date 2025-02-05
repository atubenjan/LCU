<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LCU</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body>
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-bold">
            <a href="{{ route('home') }}">Brand</a>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="{{ route('home') }}" class="text-gray-300 hover:text-white">Home</a>
            <a href="{{ route('events') }}" class="text-gray-300 hover:text-white">Events</a>
            <a href="{{ route('resources') }}" class="text-gray-300 hover:text-white">Resources</a>
            <a href="{{ route('blog') }}" class="text-gray-300 hover:text-white">Blog</a>
            <a href="{{ route('signin') }}" class="text-gray-300 hover:text-white">Sign In</a>
        </div>
        <div class="md:hidden">
            <button id="nav-toggle" class="text-gray-300 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    <div id="nav-menu" class="md:hidden hidden">
        <a href="{{ route('home') }}" class="block text-gray-300 hover:text-white px-2 py-1">Home</a>
        <a href="{{ route('events') }}" class="block text-gray-300 hover:text-white px-2 py-1">Events</a>
        <a href="{{ route('resources') }}" class="block text-gray-300 hover:text-white px-2 py-1">Resources</a>
        <a href="{{ route('blog') }}" class="block text-gray-300 hover:text-white px-2 py-1">Blog</a>
        <a href="{{ route('signin') }}" class="block text-gray-300 hover:text-white px-2 py-1">Sign In</a>
    </div>
</nav>

<div>
        @yield('content')
    </div>

<script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
        var navMenu = document.getElementById('nav-menu');
        navMenu.classList.toggle('hidden');
    });
</script>
</body>
</html>