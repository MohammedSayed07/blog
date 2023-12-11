@props(['post'])

<article class="transition-all duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="lg:flex lg:px-5 lg:py-6">
        <div class="flex-1 lg:mr-8">
            <img class="rounded-xl" src="/images/blog-photo.jpg" alt="blog-photo"/>
        </div>
        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-2 lg:mt-0">
                <div class="space-x-2">
                    <a class="text-blue-300 border border-blue-300 px-3 py-1 rounded-full uppercase font-semibold text-xs"
                       href="/categories/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </div>
                <div class="mt-4">
                    <a href="/posts/{{ $post->slug }}">
                        <h1 class="text-3xl">
                            {{ $post->title }}
                        </h1>
                    </a>
                    <span class="mt-2 block text-xs text-gray-400">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>
            <section class="text-sm mt-2">
                <p>
                    {{ $post->body }}
                </p>
            </section>
            <footer class="mt-8 flex justify-between items-center">
                <div class="flex items-center text-sm">
                    <img class="rounded-3xl" src="/images/head.png" width="64" alt="logo"/>
                    <div class="ml-3">
                        <a href="/authors/{{ $post->author->username }}">
                            <h5 class="font-bold">
                                {{ $post->author->name }}
                            </h5>
                        </a>
                        <h6>
                            Software developer
                        </h6>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <a class="text-xs font-semibold bg-gray-200 rounded-full px-8 mr-1 py-2" href="">
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
