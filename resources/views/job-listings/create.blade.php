<x-layout>
    <x-slot:heading>Create Job Listings</x-slot:heading>

    <p class="text-gray-700">We just need a handful of details.</p>

    <form method="POST" action="/job-listings/{{ $job->id }} " class="flex w-1/3 flex-col gap-5 mt-3 pb-10">
        @csrf

        <x-form-field>
            <x-form-label for="title">Title</x-form-label>
            <x-form-input name="title" id="title" placeholder="Programmer" />
            <x-form-error name="title" />
        </x-form-field>

        <x-form-field>
            <x-form-label for="salary">Salary</x-form-label>
            <x-form-input name="salary" id="salary" placeholder="00000" />
            <x-form-error name="salary" />
        </x-form-field>

        <!-- @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }} </li>
      @endforeach
    </ul>
    @endif -->

        <div class="flex items-center gap-2">
            <a href="/job-listings"
                class="py-2 px-5 text-sm bg-slate-300 hover:bg-slate-400 rounded text-gray-700 font-medium">
                Cancel
            </a>
            <button type="submit"
                class="py-2 px-5 text-sm bg-slate-500 hover:bg-slate-600 rounded text-gray-200 font-medium">
                Save
            </button>
        </div>
    </form>
</x-layout>