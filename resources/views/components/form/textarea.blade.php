@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <textarea class="w-full bg-yellow-200 rounded text-sm focus:outline-none focus:ring"
            name="{{ $name }}"
            id="{{ $name }}"
            cols="30"
            rows="5"
            required
    >{{ old($name) }}</textarea>
    <x-form.error name="{{ $name }}"/>
</x-form.field>
