<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route for the loading page
Route::get('/', function () {
    return view('loding');
});

// Route for the home page
Route::get('/home', function () {
    return view('home');
});

// Other routes for different pages
Route::get('/news', function () {
    return view('news');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/academics', function () {
    return view('academics');
});

Route::get('/about', function () {
    return view('about');
});
