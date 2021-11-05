<header>
<div class="text-center flex items-center justify-center px-11">
    <img src="/images/best-books-2017-header.jpg" alt="" class="rounded-t-3xl">
</div>

<div class="max-w-xl mx-auto text-center">
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-300 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button
                            class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex"
                            >
                            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                            height="22" viewbox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                    d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                        </svg>

                    </button>
                </x-slot>


                <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>
                @foreach ($categories as $category)
                <x-dropdown-item
                    href="/categories/{{ $category->slug }}"
                    :active='request()->is("categories/$category->slug")'
                    >{{ ucwords($category->name) }}</x-dropdown-item>
                @endforeach
            </x-dropdown>
        </div>

    </div>
</div>
</header>
