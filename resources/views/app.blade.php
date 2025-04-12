{{-- <div class="p-2 mx-2 mt-4 font-semibold text-center text-black capitalize bg-red-100 border border-red-500"
    role="alert">
    <p>This site has been deactivated by the owner. Please complete the payment to restart the service.</p>
</div> --}}

<x-app-layout>
    <x-search-bar />
    <div class="p-2 mx-2 mt-20 font-semibold text-center text-black capitalize bg-blue-100 border border-blue-500"
        role="alert">
        <p>Buyers can search properties from here</p>
    </div>
    <x-categories-section />
    <x-post-list :posts="$listings" />
</x-app-layout>
