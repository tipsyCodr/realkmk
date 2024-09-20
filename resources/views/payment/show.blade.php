<x-app-layout>
    <div class="wrapper text-center">
        <h1 class="text-xl font-bold pt-6">Make Payment to Continue </h1>
        <p class="text-3xl  font-bold">Rs. {{ $amount }}</p>
        <p class="text-lg text-blue-400">Scan this QR Code to make Payment.</p>
        <img src="{{ asset('img/pay.jpg') }}" alt="">
    </div>
</x-app-layout>
