<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//// Route of the main layout page 
Route::get('/', function () {
    return view('layout.main');
})->name('home');

//// Routes of navigation bar entries page 
// Route of the characters page 
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Route of the comics page 
Route::get('/comics', function () {
    $data_comics = config('comics');
    return view('comics', ['comics' => $data_comics]);
})->name('comics');

// Route of the movies page 
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Route of the tv page 
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// Route of the games page 
Route::get('/games', function () {
    return view('games');
})->name('games');

// Route of the collectibles page 
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// Route of the videos page 
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// Route of the fans page 
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// Route of the news page 
Route::get('/news', function () {
    return view('news');
})->name('news');

// Route of the shop page 
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
