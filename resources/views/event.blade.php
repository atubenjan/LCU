@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-semibold">Events</h1>
<div class="mt-4">
    <button class="bg-blue-500 text-white px-4 py-2 rounded">Create Event</button>
    <table class="min-w-full bg-white mt-4">
        <thead>
            <tr>
                <th class="py-2">ID</th>
                <th class="py-2">Name</th>
                <th class="py-2">Date</th>
                <th class="py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through events -->
            @foreach($events as $event)
            <tr>
                <td class="py-2">{{ $event->id }}</td>
                <td class="py-2">{{ $event->name }}</td>
                <td class="py-2">{{ $event->date }}</td>
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