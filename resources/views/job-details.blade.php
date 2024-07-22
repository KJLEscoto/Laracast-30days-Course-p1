<x-layout>
  <x-slot:heading>
    <h1 class="capitalize">{{ $job['title'] }}</h1>
  </x-slot:heading>
  <p>Description: {{ $job['description'] }}</p>
  <p>
    This job pays <strong>{{ $job['salary'] }}</strong> per year.
  </p>
</x-layout>