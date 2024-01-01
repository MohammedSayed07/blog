<x-dropdown class="w-full">
    <x-slot name="trigger">
        <button class="w-full py-3 pr-16 pl-4 text-sm font-semibold lg:inline-flex block text-left"
                @click.outside="show = false">
            {{ request('category') !== null ? ucwords(request('category')) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute right-5 top-2.5 pointer-events-none"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active="!request('category')">
        All
    </x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item href="?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
                         :active="request('category') === $category->slug">
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
