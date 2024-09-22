<x-app-layout>
    <div class="p-4">
        <h1 class="text-3xl font-bold capitalize">Job Request</h1>
        <p class="py-2">Name: {{ $job->name }}</p>
        <p class="py-2">Email: {{ $job->email }}</p>
        <p class="py-2">Phone Number: {{ $job->phone_number }}</p>
        <p class="py-2">Category: {{ $job->category_type }}</p>
        <p class="py-2">State: {{ $job->state ? $job->state->s_name : 'N/A' }}</p>
        <p class="py-2">City: {{ $job->city ? $job->city->s_name : 'N/A' }}</p>
        <p class="py-2">Address: {{ $job->address }}</p>
        <p class="py-2">Experience: {{ $job->experience }}</p>
        <p class="py-2">Salary: {{ $job->salary }}</p>
        <p class="py-2">
            Resume:
            <a href="{{ asset('storage/' . $job->resume) }}" target="_blank" download>
                <img src="{{ asset('storage/' . $job->resume) }}" alt="" class="h-40 w-40 object-cover">
            </a>
        </p>
    </div>

</x-app-layout>
