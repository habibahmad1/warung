<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});
