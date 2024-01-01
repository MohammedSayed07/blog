@props(['name'])
<div>
    <x-form.label name="{{ $name }}"/>

    <input class="border border-gray-400 w-full p-2 rounded-lg"
           name="{{ $name }}"
           id="{{ $name }}"
           placeholder="{{ ucwords($name) }}"
           value="{{ old($name) ?? '' }}"
           {{ $attributes }}
           required/>

    <x-form.error name="{{ $name }}"/>
</div>
