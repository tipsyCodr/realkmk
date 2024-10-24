<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold leading-tight mt-0 mb-2">
                    Profile
                </h1>
                <p class="text-gray-600">
                    You're logged in as {{ auth()->user()->name }}
                </p>
            </div>
            <div class="menu">
                <ul class="list-none mb-6">
                    <li class="mb-4">
                        <p> Contact Us at <a class="text-blue-500 hover:text-blue-700 underline"
                                href="mailto:{{ auth()->user()->email }}">
                                helpline@realkmk.com
                            </a></p>
                    </li>
                    <li class="mb-4">
                        <a class="text-blue-500 hover:text-blue-700 underline" href="#">
                            Update Profile
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="text-blue-500 hover:text-blue-700 underline" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
