<x-layout>

    <x-slot:heading>
        <div class="flex justify-between items-center">
            <div class="flex gap-10 items-center">
                <div class="flex">
                    <x-secondary-button href="/job-listings">Back</x-secondary-button>
                </div>
                <h1 class="">{{ $job->title }}</h1>
            </div>
            @can('edit', $job)
            <div>
                <x-secondary-button href="/job-listings/{{ $job->id }}/edit"
                    class="bg-slate-500 hover:bg-slate-500/80 text-slate-100">Edit Job
                </x-secondary-button>
            </div>
            @endcan
        </div>
    </x-slot:heading>
    <p>
        This job pays <strong>${{ $job->salary }}</strong> per year.
    </p>
</x-layout>
