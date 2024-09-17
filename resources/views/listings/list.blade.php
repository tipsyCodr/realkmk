<x-app-layout>
    {{-- @dd($listings) --}}
    <x-back-button />
    <x-post-iterator :posts="$listings" />
</x-app-layout>
