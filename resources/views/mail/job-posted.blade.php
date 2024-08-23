<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job is now live in our website.
</p>

<p>
    <a href="{{ url('/job-listings/' . $job->id) }}" class="capitalize">View your job listing</a>
</p>
