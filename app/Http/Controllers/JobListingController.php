<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobListingController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(10);
        // $jobs = Job::all();

        $count = Job::all()->count();

        return view('job-listings.index', [
            'jobs' => $jobs,
            'count' => $count,
        ]);
    }

    public function create()
    {
        return view('job-listings.create');
    }

    public function show(Job $job)
    {
        return view('job-listings.show', [
            'job' => $job,
        ]);
    }

    public function store()
    {
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
    }

    public function edit(Job $job)
    {
        return view('job-listings.edit', [
            'job' => $job,
        ]);
    }

    public function update(Job $job)
    {
        // TO DO : validate -> authorize -> update -> persist -> redirect to the show page

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/job-listings/' . $job->id);
    }

    public function destroy(Job $job)
    {
        // TO DO : authorize -> delete -> redirect to the show page

        $job->delete();

        return redirect('/job-listings');
    }
}