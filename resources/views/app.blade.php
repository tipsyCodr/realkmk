<x-app-layout>
    {{-- <x-search-bar /> --}}
    <h1 class="text-xl font-bold text-center md:text-left px-4 py-2">Buyers can search properties from here</h1>
    <x-categories-section />
    <x-post-list :posts="$listings" />
</x-app-layout>
