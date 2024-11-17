<x-app-layout>
    <div class="flex flex-row p-4 text-center">
        <a class="text-center flex-1 py-4 m-2 hover:bg-gray-500 hover:text-white rounded-lg border text-center"
            href="{{ route('plans.buyer') }}">
            <div class="flex items-center justify-center">
                <img class="w-20" src=" {{ asset('img/icon/buyer.png') }}" alt="">
            </div>
            <p class="text-2xl p-4 font-bold">Buyer Plan</p>
        </a>
        <a class="text-center flex-1 py-4  m-2 hover:bg-gray-500 hover:text-white rounded-lg border text-center"
            href="{{ route('plans.seller') }}">
            <div class="flex items-center justify-center">
                <img class="w-20" src=" {{ asset('img/icon/seller.png') }}" alt="">
            </div>
            <p class="text-2xl p-4 font-bold">Seller Plan</p>
        </a>
    </div>
    <div class="">
        <a class="text-center flex-1 py-4  m-2  rounded-lg border text-center" href="{{ route('plans.ads') }}">
            <div class="flex items-center justify-center">
                {{-- <img class="w-20" src=" {{ asset('img/icon/seller.png') }}" alt=""> --}}
                <i class="fa fa-ad fa-4x text-red-500"></i>
            </div>
            <p class="text-2xl p-4 font-bold">Banner Advertisement</p>
        </a>
    </div>
    <div class="bg-blue-500 p-4 text-white text-center font-bold">
        *Informative Notice: Please be aware that all payments made are non-refundable.
    </div>

</x-app-layout>
