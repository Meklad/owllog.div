<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

// Laravel routes
Route::get('/', function () {
    return view('welcome');
});


// Inertia routes
Route::get('/hello', function() {
    return Inertia::render('Hello');
});

Route::get('/contact-us', function() {
    return Inertia::render('ContactUs');
});
