<x-layout>
    <x-setting heading="Manage Posts">
        <div class="container px-4 mx-auto sm:px-8">
            <div class="py-4">
                <div class="px-4 py-4 -mx-4 overflow-x-auto sm:-mx-8 sm:px-8">
                    <div class="inline-block min-w-full overflow-hidden rounded-lg shadow">
                        <table class="min-w-full leading-normal mb-4">
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                            <a href="/posts/{{ $post->slug }}" class="text-gray-900 whitespace-no-wrap hover:text-blue-600 hover:underline">
                                                {{ $post->title }}
                                            </a>
                                        </td>
                                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                                <span aria-hidden="true" class="absolute inset-0 bg-green-200 rounded-full opacity-50">
                                                </span>
                                                <span class="relative">
                                                    Published
                                                </span>
                                            </span>
                                        </td>
                                        <td class="px-5 py-5 text-sm bg-white border-b border-gray-200">
                                            <a href="#" class="text-gray-900 whitespace-no-wrap hover:text-blue-600 hover:underline">
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>

    </x-setting>
</x-layout>
