<button type="submit" {{ $attributes->merge([ 'class' => 'py-2 px-5 text-sm rounded font-medium' ]) }}>
    {{ $slot }}
</button>