<x-layout>
    <section class="px-5 py-2">
        <main class="max-w-xl m-auto shadow border border-gray-100 p-8">
            <form method="POST" action="/admin/posts" class="space-y-3" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="block uppercase text-sm"
                        for="title">
                        Title
                    </label>
                    <input class="border border-gray-400 w-full p-2"
                        type="text" name="title" id="title" value="{{ old('title') ?? '' }}" required/>
                    @error('title')
                        <p class="text-red-500 text-xs mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label class="block uppercase mb-1 text-sm"
                           for="slug">
                        Slug
                    </label>
                    <input class="border border-gray-400 w-full p-2"
                              type="text" name="slug" id="slug" required value="{{ old('slug') ?? '' }}"/>
                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div>
                    <label class="block uppercase mb-1 text-sm"
                           for="thumbnail">
                        Thumbnail
                    </label>
                    <input class="border border-gray-400 w-full p-2"
                           type="file" name="thumbnail" id="thumbnail" required value="{{ old('slug') ?? '' }}"/>
                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div>
                    <label class="block uppercase mb-1 text-sm"
                           for="body">
                        Body
                    </label>
                    <textarea class="border border-gray-400 w-full p-2"
                           type="text" name="body" id="body" required>{{ old('body') ?? '' }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div>
                    <label class="block uppercase mb-1 text-sm"
                           for="category">
                        Category
                    </label>
                    <select class="border border-gray-400 w-full p-2"
                            name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('category')
                    <p class="text-red-500 text-xs mt-2">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="flex justify-center">
                    <x-button>
                        PUBLISH THE POST
                    </x-button>
                </div>

            </form>
        </main>
    </section>
</x-layout>
