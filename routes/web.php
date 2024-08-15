<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello there! Looking for your next career opportunity? Find a job that fits your skills and interests on our website. Explore a wide range of job listings across various industries, apply online, and take the next step towards your dream job today!',
    ]);

    // $jobs = Job::all();

    // dd($jobs);
});

Route::get('/job-listings', function () {
    $jobs = Job::with('employer')->simplePaginate(6);
    // $jobs = Job::all();

    return view('job-listings', [
        'jobs' => $jobs,
    ]);
});

Route::get('/job-listings/{id}', function ($id) {
    $job = Job::find($id);

    return view('job-details', [
        'job' => $job,
    ]);
});

#day2 - assignment
Route::get('/contact', function () {
    return view('contact');
});