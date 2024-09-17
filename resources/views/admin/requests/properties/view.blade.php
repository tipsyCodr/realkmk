<div class="p-4">
    <h1 class="text-3xl font-bold capitalize">Property Request</h1>
    <p class="py-2">Name: {{ $request->name }}</p>
    <p class="py-2">Email: {{ $request->email }}</p>
    <p class="py-2">Phone Number: {{ $request->mobile }}</p>
    <p class="py-2">Category: {{ $request->category }}</p>
    <p class="py-2">State: {{ $request->state }}</p>
    <p class="py-2">City: {{ $request->city }}</p>
    <p class="py-2">Address: {{ $request->address }}</p>
    <p class="py-2">Location: {{ $request->location }}</p>
    <p class="py-2">Min Price: {{ $request->min_price }}</p>
    <p class="py-2">Max Price: {{ $request->max_price }}</p>
    <p class="py-2">Description: {{ $request->description }}</p>
</div>
