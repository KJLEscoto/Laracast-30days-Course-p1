<x-layout>
    <x-slot:heading>Edit Job Listings</x-slot:heading>

    <form method="POST" action="/job-listings/{{ $job->id }}" class="flex flex-col gap-5 mt-3 w-1/3">
        @csrf
        @method('PATCH')

        <section class="flex flex-col gap-2">
            <x-form-label for="title">Title</x-form-label>
            <x-form-input value="{{ $job->title }}" name="title" id="title" placeholder="Programmer" />
            <x-form-error name="title" />
        </section>

        <section class="flex flex-col gap-2">
            <x-form-label for="salary">Salary per Month</x-form-label>
            <x-form-input value="{{ $job->salary }}" name="salary" id="salary" placeholder="0" />
            <x-form-error name="salary" />
        </section>

        <!-- @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }} </li>
      @endforeach
    </ul>
    @endif -->

        <div class="flex justify-between items-center">
            <x-primary-button form="delete-form" class="bg-red-500 hover:bg-red-500/80 text-gray-200">Delete
            </x-primary-button>
            <div class="flex items-center gap-2">
                <x-secondary-button href="/job-listings/{{ $job->id }}">Cancel</x-secondary-button>
                <x-primary-button class="bg-slate-500 hover:bg-slate-500/80 text-gray-200">Update</x-primary-button>
            </div>
        </div>
    </form>

    <form method="POST" action="/job-listings/ {{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
