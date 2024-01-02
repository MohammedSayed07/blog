@props(['heading'])
<section class="px-5 py-2 max-w-5xl m-auto mt-10">
    <h3 class="font-bold text-xl mb-8 border-b pb-4">
        {{ $heading }}
    </h3>

    <div class="flex">
        <aside class="w-20 md:w-48">
            <p class="text-lg font-bold">
                Links
            </p>
            <ul class="mt-2">
                <li>
                    <a class="transition-colors duration-300 text-xs md:text-lg hover:text-blue-600
                    {{ request()->is('admin/posts') ? 'text-blue-600' : '' }}"
                       href="/admin/posts">
                        All Posts
                    </a>
                </li>

                <li>
                    <a
                        class="transition-colors duration-300 text-xs md:text-lg hover:text-blue-600
                        {{ request()->is('admin/posts/create') ? 'text-blue-600' : '' }}"
                        href="/admin/posts/create">
                        Create Posts
                    </a>
                </li>
            </ul>
        </aside>

        <main class="flex-1">
            <div class="shadow border border-gray-100 p-8">
                {{ $slot }}
            </div>
        </main>
    </div>
</section>
