<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// home page
Route::view('/', 'home',
    [
        'greeting' => 'Hello there! Looking for your next career opportunity? Find a job that fits your skills and interests on our website. Explore a wide range of job listings across various industries, apply online, and take the next step towards your dream job today!',
    ]
);

// contact page
Route::view('/contact', 'contact');

// job listings page
// Route::resource('job', JobListingController::class); // if need cleaner code use this

Route::controller(JobListingController::class)->group(function () {
    Route::get('/job-listings', 'index');
    Route::get('/job-listings/create', 'create');
    Route::get('/job-listings/{job}', 'show');
    Route::post('/job-listings', 'store');
    Route::get('/job-listings/{job}/edit', 'edit');
    Route::patch('/job-listings/{job}', 'update');
    Route::delete('/job-listings/{job}', 'destroy');
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

// day2 - assignment
// Route::get('/contact', function () {
//     return view('contact');
// });
