<x-layout>
  <x-slot:heading>About</x-slot:heading>
  <!-- <h1 class="text-lg">About Page Content</h1> -->
  <strong class="capitalize">{{ $job['title'] }}</strong>
  <p>Description: {{ $job['description'] }}.</p>
  <p>
    This job pays <strong>{{ $job['salary'] }}</strong> per year.
  </p>
</x-layout>