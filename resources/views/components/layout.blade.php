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

                <!-- Search -->
        <div class="flex items-center justify-center px-10">
            <form method="GET" action="/">
                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
            <div class="flex border border-gray-400 rounded-r">
                <input type="text" name="search" class="focus:outline-none px-4 py-2 w-64 bg-yellow-100" placeholder="Search your book" value="{{ request('search') }}">
                <button type="submit" class="flex items-center justify-center px-4">
                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                    </svg>
                </button>
            </div>
        </form>
        </div>





        <div class="space-x-7 flex font-semibold uppercase items-center">
            @auth
            <span>Welcome, {{ auth()->user()->name }}</span>

            <form method="POST" action="/logout">
                @csrf

                <button type="submit" class="flex font-semibold uppercase">Log Out</button>

            </form>
            @else
                <a href="/register">Register</a>
                <a href="/login">Login</a>
            @endauth

        </div>





    </nav>

        {{ $slot }}


  <footer id="newsletter" class="bg-yellow-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
    {{-- <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;"> --}}
    <h5 class="text-3xl">Stay in touch with the latest books</h5>

    <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

            <form method="POST" action="/newsletter" class="lg:flex text-sm">
                @csrf
                <div class="bg-yellow-100 flex items-center rounded-full shadow-xl">
                  <div>
                      <input class="rounded-l-full w-full py-4 px-10 text-gray-700 leading-tight focus:outline-none bg-yellow-100" id="search" name="email" type="text" placeholder="Your email address">

                  @error('email')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                  @enderror
                  </div>

                  <div class="p-2">
                    <button
                    class="text-gray-400 bg-transparent border border-solid border-gray-400 hover:bg-gray-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="submit">
                    Subscribe
                  </button>

                    </div>
                </div>

            </form>
        </div>
    </div>
</footer>

<x-flash />

</body>
