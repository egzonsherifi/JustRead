@props(['heading'])
<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b border-gray-400">
        {{ $heading }}
    </h1>

    <div class="flex">
    <aside class="w-48 flex-shrink-0">
        <h1 class="font-semibold mb-4">Links</h1>
        <ul>
            <li>
                <a href="/admin/books" class="{{ request()->is('admin/books') ? 'text-yellow-500' : '' }}">All Books</a>
            </li>

            <li>
                <a href="/admin/books/create" class="{{ request()->is('admin/books/create') ? 'text-yellow-500' : '' }}">New Post</a>
            </li>
        </ul>
    </aside>


    <section class="flex-1">
        <main class="mt-10 bg-yellow-100 border border-gray-400 p-6 rounded-3xl">
            {{ $slot }}
        </main>
    </section>

</div>
</section>
