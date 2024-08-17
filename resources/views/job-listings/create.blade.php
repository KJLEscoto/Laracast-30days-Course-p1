<x-layout>
  <x-slot:heading>Create Job Listings</x-slot:heading>

  <p class="text-gray-700">We just need a handful of details.</p>

  <form method="POST" action="/job-listings" class="flex flex-col gap-5 mt-3 border-b border-slate-400 pb-10">
    @csrf
    <section class="flex flex-col gap-2">
      <label class="font-medium text-base" for="title">Title</label>
      <input name="title" id="title" type="text" class="w-1/3 p-2 rounded" placeholder="Programmer">
    </section>
    <section class="flex flex-col gap-2">
      <label class="font-medium text-base" for="salary">Salary</label>
      <input name="salary" id="salary" type="text" class="w-1/3 p-2 rounded" placeholder="00000">
    </section>

    <div class="flex items-center gap-2">
      <a href="/job-listings"
        class="py-2 px-5 text-sm bg-slate-300 hover:bg-slate-400 rounded text-gray-700 font-medium">
        Cancel
      </a>
      <button type="submit" class="py-2 px-5 text-sm bg-slate-500 hover:bg-slate-600 rounded text-gray-200 font-medium">
        Save
      </button>
    </div>
  </form>
</x-layout>