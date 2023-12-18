<x-layout>
    @include('posts._header')
    <main class="max-w-6xl mx-auto mt-14 space-y-8">
        @if($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">there is no posts yet. pleace check later</p>
        @endif
    </main>
</x-layout>
