<x-layout>
    <x-slot:heading>
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-5">
                <div class="relative">
                    <h1>Job Listings</h1>
                    <h5 class="absolute -top-3 -right-3 text-sm">({{ $count }})</h5>
                </div>
                <x-secondary-button href="/job-listings/create"> + Create New</x-secondary-button>
            </div>
            <div class="flex gap-2">
                {{ $jobs->links() }}
            </div>
        </div>
    </x-slot:heading>

    <div class="h-auto w-full">
        <ul class="grid sm:grid-cols-2 grid-cols-1 gap-4">
            @foreach ($jobs as $job)
            <a href="/job-listings/{{ $job['id'] }}">
                <li
                    class="border border-slate-300 bg-slate-100 p-5 rounded hover:bg-white flex items-center justify-between">
                    <div class="flex flex-col">
                        <h1 class="text-lg font-medium text-blue-900">{{ $job['title'] }}</h1>
                        <span class="text-gray-400 tracking-wide capitalize font-bold text-sm">
                            {{ $job->employer->name }}
                        </span>
                    </div>
                    <div class="font-bold text-blue-900">
                        Pays: ${{ $job['salary'] }}
                    </div>
                </li>
            </a>
            @endforeach
        </ul>

        <!-- success alert -->
        @if(session('success'))
        <div class="flex justify-center">
            <div id="success" class="absolute top-24">
                <div class="px-7 py-4 bg-green-600 text-sm font-medium rounded text-white cursor-default">
                    {{ session('success') }}
                </div>
            </div>
        </div>
        @endif
    </div>
</x-layout>

<script>
const success = document.getElementById('success');

// Set the timeout to hide the success after 3 seconds (3000 milliseconds)
setTimeout(() => {
    success.style.opacity = '0'; // Fade out the success
    setTimeout(() => {
        success.remove(); // Remove the success from the DOM
    }, 1000); // Wait for 1 second before removing it completely
}, 3000); // Display the success for 3 seconds
</script>