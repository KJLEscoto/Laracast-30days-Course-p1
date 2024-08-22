<x-layout>
    <x-slot:heading>
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-5">
                <div class="relative">
                    <h1>Job Listings</h1>
                    <h5 class="absolute -top-3 -right-3 text-sm">({{ $count }})</h5>
                </div>
                <a href="/job-listings/create"
                    class="py-1 px-3 text-sm bg-slate-500 hover:bg-slate-600 rounded text-gray-200 font-medium">+
                    Create New</a>
            </div>
            <div class="flex gap-2">
                {{ $jobs->links() }}
            </div>
        </div>
    </x-slot:heading>

    <ul class="grid sm:grid-cols-2 grid-cols-1 gap-4">
        @foreach ($jobs as $job)
        <a href="/job-listings/{{ $job['id'] }}">
            <li
                class="border border-slate-300 bg-slate-100 p-5 rounded hover:bg-white flex items-center justify-between">
                <div class="flex flex-col">
                    <h1 class="text-lg font-medium text-blue-900">{{ $job['title'] }}</h1>
                    <span
                        class="text-gray-400 tracking-wide capitalize font-bold text-sm">{{ $job->employer->name }}</span>
                </div>
                <div class="font-bold text-blue-900">
                    Pays: ${{ $job['salary'] }}
                </div>
            </li>
        </a>
        @endforeach
    </ul>

    <div>

    </div>
</x-layout>