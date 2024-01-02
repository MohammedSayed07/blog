@props(['name'])
<div>
    <x-form.label name="{{ $name }}"/>

    <input class="border border-gray-200 w-full p-2 rounded"
           name="{{ $name }}"
           id="{{ $name }}"
           placeholder="{{ ucwords($name) }}"
           {{ $attributes(['value'=>old($name)]) }}
           />

    <x-form.error name="{{ $name }}"/>
</div>
