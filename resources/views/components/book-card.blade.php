@props(['book'])
<article>
    <div class="py-6 px-5 border border-gray-400 rounded-xl">
        <div>
            <img class="object-fill object-cover w-1/2 h-1/2" style="fit-content: contain;" src="{{ asset('storage/' . $book->thumbnail) }}" alt="photo">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
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

            <div class="text-sm mt-4">
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
