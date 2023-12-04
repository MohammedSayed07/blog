<!DOCTYPE html>
<html>
    <head>
        <link href="/app.css" rel="stylesheet"/>
    </head>
    <body>
    @foreach($posts as $post)
        <article>
            <a href="/posts/{{$post->id}}">
                <h1>
                    {{$post->title}}
                </h1>
            </a>
            <p>
                {{$post->body}}
            </p>
        </article>
    @endforeach
    </body>
</html>
