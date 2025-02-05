@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold">Blog Posts</h1>
<div class="mt-4">
    <button class="bg-blue-500 text-white px-4 py-2 rounded">Create Post</button>
    <table class="min-w-full bg-white mt-4">
        <thead>
            <tr>
                <th class="py-2">ID</th>
                <th class="py-2">Title</th>
                <th class="py-2">Date</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through posts -->
            @foreach($posts as $post)
            <tr>
                <td class="py-2">{{ $post->id }}</td>
                <td class="py-2">{{ $post->title }}</td>
                <td class="py-2">{{ $post->created_at }}</td>
                <td class="py-2">
                    <button class="text-blue-500 hover:text-blue-700">Edit</button>
                    <button class="text-red-500 hover:text-red-700">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection