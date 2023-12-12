<header class="mt-16 text-center max-w-4xl mx-auto">
    <div class="max-w-xl mx-auto">
        <h1 class="text-4xl">
            Updates <span class="text-blue-500">For Everything</span> I Learn
        </h1>

        <div class="flex md:flex-row flex-col lg:justify-center lg:items-center lg:space-x-5 mt-5 space-y-2 lg:space-y-0">
            <div class="bg-gray-100 rounded-xl inline-flex items-center relative w-full">
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="w-full py-3 pr-16 pl-4 text-sm font-semibold lg:inline-flex block text-left" @click.outside="show = false">
                            {{ isset($currentCategory) ? $currentCategory->name : 'Categories' }}

                            <x-icon name="down-arrow" class="absolute right-5 top-2.5 pointer-events-none"/>
                        </button>
                    </x-slot>

                    <x-dropdown-item href="/" :active="request()->routeIs('home')">
                        All
                    </x-dropdown-item>

                    @foreach($categories as $category)
                        <x-dropdown-item href="/categories/{{ $category->slug }}"
                                         :active="request()->is('categories/'. $category->slug)">
                            {{ ucwords($category->name) }}
                        </x-dropdown-item>
                    @endforeach
                </x-dropdown>
            </div>

            <div class="bg-gray-100 rounded-xl inline-flex items-center relative">
                <svg class="absolute left-3 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 32 32"><path d="M21.15 19.74a12 12 0 1 0-1.41 1.41l10.55 10.56 1.41-1.41zM12 22a10 10 0 1 1 10-10 10 10 0 0 1-10 10z" data-name="49-Search"/></svg>
                <form method="GET">
                    <input class="transition-all duration-300 focus-within:outline-none appearance-none bg-transparent py-3 pr-8 pl-10 text-sm font-semibold placeholder-black"
                           placeholder="Find something?" type="text" name="search" value="{{ request('search') }}">
                </form>
            </div>
        </div>
    </div>
</header>
