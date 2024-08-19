<x-layout>

  <x-slot:heading>
    <div class="flex justify-between items-center">
      <div class="flex">
        <a href="/job-listings"
          class="py-2 px-5 text-sm bg-slate-300 hover:bg-slate-400 rounded text-gray-700 font-medium">Back</a>
      </div>
      <h1 class="">{{ $job->title }}</h1>
      <div class="flex">
        <a href="/job-listings/{{ $job->id }}/edit"
          class="py-2 px-5 text-sm bg-slate-500 hover:bg-slate-600 rounded text-gray-200 font-medium">Edit Job</a>
      </div>
    </div>
  </x-slot:heading>
  <p>
    This job pays <strong>${{ $job->salary }}</strong> per year.
  </p>
</x-layout>