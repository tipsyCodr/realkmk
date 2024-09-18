<header class="fixed top-0 w-full bg-white">
    <div class="w-full shadow border flex flex-row justify-between">
        {{-- logo --}}
        @php
            $location = 'Bhilai';
        @endphp
        <div class="self-center">
            <a class="logo d-block mx-auto" href="/">
                {{-- <img src="{{ asset('img/logo.png') }}" alt="" style="width: 200px"> --}}
                <p class="p-2 text-3xl font-bold uppercase text-red-500 ">Real<span
                        class="text-yellow-500 ">KMK</span>.com
                </p>

            </a>
        </div>
        <div class="text-center my-2 self-center flex flex-row place-items-center px-2">
            {{-- <x-location-icon />
            <p><u>{{ $location }}</u></p> --}}
            <a href="{{ route('login') }}">
                <img class="img-fluid rounded-top w-9 hover:scale-125 transition-transform"
                    src="{{ asset('img/icon/user.png') }}" alt="">
            </a>
        </div>
    </div>
</header>
