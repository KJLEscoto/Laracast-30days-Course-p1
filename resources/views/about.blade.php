<x-layout>
  <x-slot:heading>About</x-slot:heading>
  <!-- <h1 class="text-lg">About Page Content</h1> -->
  <ul>
    @foreach ($jobs as $job)
    <li>
      <a href="/about/{{ $job['id'] }}" class="border border-red-500">{{ $job['title'] }}: {{ $job['salary'] }}
      </a>
    </li>
    @endforeach
  </ul>
</x-layout>