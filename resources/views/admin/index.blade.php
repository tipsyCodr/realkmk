<div>
    <x-admin-layout>
        <div class=" flex flex-col justify-center items-center gap-2 text-center p-4">
            <h1 class="font-bold text-2xl  capitalize">
                @php
                    $time = date('H');
                    if ($time < 12) {
                        $greeting = 'Good Morning';
                    } elseif ($time < 17) {
                        $greeting = 'Good Afte  rnoon';
                    } else {
                        $greeting = 'Good Evening';
                    }
                @endphp
                {{ $greeting }}, {{ auth()->user()->name }}
            </h1>
            <h2 class=''>The Time is
            </h2>
            <p class='font-semibold text-4xl bg-yellow-500 rounded-lg px-4 py-2 text-white w-fit'>{{ date('h:i A') }}</p>
            <p> What do you want to do today?</p>
        </div>

        <div class="flex flex-col sm:flex-row justify-center items-center ">
            <ul class='w-full p-2 max-w-xl'>
                <a href="{{ route('admin.listings.list') }}" class="w-full block font-bold text-xl items-center gap-2">
                    <li
                        class='flex gap-2 items-center px-4 py-10 bg-white border-b hover:bg-yellow-500 hover:text-white transition-colors'>
                        <i class="fas fa-building-user"></i>Properties Listings
                    </li>
                </a>
                <a href="{{ route('admin.requests.jobs.list') }}"
                    class="w-full block font-bold text-xl items-center gap-2">
                    <li
                        class='flex gap-2 items-center px-4 py-10 bg-white border-b hover:bg-yellow-500 hover:text-white transition-colors'>
                        <i class="fas fa-briefcase"></i>Job
                        Requests
                    </li>
                </a>
                <a href="{{ route('admin.requests.properties.list') }}"
                    class="w-full block font-bold text-xl items-center gap-2">
                    <li
                        class='flex gap-2 items-center px-4 py-10 bg-white border-b hover:bg-yellow-500 hover:text-white transition-colors'>
                        <i class="fas fa-home"></i>
                        <p>Properties Requests</p>
                    </li>
                </a>
                <a href="{{ route('admin.ads.list') }}" class="w-full block font-bold text-xl items-center gap-2">
                    <li
                        class='flex gap-2 items-center px-4 py-10 bg-white border-b hover:bg-yellow-500 hover:text-white transition-colors'>
                        <i class="fas fa-home"></i>
                        <p>Banner Ads</p>
                    </li>
                </a>
            </ul>

        </div>
    </x-admin-layout>
</div>
