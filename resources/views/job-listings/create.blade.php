<x-layout>
    <x-slot:heading>Create Job Listings</x-slot:heading>

    <p class="text-gray-700">We just need a handful of details.</p>

    <form method="POST" action="/job-listings" class="flex w-1/3 flex-col gap-5 mt-3 pb-10">
        @csrf

        <x-form-field>
            <x-form-label for="title">Title</x-form-label>
            <x-form-input name="title" id="title" placeholder="Programmer" />
            <x-form-error name="title" />
        </x-form-field>

        <x-form-field>
            <x-form-label for="salary">Salary per Month</x-form-label>
            <x-form-input name="salary" id="salary" placeholder="0" />
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
            <x-secondary-button href="/job-listings">Cancel</x-secondary-button>
            <x-primary-button class="bg-slate-500 hover:bg-slate-500/80 text-gray-200">Save</x-primary-button>
        </div>
    </form>
</x-layout>
