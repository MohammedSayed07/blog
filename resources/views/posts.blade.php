<x-layout>
    @include('_posts-header')
    <main class="max-w-6xl mx-auto mt-14 space-y-8">
        @if($posts->count())
            <x-post-featured-card :post="$posts[0]"/>

            <div class="lg:grid lg:grid-cols-6">
                @if($posts->count() > 1)
                    @foreach($posts->skip(1) as $post)
                        <x-post-card :post="$post" class="{{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"/>
                    @endforeach
                @endif
            </div>
        @else
            <p class="text-center">there is no posts yet. pleace check later</p>
        @endif
    </main>
</x-layout>
