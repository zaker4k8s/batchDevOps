<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

// Define a route that returns a view
Route::get('/', function () {
    return view('welcome');
});

// Define a route with a controller method
Route::get('/about', [ExampleController::class, 'about']);

// Define a route with a parameter
Route::get('/user/{id}', function ($id) {
    return "User ID is: " . $id;
});

// Define a route for a POST request
Route::post('/submit', function () {
    return 'Form submitted!';
});

// Define a route with named route
Route::get('/contact', [ExampleController::class, 'contact'])->name('contact');

// Define a route that uses a middleware
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
