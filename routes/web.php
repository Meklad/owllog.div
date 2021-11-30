<?php

use App\Models\Message;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

// Laravel routes
Route::get('/', function () {
    return view('welcome');
});


// Inertia routes
Route::get('/hello', function() {
    return Inertia::render('Hello', ['message' => 'Hey There...']);
});

Route::get('/contact-us', function() {
    return Inertia::render('ContactUs');
});

Route::get('/messages', function() {
    $messages = Message::all();
    return Inertia::render('Messages', ['messages' => $messages]);
});
