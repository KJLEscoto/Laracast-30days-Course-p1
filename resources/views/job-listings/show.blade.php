<x-layout>
  <div class="flex">
    <a href="/job-listings" class="underline text-blue-800 hover:opacity-70">Back</a>
  </div>
  <x-slot:heading>
    <h1 class="capitalize">{{ $job['title'] }}</h1>
  </x-slot:heading>
  <p>Description: {{ $job['description'] }}</p>
  <p>
    This job pays <strong>{{ $job['salary'] }}</strong> per year.
  </p>
</x-layout>