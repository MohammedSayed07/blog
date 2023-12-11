@props(['category'])
<a class="transition duration-300 text-blue-300 border border-blue-300 px-3 py-1 rounded-full uppercase font-semibold text-xs hover:bg-blue-500 hover:text-white"
   href="/categories/{{$category->slug}}">
    {{ $category->name }}
</a>
