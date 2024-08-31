<nav class="fixed bottom-0 w-full shadow border bg-white">
    <ul class="text-center flex flex-row  justify-evenly py-4 list-unstyled">
        <li class="">
            <a href="{{ route('home') }}"
                class="flex flex-col items-center justify-center  text-gray-500 hover:text-gray-700 text-center">
                <p>
                    <x-home-icon :color="'grey-400'" />
                </p>
                <p>Home</p>
            </a>
        </li>
        <li>
            <a href="{{ route('chat') }}"
                class="flex flex-col items-center justify-center  text-gray-500 hover:text-gray-700">
                <x-chat-icon :color="'grey-400'" />

                Chat
            </a>
        </li>
        <li>
            <a href="{{ route('post') }}"
                class="flex flex-col items-center justify-center text-gray-500 hover:text-gray-700">


                <x-add-icon :color="'grey-400'" />
                Sell
            </a>
        </li>
        <li>
            <a href="{{ route('plan') }}"
                class="flex flex-col items-center justify-center  text-gray-500 hover:text-gray-700">
                <x-daimond-icon :color="'grey-400'" />
                Plans
            </a>
        </li>
        <li>
            <a href="{{ route('login') }}"
                class="flex flex-col items-center justify-center  text-gray-500 hover:text-gray-700">
                <x-user-icon :color="'grey-400'" />
                Login
            </a>
        </li>
    </ul>
</nav>
