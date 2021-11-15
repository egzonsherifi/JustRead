@props(['book'])
<article>
    <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col md:flex-row border-2 border-gray-400">
        <div class="w-full md:w-2/5 h-70">
            <img class="object-center object-cover w-full h-full" src="/images/3b47d124002685f2a3c67e47383232c7.jpg" alt="photo">
        </div>
        <div class="w-full md:w-3/5 text-left p-6 md:p-4 space-y-2 bg-yellow-100">
            <a href="/books/{{ $book->slug }}">
            <p class="text-xl text-gray-700 font-bold">{{ $book->title }}</p>
            </a>
            <a href="/?category={{ $book->category->slug }}">
            <p class="text-base text-gray-400 font-normal">{{ $book->category->name }}</p>
            </a>
            <p class="text-base leading-relaxed text-gray-500 font-normal space-y-4">{!! $book->excerpt !!}</p>
            <div class="flex justify-start space-x-2">
                <a href="/books/{{ $book->slug }}" class="text-gray-500 hover:text-gray-600 mt-20">
                    <button
                    class="text-gray-400 bg-transparent border border-solid border-gray-400 hover:bg-gray-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                    type="button">
                    Search
                </button>
                </a>
            </div>
        </div>
    </div>
</article>
