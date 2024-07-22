<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'hello',
        'name' => 'kent'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'programmer',
                'description' => 'sdfsdfsd',
                'salary' => '$12,000'
            ],
            [
                'id' => 2,
                'title' => 'teacher',
                'description' => 'sdfsdfsd',
                'salary' => '$10,000'
            ],
        ]
    ]);
});

Route::get('/about/{id}', function ($id) {
    $jobs = [
            [
                'id' => 1,
                'title' => 'programmer',
                'description' => 'sdfsdfsd',
                'salary' => '$12,000'
            ],
            [
                'id' => 2,
                'title' => 'teacher',
                'description' => 'sdfsdfsd',
                'salary' => '$10,000'
            ],
        ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    
    return view('job-details', ['job' => $job]);
});

#day2 - assignment
Route::get('/contact', function () {
    return view('contact');
});