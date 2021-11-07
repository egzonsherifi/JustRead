<x-layout>
    @include('books._header')

    <main>
        <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-4 py-28">
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-6">
                @if ($books->count())
                <x-book-featured-card :book="$books[0]" />
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 py-6">
                @foreach ($books->skip(1) as $book)
                    <x-book-card :book="$book"/>
                @endforeach
            </div>

            @else
                <p class="text-center">No book posts yet.</p>
            @endif

        </section>
    </main>
</x-layout>

