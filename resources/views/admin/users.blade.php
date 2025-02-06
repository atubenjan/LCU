@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-semibold text-white">Users</h1>
<div class="mt-4">
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">ID</th>
                <th class="py-2">Name</th>
                <th class="py-2">Email</th>
                <th class="py-2">Password</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through users -->
            @foreach($users as $user)
            <tr>
                <td class="py-2">{{ $user->id }}</td>
                <td class="py-2">{{ $user->name }}</td>
                <td class="py-2">{{ $user->email }}</td>
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