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
    $jobs = Job::with('employer')->latest()->simplePaginate(10);
    // $jobs = Job::all();

    return view('job-listings.index', [
        'jobs' => $jobs,
    ]);
});

Route::get('/job-listings/create', function () {
    return view('job-listings.create');
});

Route::get('/job-listings/{id}', function ($id) {
    $job = Job::find($id);

    return view('job-listings.show', [
        'job' => $job,
    ]);
});

Route::post('/job-listings', function () {
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/job-listings');
});

#day2 - assignment
Route::get('/contact', function () {
    return view('contact');
});