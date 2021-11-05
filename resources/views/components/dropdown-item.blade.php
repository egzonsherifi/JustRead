@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg:bg-gray-200 hover:bg-gray-200 focus:bg-gray-200';

    if($active) $classes .= ' bg-gray-200';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
