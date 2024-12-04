<!-- Simplicity is an acquired taste. - Katharine Gerould -->
<x-app-layout>
    <x-back-button />

    <div class="bg-blue-100 border mx-2 my-4 border-blue-400 text-blue-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline  capitalize">We provide bank seizing properties & owner properties which you can buy.</span>
    </div>
    <div class="flex items-center justify-center">
        <a href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" alt="" class="h-32 py-6">
        </a>
    </div>
    </p>
    <hr class="border border-1 border-gray-300 my-4 mx-4">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'delhi') }}">
                <img class="rounded object-contain w-full py-2 " src="{{ asset('storage/uploads/locations/delhi.jpg') }}"
                    alt="">
                <p class="font-bold text-3xl text-center">Delhi</p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>
            </a>
        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'mumbai') }}">
                <img class="rounded object-contain w-full py-2 " src="{{ asset('storage/uploads/locations/mumbai.jpg') }}"
                    alt="">
                <p class="font-bold text-3xl  text-center">Mumbai </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'kolkata') }}">
                <img class="rounded object-contain w-full py-2" src="{{ asset('storage/uploads/locations/kolkata.jpg') }}"
                    alt="">
                <p class="font-bold text-3xl  text-center">Kolkata </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'bengaluru') }}">
                <img class="rounded object-contain w-full   py-2"
                    src="{{ asset('storage/uploads/locations/banglore.jpg') }}" alt="">
                <p class="font-bold text-3xl  "> Banglore </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'chennai') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/chennai.jpg') }}" alt="">
                <p class="font-bold text-3xl  "> Chennai </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'pune') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/pune.jpg') }}" alt="">
                <p class="font-bold text-3xl  "> Pune </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'ahmedabad') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/ahmedabad.jpg') }}" alt="">
                <p class="font-bold text-3xl  "> Ahmedabad </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'jaipur') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/jaipur.jpg') }}" alt="">
                <p class="font-bold text-3xl  "> Jaipur </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'surat') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/surat.jpg') }}" alt="">
                <p class="font-bold text-3xl  "> Surat </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'hyderabad') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/hyderabad.jpg') }}" alt="">
                <p class="font-bold text-3xl  "> Hyderabad </p>
                <p class="font-bold"> {{ rand(300, 900) }} Properties Left</p>

            </a>

        </div>

    </div>
</x-app-layout>
