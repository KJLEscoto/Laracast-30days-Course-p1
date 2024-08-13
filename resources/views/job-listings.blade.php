<x-layout>
  <x-slot:heading>Job Listings</x-slot:heading>
  <ul class="flex flex-wrap gap-3 w-full justify-center">
    @foreach ($jobs as $job)
    <li class="sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6">
      <a href="/job-listings/{{ $job['id'] }}">
        <div class="relative p-5 shadow hover:opacity-90 bg-slate-500 rounded">
          <div
            class="absolute inset-0 bg-center bg-no-repeat bg-cover blur-[1px] rounded bg-[url('{{ $job['image'] }}')]">
          </div>
          <div class="relative z-10">
            <h1 class="text-white tracking-wide capitalize font-bold">{{ $job['title'] }}</h1>
          </div>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
</x-layout>