<nav class="fixed bottom-0 w-full shadow border bg-white z-10">
    <ul class="text-center flex flex-row  justify-evenly py-4 list-unstyled">
        <li class="">
            <a href="{{ route('home') }}"
                class="flex flex-col items-center justify-center  text-gray-500 hover:text-gray-700 text-center">
                <p>
                    {{-- <x-home-icon :color="'grey-400'" /> --}}
                    <img src="{{ asset('img/icon/home.png') }}"
                        class="img-fluid rounded-top w-9 hover:scale-125 transition-transform" alt="" />

                </p>
                <p class="text-black">Home</p>
            </a>
        </li>
        <li>
            <a href="{{ route('chat') }}"
                class="flex flex-col items-center justify-center  text-gray-500 hover:text-gray-700">
                {{-- <x-chat-icon :color="'grey-400'" /> --}}
                <img src="{{ asset('img/icon/chat.png') }}"
                    class="img-fluid rounded-top w-9 hover:scale-125 transition-transform" alt="" />


                <p class="text-black">Chat</p>
            </a>
        </li>
        <li>
            <a href="{{ route('listing.types', 'properties') }}"
                class="flex flex-col items-center justify-center text-gray-500 ">
                {{-- <a href="{{ route('listing.post') }}" class="flex flex-col items-center justify-center text-gray-500 "> --}}


                {{-- <x-add-icon :color="'grey-400'" /> --}}
                <img src="{{ asset('img/icon/add.png') }}"
                    class="img-fluid rounded-top w-9 hover:scale-125 transition-transform" alt="" />

                <p class="text-black">Sell</p>
            </a>
        </li>
        <li>
            <a href="{{ route('plans.index') }}"
                class="flex flex-col items-center justify-center  text-gray-500 hover:text-gray-700">
                {{-- <x-daimond-icon :color="'grey-400'" /> --}}
                <img src="{{ asset('img/icon/premium.png') }}"
                    class="img-fluid rounded-top w-9 hover:scale-125 transition-transform" alt="" />

                <p class="text-black">Plans</p>
            </a>
        </li>
        <li>
            <a href="{{ route('jobs.list') }}"
                class="flex flex-col items-center justify-center  text-gray-500 hover:text-gray-700">
                {{-- <x-user-icon :color="'grey-400'" /> --}}
                <img src="{{ asset('img/icon/suitcase.png') }}"
                    class="img-fluid rounded-top w-9 hover:scale-125 transition-transform" alt="" />

                <p class="text-black">Jobs</p>
            </a>
        </li>
    </ul>
</nav>
