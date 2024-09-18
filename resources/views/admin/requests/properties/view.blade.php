<x-app-layout>
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-md p-4">
            <h2 class="text-2xl font-bold tracking-wide">Property Request</h2>
            <div class="mt-4 flex flex-col">
                <div>
                    <p class="text-gray-600">Name:</p>
                    <p class="font-bold">{{ $request->name }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Email:</p>
                    <p class="font-bold">{{ $request->email }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Phone Number:</p>
                    <p class="font-bold">{{ $request->mobile }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Category:</p>
                    <p class="font-bold">{{ $request->category }}</p>
                </div>
                <div>
                    <p class="text-gray-600">State:</p>
                    <p class="font-bold">{{ $request->state }}</p>
                </div>
                <div>
                    <p class="text-gray-600">City:</p>
                    <p class="font-bold">{{ $request->city }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Address:</p>
                    <p class="font-bold">{{ $request->address }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Location:</p>
                    <p class="font-bold">{{ $request->location }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Min Price:</p>
                    <p class="font-bold">{{ $request->min_price }}</p>
                </div>
                <div>
                    <p class="text-gray-600">Max Price:</p>
                    <p class="font-bold">{{ $request->max_price }}</p>
                </div>
                <div class="col-span-2">
                    <p class="text-gray-600">Description:</p>
                    <p class="font-bold">{{ $request->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
