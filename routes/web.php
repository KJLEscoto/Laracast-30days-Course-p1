<?php

use App\Http\Controllers\JobListingController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('test', function () {
    // return new JobPosted();

    $job = Job::first();

    TranslateJob::dispatch($job);

    return 'Done';
});

// home page
Route::view(
    '/',
    'home',
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
    Route::post('/job-listings', 'store')->middleware('auth');

    Route::get('/job-listings/{job}/edit', 'edit')
        ->middleware('auth')
        ->can('edit', 'job'); // policy

    Route::patch('/job-listings/{job}', 'update')->middleware('auth');
    Route::delete('/job-listings/{job}', 'destroy')->middleware('auth');
});

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

// day2 - assignment
// Route::get('/contact', function () {
//     return view('contact');
// });