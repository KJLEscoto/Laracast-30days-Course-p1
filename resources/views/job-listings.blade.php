<x-layout>
  <x-slot:heading>Job Listings</x-slot:heading>

  <ul class="grid sm:grid-cols-2 grid-cols-1 gap-2">
    @foreach ($jobs as $job)
    <a href="/job-listings/{{ $job['id'] }}">
      <li class="border border-slate-300 p-5 rounded hover:bg-slate-300 flex items-center justify-between">
        <div class="flex flex-col">
          <h1 class="text-lg font-medium text-blue-900">{{ $job['title'] }}</h1>
          <span class="text-gray-400 tracking-wide capitalize font-bold text-sm">{{ $job->employer->name }}</span>
        </div>
        <div class="font-bold text-blue-900">
          Pays: ${{ $job['salary'] }}
        </div>
      </li>
    </a>
    @endforeach
  </ul>

  <div>
    {{ $jobs->links() }}
  </div>
</x-layout>