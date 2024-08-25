<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobListingController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(10);
        // $jobs = Job::all();

        $count = Job::all()->count(); // sum of all jobs

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

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 11,
        ]);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job)
        );

        return redirect('/job-listings')->with('success', 'Job has been posted successfully!');
    }

    public function edit(Job $job)
    {

        // if (Auth::guest()) {
        //     return redirect('/login');
        // }

        // can do allows and denies method handle if
        // Gate::authorize('edit-job', $job); // 403

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