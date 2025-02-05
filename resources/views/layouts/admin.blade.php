<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 min-h-screen p-4">
            <h1 class="text-2xl font-bold">ADMIN</h1>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('admin.users') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Users</a>
                <a href="{{ route('admin.events') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Events</a>
                <a href="{{ route('admin.posts') }}" class="block py-2.5 px-4 rounded hover:bg-gray-700">Blog Posts</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>