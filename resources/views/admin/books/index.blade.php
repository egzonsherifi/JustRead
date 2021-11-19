<x-layout>
    <x-setting heading="Manage Books">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-yellow-100 divide-y divide-gray-200">
                        @foreach ($books as $book)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="text-sm font-medium text-gray-900">
                                    <a href="/books/{{ $book->slug }}">
                                    {{ $book->title }}
                                </a>
                                </div>
                            </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $book->created_at }}
                            </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="/admin/books/{{ $book->id }}/edit" class="text-yellow-600 hover:text-gray-900">Edit</a>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form method="POST" action="/admin/books/{{ $book->id }}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="text-indigo-500">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </x-setting>
</x-layout>
