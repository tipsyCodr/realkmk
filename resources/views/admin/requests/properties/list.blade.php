<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold leading-tight">
            Properties Requests
        </h2>

        <ul class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($requests as $request)
                <li class="col-span-1 flex shadow-sm rounded-md py-2 ">
                    <div
                        class=" font-bold flex-shrink-0 flex items-center justify-center w-12 text-white text-sm font-medium rounded-l-md bg-blue-500 px-2">
                        {{ $request->created_at->format('d M') }}
                    </div>
                    <div class="flex-1 px-4 py-2 bg-white rounded-r-md border border-gray-200 hover:bg-gray-300">
                        <p class="text-black">
                            {{ $request->name }}
                        </p>
                        <p class="text-black">
                            {{ $request->created_at->format('M Y') }}
                        </p>
                        <a href="{{ route('admin.requests.properties.view', $request->id) }}"
                            class="text-blue-500 hover:text-blue-700 underline">
                            View
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</x-app-layout>
