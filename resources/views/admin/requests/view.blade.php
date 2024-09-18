<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="bg-white rounded-lg shadow-md p-4 my-2">
            <h2 class="text-2xl font-bold">Properties Requests</h2>
            <a class="block my-4 w-full text-center text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-md"
                href="{{ route('admin.requests.properties.list') }}">View Properties Requests</a>
        </div>
        <div class="bg-white rounded-lg shadow-md p-4 my-2">
            <h2 class="text-2xl font-bold">Jobs Requests</h2>
            <a class="block my-4 w-full text-center text-white bg-blue-500 hover:bg-blue-700 px-4 py-2 rounded-md"
                href="{{ route('admin.requests.jobs.list') }}">View Jobs Requests</a>
        </div>
    </div>

</x-app-layout>
