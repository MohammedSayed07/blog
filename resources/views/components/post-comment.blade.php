@props(['comment'])
<article class="bg-gray-100 border border-gray-200 rounded-xl p-4 flex space-x-4">
    <div class="flex-shrink-0">
        <img src="http://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="" width="40" height="40" class="rounded-full"/>
    </div>
    <div>
        <strong>
            {{ $comment->author->username }}
        </strong>
        <p class="text-xs">
            Posted
            <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
        </p>

        <p class="mt-4 text-sm">
            {{ $comment->body }}
        </p>
    </div>
</article>
