<x-layout>
  <x-slot:heading>About</x-slot:heading>
  <!-- <h1 class="text-lg">About Page Content</h1> -->
  <ul>
    <li class="flex gap-3">
      @foreach ($jobs as $job)
      <a href="/about/{{ $job['id'] }}">
        <div class="relative p-5 shadow hover:opacity-90 bg-slate-500 rounded">
          <div
            class="absolute inset-0 bg-center bg-no-repeat bg-cover blur-[1px] rounded bg-[url('{{ $job['image'] }}')]">
          </div>
          <div class="relative z-10">
            <h1 class="text-white tracking-wide capitalize font-bold">{{ $job['title'] }}</h1>
          </div>
        </div>
      </a>
      @endforeach
    </li>
  </ul>
</x-layout>