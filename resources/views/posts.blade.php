<!DOCTYPE html>
<html lang="">
    <head>
        <link href="/app.css" rel="stylesheet"/>
        <title>Blog</title>
    </head>
    <body>
    @foreach($posts as $post)
        <article>
            <a href="/posts/{{$post->slug}}">
                <h1>
                    {{$post->title}}
                </h1>
            </a>
            <p>
                By
                <a href="/authors/{{$post->author->username}}">
                    {{$post->author->name}}
                </a>
                in
                <a href="/categories/{{$post->category->slug}}">
                    {{$post->category->name}}
                </a>
            </p>
            <p>
                {{$post->body}}
            </p>
        </article>
    @endforeach
    </body>
</html>
