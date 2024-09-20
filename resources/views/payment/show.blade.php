<x-app-layout>
    <div class="flex flex-col justify-center items-center wrapper text-center">
        <h1 class="text-xl font-bold pt-6">Make Payment to Continue </h1>
        <p class="text-3xl  font-bold">Rs. {{ $amount }}</p>
        <p class="text-md font-bold text-blue-400">Scan this QR Code below to make Payment.</p>

        <a href="{{ asset('img/pay.jpg') }}" download="qrcode.jpg"
            class="text-white bg-blue-500 p-2 rounded-md mt-4">Download QR Code</a>

        <img class="border p-2 w-2/3  mt-8" src="{{ asset('img/pay.jpg') }}" alt="">

    </div>
</x-app-layout>
