<x-layout>
  <x-slot:heading>Edit Job Listings</x-slot:heading>

  <form method="POST" action="/job-listings/{{ $job->id }}"
    class="flex flex-col gap-5 mt-3 border-b border-slate-400 pb-10">
    @csrf
    @method('PATCH')

    <section class="flex flex-col gap-2">
      <label class="font-medium text-base" for="title">Title</label>
      <input value="{{ $job->title }}" name="title" id="title" type="text" class="w-1/3 p-2 rounded"
        placeholder="Programmer" required>
      @error('title')
      <p class="text-sm text-red-500 font-medium italic -mt-1">{{ $message }}</p>
      @enderror
    </section>

    <section class="flex flex-col gap-2">
      <label class="font-medium text-base" for="salary">Salary</label>
      <input value="{{ $job->salary }}" name="salary" id="salary" type="text" class="w-1/3 p-2 rounded"
        placeholder="00000">
      @error('salary')
      <p class="text-sm text-red-500 font-medium italic -mt-1">{{ $message }}</p>
      @enderror
    </section>

    <!-- @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }} </li>
      @endforeach
    </ul>
    @endif -->

    <div class="flex gap-48 items-center">

      <button form="delete-form"
        class="py-2 px-5 text-sm bg-red-500 hover:bg-red-600 rounded text-gray-200 font-medium">
        Delete
      </button>
      <div class="flex items-center gap-2">
        <a href="/job-listings/{{ $job->id }}"
          class="py-2 px-5 text-sm bg-slate-300 hover:bg-slate-400 rounded text-gray-700 font-medium">
          Cancel
        </a>
        <button type="submit"
          class="py-2 px-5 text-sm bg-slate-500 hover:bg-slate-600 rounded text-gray-200 font-medium">
          Update
        </button>
      </div>
    </div>
  </form>

  <form method="POST" action="/job-listings/ {{ $job->id }}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
  </form>
</x-layout>