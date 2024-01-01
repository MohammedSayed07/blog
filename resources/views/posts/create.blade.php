<x-layout>
    <section class="px-5 py-2 max-w-xl m-auto mt-10">
        <h3 class="font-bold text-xl mb-4 text-center">
            Create New Post
        </h3>

        <main class="shadow border border-gray-100 p-8">
            <form method="POST" action="/admin/posts" class="space-y-3" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" type="text"/>
                <x-form.input name="slug" type="text"/>
                <x-form.input name="thumbnail" type="file"/>
                <x-form.textarea name="body" type="text"/>

                <div>
                    <x-form.label name="category" />

                    <select class="border border-gray-400 w-full p-2"
                            name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    <x-form.error name="category" />
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
