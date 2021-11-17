<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-yellow-100 border border-gray-400 p-6 rounded-3xl">
            <form method="POST" action="/admin/books" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title"
                    >
                        Title
                    </label>

                    <input class="border border-gray-400 p-2 w-full bg-yellow-100 rounded"
                           type="text"
                           name="title"
                           id="title"
                           value="{{ old('title') }}"
                           required
                    >
                    @error('title')
                        <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="slug"
                    >
                        Slug
                    </label>

                    <input class="border border-gray-400 p-2 w-full bg-yellow-100 rounded"
                           type="text"
                           name="slug"
                           id="slug"
                           value="{{ old('slug') }}"
                           required
                    >
                    @error('slug')
                        <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="excerpt"
                    >
                        Excerpt
                    </label>

                    <textarea class="w-full bg-yellow-200 rounded text-sm focus:outline-none focus:ring"
                            name="excerpt"
                            id="excerpt"
                            cols="30"
                            rows="5"
                            required
                    >{{ old('excerpt') }}</textarea>
                    @error('title')
                    <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="body"
                    >
                        Body
                    </label>

                    <textarea class="w-full bg-yellow-200 rounded text-sm focus:outline-none focus:ring"
                            name="body"
                            id="body"
                            cols="30"
                            rows="5"
                            required
                    >{{ old('body') }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="category_id"
                    >
                        Category
                    </label>

                    <select name="category_id" id="category_id" class="bg-yellow-100">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('body')
                    <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                <x-submit-button>Publish</x-submit-button>


            </form>
        </main>
    </section>
</x-layout>
