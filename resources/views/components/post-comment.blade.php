@props(['comment'])
<article class="bg-gray-100 border border-gray-200 rounded-xl p-4 flex space-x-4">
    <div class="flex-shrink-0">
        <img class="rounded-xl" width="80" height="80" src="/images/blog-photo.jpg" alt=""/>
    </div>
    <div>
        <strong>
            {{ $comment->author->username }}
        </strong>
        <p class="text-xs">
            Posted
            <time>{{ $comment->created_at }}</time>
        </p>

        <p class="mt-4 text-sm">
            {{ $comment->body }}
        </p>
    </div>
</article>
