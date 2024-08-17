@props(['active' => false])

{{-- day3 assignment --}}
<a {{ $attributes }}
  class="{{ $active ? 'bg-slate-800 text-white' : 'hover:bg-slate-600 text-gray-400'}} rounded px-5 py-2">{{ $slot }}
</a>
