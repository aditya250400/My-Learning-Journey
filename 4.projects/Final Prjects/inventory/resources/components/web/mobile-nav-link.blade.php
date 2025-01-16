@props(['url' => ''])
<a href="{{ $url }}"
    {{ $attributes->merge(['class' => 'font-semibold p-2 rounded-lg hover:bg-sky-700 hover:text-white']) }}>
    {{ $slot }}
</a>
