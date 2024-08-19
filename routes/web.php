<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

// home page
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello there! Looking for your next career opportunity? Find a job that fits your skills and interests on our website. Explore a wide range of job listings across various industries, apply online, and take the next step towards your dream job today!',
    ]);

    // $jobs = Job::all();

    // dd($jobs);
});

// job listings page
Route::get('/job-listings', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(10);
    // $jobs = Job::all();

    $count = Job::all()->count();

    return view('job-listings.index', [
        'jobs' => $jobs,
        'count' => $count,
    ]);
});

// create job listings
Route::get('/job-listings/create', function () {
    return view('job-listings.create');
});

// show job listings
Route::get('/job-listings/{id}', function ($id) {
    $job = Job::find($id);

    return view('job-listings.show', [
        'job' => $job,
    ]);
});

// after create job listings | store
Route::post('/job-listings', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/job-listings');
});

// edit job listings
Route::get('/job-listings/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('job-listings.edit', [
        'job' => $job,
    ]);
});

// updating job listings
Route::patch('/job-listings/{id}', function ($id) {
    // TO DO : validate -> authorize -> update -> persist -> redirect to the show page

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/job-listings/' . $job->id);
});

// deleting job listings
Route::delete('/job-listings/{id}', function ($id) {
    // TO DO : authorize -> delete -> redirect to the show page

    Job::findOrFail($id)->delete();

    return redirect('/job-listings');
});

#day2 - assignment
Route::get('/contact', function () {
    return view('contact');
});