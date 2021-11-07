<!DOCTYPE html>

<title>JustRead</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<body class="bg-yellow-100">
    <nav class="flex items-center justify-center space-x-7 py-2 text-sm">
        <div class="font-bold">
            <a href="/" class="inline-flex">
                <h1 class="items-center inline-flex" style="font-family: 'Pinyon Script', cursive; font-size:30px;">JustRead</h1>

            </a>

        </div>
        <div class="space-x-7 flex pl-7 font-semibold uppercase">
            <a href="/">Home</a>
            <a href="#">Register</a>
            <a href="#">Login</a>
        </div>

        <div class="pl-8 flex">
            <form method="GET" action="#">
                <div class="bg-yellow-100 flex items-center rounded-full shadow-xl">
                <input class="rounded-l-full w-full py-4 px-6 text-gray-700 leading-tight focus:outline-none bg-yellow-100" id="search" type="text" name="search" placeholder="Search your book" value="{{ request('search') }}">
                <div class="p-2">
                    <button
                    class="text-gray-400 bg-transparent border border-solid border-gray-400 hover:bg-gray-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="text">
                    Search
                </button>
                </div>
            </form>

            </div>
        </div>



    </nav>

        {{ $slot }}


  <footer id="newsletter" class="bg-yellow-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
    {{-- <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;"> --}}
    <h5 class="text-3xl">Stay in touch with the latest books</h5>

    <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

            <form method="POST" action="/newsletter" class="lg:flex text-sm">
                <div class="bg-yellow-100 flex items-center rounded-full shadow-xl">
                  <input class="rounded-l-full w-full py-4 px-10 text-gray-700 leading-tight focus:outline-none bg-yellow-100" id="search" type="text" placeholder="Your email address">

                  <div class="p-2">
                    <button
                    class="text-gray-400 bg-transparent border border-solid border-gray-400 hover:bg-gray-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button">
                    Subscribe
                  </button>

                    </div>
                </div>

            </form>
        </div>
    </div>
</footer>

</body>
