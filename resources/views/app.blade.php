<x-app-layout>
    {{-- <x-search-bar /> --}}
    <div class="bg-blue-100 font-semibold border mx-2 mt-20 capitalize border-blue-500 text-blue-700 p-2" role="alert">
        <p>Buyers can search properties from here</p>
    </div>
    <x-categories-section />
    <x-post-list :posts="$listings" />
</x-app-layout>
