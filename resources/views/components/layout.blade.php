<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mickey Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>
</head>

<body>
<section class="px-5 py-2">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img src="/images/icon.png" alt="LOGO" width="90">
            </a>
        </div>
        <div class="mt-4">
            <a href="/" class="transition-all duration-300 text-xs font-bold uppercase px-2 py-2 border border-black border-opacity-0 hover:border-opacity-100 rounded-2xl">
                HomePage
            </a>
            <a href="#" class="transition-all duration-300 bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white uppercase px-5 py-3">
                Subscribe for Updates
            </a>
        </div>
    </nav>

    {{$slot}}

    <footer class="max-w-6xl mx-auto mt-16 bg-gray-100 border border-black border-opacity-5 rounded-xl px-12 py-12 text-center">
        <div>
            <img class="mx-auto rounded-xl" src="/images/head.png" width="128"/>

            <h1 class="text-2xl mt-4">Stay in touch with the latest updates</h1>

            <p class="text-sm mt-1">Promise to keep the inbox clean. no bugs.</p>
        </div>

        <div class="inline-block mt-6">
            <form method="post" class="lg:flex text-sm lg:bg-gray-200 lg:rounded-full">
                <div class="bg-gray-200 py-3 px-3 inline-flex items-center rounded-full">
                    <label for="email">
                        <svg fill="gray" width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="5-Email-Check"><path d="M29 4H3a3 3 0 0 0-3 3v18a3 3 0 0 0 3 3h13v-2H3a1 1 0 0 1-1-1V7.23l13.42 9.58a1 1 0 0 0 1.16 0L30 7.23V17h2V7a3 3 0 0 0-3-3zM16 14.77 3.72 6h24.56z"/><path d="m22 25.59-2.29-2.29-1.41 1.41 3 3a1 1 0 0 0 1.41 0l7-7-1.41-1.41z"/></g></svg>
                    </label>
                    <input id="email" class="bg-transparent pl-4 focus-within:outline-none" type="text" placeholder="Your e-mail address">
                </div>

                <div>
                    <button class="mt-3 lg:mt-0 transition-all duration-300 bg-blue-500 hover:bg-blue-600 rounded-full text-xs font-semibold text-white uppercase px-10 py-4">
                        Subscribe
                    </button>
                </div>

            </form>
        </div>
    </footer>
</section>
</body>
