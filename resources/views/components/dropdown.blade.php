@props(['trigger'])

<div x-data="{ show: false }" {{ $attributes(['class' => 'relative']) }}>
    <div @click="show = !show">
        {{ $trigger }}
    </div>

    <div x-show="show" class="mt-1 bg-gray-100 py-2 absolute w-full z-40 rounded-xl max-h-52 overflow-auto" style="display: none;">
        {{ $slot }}
    </div>
</div>
