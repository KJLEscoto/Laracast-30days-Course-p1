<x-layout>
  <x-slot:heading>
    <div class="flex justify-between items-center mb-3">
      <h1>Job Listings</h1>
      <div class="flex gap-2">
        {{ $jobs->links() }}
      </div>
    </div>
  </x-slot:heading>

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

  </div>
</x-layout>
