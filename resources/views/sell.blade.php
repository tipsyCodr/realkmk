<x-app-layout>
    <h1 class="text-5xl font-bold px-4 pt-4">What are You Offering?</h1>
    {{-- <div class="grid grid-cols-2 gap-4">
        <div class="bg-white rounded p-4 border">
            <h2 class="text-2xl font-bold">Properties</h2>
            <p class="text-gray-600">Sell your property with us</p>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="#">Post a
                Property</a>
        </div>
        <div class="bg-white rounded p-4 border">
            <h2 class="text-2xl font-bold">Jobs</h2>
            <p class="text-gray-600">Get Your Next Job</p>
            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="#">Post a
                Job</a>
        </div>
    </div> --}}
    {{-- @livewire('sell-form') --}}

    <div class=" my-6 ">
        <div class="flex justify-center items-center text-center">
            <a href="{{ route('listing.types', 'properties') }}"
                class="p-20 border flex-1 text-lg  hover:bg-gray-200 transition-colors"><i
                    class=" p-2 fa fa-house-chimney fa-2x text-yellow-400"></i> <br> Properties</a>
            <a href="{{ route('listing.types', 'jobs') }}"
                class="p-20 border flex-1 text-lg  hover:bg-gray-200 transition-colors"><i
                    class="p-2 fa fa-briefcase fa-2x text-blue-500"></i> <br>
                Jobs</a>
        </div>
    </div>
</x-app-layout>
