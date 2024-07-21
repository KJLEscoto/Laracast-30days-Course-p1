<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

#day2 - assignment
Route::get('/contact', function () {
    return view('contact');
});