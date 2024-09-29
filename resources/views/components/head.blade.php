<header class="fixed top-0 w-full bg-white z-10">
    <div class="w-full shadow border flex flex-row justify-between">
        {{-- logo --}}
        @php
            $location = 'Bhilai';
        @endphp
        <div class="self-center">
            <a class="logo d-block mx-auto" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="" style="width: 200px">
            </a>
        </div>
        <div class="text-center my-2 self-center flex flex-row place-items-center px-2 ">
            <a href="{{ route('listing.types', 'properties') }}"
                class="text-right sm:scale-100 scale-75 p-1 mx-2 capitalize text-xs flex items-center bg-yellow-200 border rounded text-yellow-900 border-yellow-500  ">Post
                a free
                ad <i class="fa-solid fa-plus-square fa-2x pl-2 text-yellow-500"></i></a>

            <a href="{{ route('login') }}">
                <img class="img-fluid rounded-top w-9 hover:scale-125 transition-transform"
                    src="{{ asset('img/icon/user.png') }}" alt="">
            </a>
        </div>
    </div>
</header>
