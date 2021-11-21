@props(['book'])
<article>
    <div class="py-6 px-5 lg:flex border border-gray-400 rounded-xl">
        <div class="flex lg:mr-8">
            <img class="object-center object-cover w-80 h-90 rounded-xl" src="{{ asset('storage/' . $book->thumbnail) }}" alt="photo">
        </div>
        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="mt-4">
                    <a href="/books/{{ $book->slug }}">
                        <h1 class="text-3xl">
                            {{ $book->title }}
                        </h1>
                    </a>
                    <a href="/?category={{ $book->category->slug }}">
                    <span class="mt-10 block text-gray-400 text-sm">
                            {{ ucwords($book->category->name) }}
                    </span>
                    </a>
                </div>
            </header>

            <div class="text-sm">
                <p>
                    {!! $book->excerpt !!}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <a href="/books/{{ $book->slug }}" class="text-gray-500 hover:text-gray-600">
                <x-form.button>Read More</x-form.button>
                </a>
            </footer>
        </div>
    </div>
</article>

