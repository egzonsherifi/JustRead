@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input class="border border-gray-400 p-2 w-full bg-yellow-100 rounded"
           name="{{ $name }}"
           id="{{ $name }}"
           {{ $attributes(['value' => old($name)]) }}
    >
    <x-form.error name="{{ $name }}"/>
</x-form.field>
