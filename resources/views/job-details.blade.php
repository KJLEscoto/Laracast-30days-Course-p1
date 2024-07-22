<x-layout>
  <x-slot:heading>About</x-slot:heading>
  <!-- <h1 class="text-lg">About Page Content</h1> -->
  <h2>{{ $job['title'] }}</h2>
  <p>
    This job pays {{ $job['salary'] }} per year.
  </p>
</x-layout>