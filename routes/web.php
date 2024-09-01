<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('best', function () {
    return view('best');
});

Route::get('menu', function () {
    return view('menu');
});

Route::get('reviews', function () {
    return view('reviews');
});

Route::get('login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate'])->name('index2');

Route::resource('register', RegisterController::class);

Route::get('dashboard', function () {
    return view('dashboard.menu');
})->middleware('auth');
