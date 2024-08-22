<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JOB FINDER | Laracast - 30 days Course</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="https://www.industryconnect.org/wp-content/uploads/2016/10/software-developer-jobs.jpg"
        type="image/x-icon">
    <style>
    body {
        background-color: #e2e8f0;
    }
    </style>
</head>

<body>
    <div class="h-full w-full bg-slate-200">
        <nav class="h-auto w-full bg-slate-700 text-white flex items-center justify-between px-20 py-4">
            <div class="flex items-center gap-5">
                <a href="#">
                    <img class="w-12 h-12 shadow-lg rounded-full"
                        src="https://www.industryconnect.org/wp-content/uploads/2016/10/software-developer-jobs.jpg"
                        alt="pic">
                </a>
                <div class="flex items-center gap-1">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/job-listings" :active="request()->is('job-listings')">Job Listings</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </div>
            </div>
            <div class="flex items-center gap-1">
                @guest
                <x-nav-link href="/login" :active="request()->is('login')">Log In</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                @endguest
            </div>
        </nav>
        <div class="px-20 py-10 flex flex-col gap-3 h-auto w-full">
            <div class="text-xl font-bold w-full pb-1"> {{ $heading }} </div>
            <hr class="border-slate-400">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
