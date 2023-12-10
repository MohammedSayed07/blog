<x-layout>
    <section class="px-5 py-2">
        <main class="max-w-6xl mx-auto mt-20">
            <article class="lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 text-center">
                    <img class="rounded-2xl" src="/images/blog-photo.jpg" alt="photo" />

                    <span class="mt-4 block text-xs text-gray-400">
                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                </span>

                    <div class="mt-4 flex items-center text-sm justify-center">
                        <img class="rounded-3xl" src="/images/head.png" width="64" alt="logo"/>
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                {{$post->author->name}}
                            </h5>
                            <h6 class="text-xs">
                                Software developer
                            </h6>
                        </div>
                    </div>

                </div>

                <div class="col-span-8 space-y-4 mt-5 lg:mt-0">
                    <div class="flex justify-between mb-7 mt-0 lg:-mt-14">
                        <a href="/" class="transition-colors duration-300 inline-flex items-center hover:text-blue-500 text-lg">
                            <svg class="mr-2 transform rotate-90" width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 15a1 1 0 0 1-.707-.293l-4-4a1 1 0 1 1 1.414-1.414L12 12.586l3.293-3.293a1 1 0 0 1 1.414 1.414l-4 4A1 1 0 0 1 12 15z" class="fill-current"/></svg>
                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <x-category-button :category="$post->category" />
                        </div>
                    </div>

                    <div>
                        <h1 class="text-4xl font-bold">
                            {{ $post->title }}
                        </h1>

                        <div class="mt-8 lg-text-lg">
                            {{ $post->body }}
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </section>
</x-layout>
