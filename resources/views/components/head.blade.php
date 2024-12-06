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
        @if (Auth::user() && Auth::user()->hasRole('admin'))
            <div class="self-center ">
                <a href="{{ route('admin.index') }}"
                    class="text-right border border-blue-500 hover:bg-blue-700 hover:text-white text-black font-bold py-2 px-4 rounded">
                    <i class="fa fa-user-tie text-blue-500 hover:text-white"></i>
                </a>
            </div>
        @endif
        <div class="items-center text-center my-2 self-center flex flex-row place-items-center px-2 ">
            <a href="{{ route('listing.types', 'properties') }}"
                class="text-right sm:scale-100 scale-75 p-1 capitalize text-xs flex items-center bg-yellow-200 border rounded text-yellow-900 border-yellow-500  ">
                @if (strpos(url()->current(), 'agent') !== false)
                    Post free unlimited ads
                @else
                    Post a ads
                @endif
                <i class="fa-solid fa-plus-square fa-2x pl-2 text-yellow-500"></i>
            </a>

            <a href="{{ route('login') }}">
                @if (Auth::user() && Auth::user()->profile_picture)
                    <img class="img-fluid rounded-full w-9 hover:scale-105 transition-transform"
                        src="{{ Auth::user()->profile_picture }}" alt="">
                @else
                    <img class="img-fluid rounded-top w-9 hover:scale-125 transition-transform"
                        src="{{ asset('img/icon/user.png') }}" alt="">
                @endif
            </a>
        </div>
    </div>
</header>
