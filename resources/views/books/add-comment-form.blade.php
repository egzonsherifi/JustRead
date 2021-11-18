@auth
<form method="POST" action="/books/{{ $book->slug }}/comments" class="border border-2 border-gray-300 p-6 rounded-xl">
    @csrf

    <header class="flex items-center">
        <img src="https://i.pravatar.cc/?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-xl">
        <h2 class="ml-4">Want to participate?</h2>
    </header>

    <div class="mt-6">
        <textarea name="body" class="w-full bg-yellow-100 rounded text-sm focus:outline-none focus:ring" cols="30" rows="5" placeholder="Say something!" required></textarea>
        @error('body')
            <span class="text-xs text-red-500">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-end mt-6 pt-6 border-t border-gray-300">
        <x-form.button>Post</x-form.button>
    </div>
</form>
@else
<p class="font-semibold">
<a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Login</a> to leave a comment.
</p>
@endauth
