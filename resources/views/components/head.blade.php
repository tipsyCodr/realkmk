<header class="fixed top-0 w-full bg-white">
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
        <div class="text-center my-2 self-center flex flex-row place-items-center px-2">
            <x-location-icon />
            <p><u>{{ $location }}</u></p>
        </div>
    </div>
</header>
