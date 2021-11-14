@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg:bg-yellow-300 hover:bg-yellow-300 focus:bg-yellow-300';

    if($active) $classes .= ' bg-yellow-300';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
