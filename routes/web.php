<?php

use Illuminate\Support\Facades\Route;

//Routes to Admin-dashboard
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/users', function () {
        $users = []; // Fetch users from database
        return view('admin.users', ['users' => $users]);
    })->name('admin.users');

    Route::get('/event', function () {
        $events = []; // Fetch events from database
        return view('admin.event', ['event' => $events]);
    })->name('admin.event');

    Route::get('/posts', function () {
        $posts = []; // Fetch posts from database
        return view('admin.posts', ['posts' => $posts]);
    })->name('admin.posts');
});


//User Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/sgnin', function () {
    return view('signin');
})->name('signin');