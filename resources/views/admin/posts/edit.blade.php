<x-layout>
    <x-setting :heading="'Edit Post: '.$post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" class="space-y-3" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" type="text" :value="old('title' ,$post->title)"/>
            <x-form.input name="slug" type="text" :value="old('slug' ,$post->slug)"/>
            <div class="flex space-x-4">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file"/>
                </div>
                <img class="rounded-2xl" src="{{ asset('storage/' . $post->thumbnail) }}" alt="photo" width="64"/>
            </div>
            <x-form.textarea name="body" type="text">{{ old('body', $post->body) }}</x-form.textarea>

            <div>
                <x-form.label name="category" />

                <select class="border border-gray-400 w-full p-2"
                        name="category_id" id="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category" />
            </div>

            <div class="flex justify-center">
                <x-button>
                    Update
                </x-button>
            </div>

        </form>
    </x-setting>
</x-layout>
