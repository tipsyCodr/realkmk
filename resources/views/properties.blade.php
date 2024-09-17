<!-- Simplicity is an acquired taste. - Katharine Gerould -->
<x-app-layout>

    <x-back-button />
    <h1 class="text-3xl font-bold px-4 pt-4 capitalize"> We Provide Bank Siezing Properties & Owner Poperties which You
        Can Buy.
    </h1>
    <p class='text-center uppercase font-bold py-6 text-3xl text-red-600'>Real<span class="text-yellow-500">KMK</span>.com
    </p>
    <hr class="border border-1 border-gray-300 my-4 mx-4">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'delhi') }}">
                <img class="rounded object-cover w-full h-40" src="{{ asset('storage/uploads/locations/delhi.jpg') }}"
                    alt="">
                <p class="font-bold text-3xl text-center">Delhi</p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>
            </a>
        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'mumbai') }}">
                <img class="rounded object-cover w-full h-40" src="{{ asset('storage/uploads/locations/mumbai.jpg') }}"
                    alt="">
                <p class="font-bold text-3xl  text-center">Mumbai </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'kolkata') }}">
                <img class="rounded object-cover w-full h-40" src="{{ asset('storage/uploads/locations/kolkata.jpg') }}"
                    alt="">
                <p class="font-bold text-3xl  text-center">Kolkata </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'bengaluru') }}">
                <img class="rounded object-cover w-full h-40"
                    src="{{ asset('storage/uploads/locations/banglore.jpg') }}" alt="">
                <p class="font-bold text-3xl  "> Banglore </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
    </div>
</x-app-layout>
