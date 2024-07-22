<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'hello',
        'name' => 'kent'
    ]);
});

Route::get('/about', function () {
    return view('about', ['jobs' => Job::all()]);
});

Route::get('/about/{id}', function ($id) {
    $job = Job::find($id);
    
    return view('job-details', ['job' => $job]);
});

#day2 - assignment
Route::get('/contact', function () {
    return view('contact');
});