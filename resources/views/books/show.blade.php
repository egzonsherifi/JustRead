<x-layout>
            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
                <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                    <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                        <img src="{{ asset('storage/' . $book->thumbnail) }}" alt="" class="rounded-xl">
                        <p class="mt-4 block text-gray-400 text-xs">
                            Published <time>{{ $book->created_at->diffForHumans() }}</time>
                        </p>
                    </div>

                    <div class="col-span-8">
                        <div class="hidden lg:flex justify-between mb-6">
                            <a href="/"
                                class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                    <g fill="none" fill-rule="evenodd">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                        </path>
                                        <path class="fill-current"
                                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                        </path>
                                    </g>
                                </svg>
                                Back to Other Books
                            </a>

                            <div class="space-x-2">
                                    <a href="/?author={{ $book->author->username }}" class="text-gray-400 bg-transparent border border-solid border-gray-400 hover:bg-gray-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-2 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">
                                    {{ $book->author->name }}
                            </a>
                            </div>
                        </div>

                        <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                            {{$book->title}}
                        </h1>

                        <div class="space-y-4 lg:text-lg leading-loose">{!! $book->body !!}</div>
                    </div>
                <section class="col-span-8 col-start-5 mt-10 space-y-6">
                    @include('books.add-comment-form')

                    @foreach ($book->comments as $comment)
                        <x-book-comment :comment="$comment" />
                    @endforeach

                </section>
            </article>


        </main>
</x-layout>
