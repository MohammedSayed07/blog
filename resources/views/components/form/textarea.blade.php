@props(['name'])

<div>
    <x-form.label name="{{ $name }}"/>

    <textarea class="border border-gray-200 w-full p-2 rounded"
              type="text"
              name="{{ $name }}"
              id="{{ $name }}"
              required
              {{ $attributes }}
    >{{ old($name) ?? '' }}</textarea>

    <x-form.error name="{{ $name }}"/>
</div>
