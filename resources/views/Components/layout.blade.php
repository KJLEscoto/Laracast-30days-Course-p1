<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laracast - 30 days Course</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="h-screen w-full bg-gray-200">
    <nav class="h-20 w-full bg-gray-500 text-white flex items-center px-20">
      <x-nav-link href="/">Home</x-nav-link>
      <x-nav-link href="/about">About</x-nav-link>
      <x-nav-link href="/contact">Contact</x-nav-link>
    </nav>
    <div class="px-20 py-10 flex flex-col gap-3 h-auto w-full">
      <div class="text-xl font-bold w-full border-b border-gray-400 pb-1">{{ $heading }}</div>
      {{ $slot }}
    </div>
  </div>
</body>

</html>