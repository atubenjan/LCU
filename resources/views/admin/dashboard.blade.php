@extends('layouts.admin')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- Cards -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold">Total Users</h2>
        <p class="text-2xl">03</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold">Upcoming Events</h2>
        <p class="text-2xl">13</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-lg font-semibold">Blog Posts</h2>
        <p class="text-2xl">30</p>
    </div>
</div>

<div class="mt-8">
    <h2 class="text-xl font-semibold">Recent Activity</h2>
    <!-- Recent Activity List -->
</div>
@endsection