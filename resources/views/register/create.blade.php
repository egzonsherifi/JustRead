<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-yellow-100 border border-gray-400 p-6 rounded-3xl">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full bg-yellow-100 rounded"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           required
                    >
                    @error('name')
                        <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full bg-yellow-100 rounded"
                           type="text"
                           name="username"
                           id="username"
                           value="{{ old('username') }}"
                           required
                    >
                    @error('username')
                    <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full bg-yellow-100 rounded"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >
                    @error('email')
                    <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full bg-yellow-100 rounded"
                           type="password"
                           name="password"
                           id="password"

                           required
                    >
                    @error('password')
                    <p class="text-red-500 text-xs mt-1"  >{{ $message }}</p>
                    @enderror
                </div>

                    <div class="mb-6">
                      <button
                      class="text-gray-400 bg-transparent border border-solid border-gray-400 hover:bg-gray-500 hover:text-white active:bg-purple-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                      type="submit">
                      Submit
                    </button>

                      </div>
                  </div>
            </form>
        </main>
    </section>
</x-layout>
