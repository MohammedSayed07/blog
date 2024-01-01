<x-layout>
    <main class="max-w-6xl mx-auto mt-14">
        <div class="flex items-center justify-center px-6 py-8 mx-auto lg:py-0">
            <div class="w-full bg-white rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 border-gray-400">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Log in
                    </h1>
                    <form method="POST" class="space-y-4 md:space-y-6" action="/login">
                        @csrf

                        <x-form.input name="email" type="email" />

                        <x-form.input name="password" type="password" />

                        <x-button class="w-full">
                            Login
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout>
