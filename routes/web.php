<?php

use Illuminate\Support\Facades\Route;

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