<!-- Well begun is half done. - Aristotle -->
<x-app-layout>
    <div class="p-4">
        <h1 class='text-3xl font-bold'>Chats</h1>
        <div class="flex">
            <div class="flex items-center justify-center h-full w-full ">
                @auth
                    <a href="{{ route('chat') }}" class="bg-green-500 p-2 rounded text-white">Start Chatting</a>
                @else
                    <button href="{{ route('login') }}" class="py-2 px-4 bg-blue-500 text-white rounded-full">Login to Start
                        Chatting</button>
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>
