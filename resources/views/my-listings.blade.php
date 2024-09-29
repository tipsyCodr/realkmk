<x-app-layout>
    <h1 class='mt-10 font-bold text-xl p-4 '> My Listings</h1>
    <div class="">
        <x-post-iterator :posts="$listings" />
    </div>
</x-app-layout>
