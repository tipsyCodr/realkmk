<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($requests as $request)
            <div class="bg-white rounded-lg shadow p-4">
                <h5 class="text-xl font-bold">{{ $request->name }}</h5>
                {{-- <p class="text-gray-600">Category: {{ $request->category->name }}</p>
                <p class="text-gray-600">Category Type: {{ $request->categoryType->name }}</p> --}}
                <p class="text-gray-600">City: {{ $request->city->name }}</p>
                <p class="text-gray-600">State: {{ $request->state->name }}</p>
                <p class="text-gray-600">Created At: {{ $request->created_at->format('d-m-Y H:i:s') }}</p>
                <div class="mt-4">
                    <a href="{{ route('admin.jobs.requests.view', $request->id) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        View
                    </a>
                </div>
            </div>
        @endforeach
    </div>

</x-app-layout>
