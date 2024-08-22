@props(['name'])

@error($name)
<p class="text-sm text-red-500 font-medium italic -mt-1">{{ $message }}</p>
@enderror
