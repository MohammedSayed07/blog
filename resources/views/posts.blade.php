<x-layout>
    @include('_posts-header')
    <main class="max-w-6xl mx-auto mt-14 space-y-8">
        <x-post-featured-card />

        <div class="lg:grid lg:grid-cols-2">
            <x-post-card />
            <x-post-card />
        </div>

        <div class="lg:grid lg:grid-cols-3">
            <x-post-card />
            <x-post-card />
            <x-post-card />
        </div>
    </main>
</x-layout>


{{--    @foreach($posts as $post)--}}
{{--        <article>--}}
{{--            <a href="/posts/{{$post->slug}}">--}}
{{--                <h1>--}}
{{--                    {{$post->title}}--}}
{{--                </h1>--}}
{{--            </a>--}}
{{--            <p>--}}
{{--                By--}}
{{--                <a href="/authors/{{$post->author->username}}">--}}
{{--                    {{$post->author->name}}--}}
{{--                </a>--}}
{{--                in--}}
{{--                <a href="/categories/{{$post->category->slug}}">--}}
{{--                    {{$post->category->name}}--}}
{{--                </a>--}}
{{--            </p>--}}
{{--            <p>--}}
{{--                {{$post->body}}--}}
{{--            </p>--}}
{{--        </article>--}}
{{--    @endforeach--}}
