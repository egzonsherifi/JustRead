@if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="fixed bg-yellow-200 text-black py-2 px-4 rounded-2xl bottom-4 left-3 text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
