<x-admin-layout>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <div class="column-3">
        {{-- {{ dump($listings) }} --}}
        <h1 class="font-bold text-2xl p-4 text-center    "> Property Listing </h1>
        @foreach ($listings as $listing)
            <x-listing-card :listing="$listing" />
        @endforeach
    </div>
</x-admin-layout>
