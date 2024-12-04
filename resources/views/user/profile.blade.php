<x-app-layout>
    <div class="relative  mx-auto py-6 px-4 sm:px-6 lg:px-8 bg-blue-500 h-32 ">
    @if (Auth::user() && Auth::user()->profile_picture)
                    <img class="absolute left-1/2 -translate-x-1/2 shadow-md -bottom-10 img-fluid rounded-full w-18 hover:scale-105 transition-transform"
                        src="{{ Auth::user()->profile_picture }}" alt="">
                @else
                    <img class="absolute left-1/2 -translate-x-1/2 shadow-md -bottom-10 img-fluid rounded-top w-18 hover:scale-125 transition-transform"
                        src="{{ asset('img/icon/user.png') }}" alt="">
                @endif
    </div>
    <div class="max-w-7xl mx-auto py-6 my-4 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="flex flex-row items-center">
                @if (Auth::user() && Auth::user()->profile_picture)
                    <img class="img-fluid rounded-full w-9 hover:scale-105 transition-transform"
                        src="{{ Auth::user()->profile_picture }}" alt="">
                @else
                    <img class="img-fluid rounded-top w-9 hover:scale-125 transition-transform"
                        src="{{ asset('img/icon/user.png') }}" alt="">
                @endif
                    <div class="ml-4">
                        <h1 class="text-2xl leading-tight font-bold text-gray-900">
                            {{ auth()->user()->name }}
                        </h1>
                        <p class="text-gray-600 mt-1">
                            {{ auth()->user()->email }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-200">
                <div class="bg-gray-50 px-4 py-5 sm:p-6">
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <a class="text-blue-600 hover:text-blue-800 font-medium"
                                href="mailto:helpline@realkmk.com">
                                helpline@realkmk.com
                            </a>
                        </div>
                        <!-- <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                            <a class="text-blue-600 hover:text-blue-800 font-medium" href="#">
                                Update Profile
                            </a>
                        </div> -->
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
                            </svg>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <a href="{{ route('logout') }}" class="text-red-600 hover:text-red-800 font-medium"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Logout
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
