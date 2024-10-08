<!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
<x-app-layout>
    <div class="p-2">
        <p class="font-bold">Which type of job you want?</p>
        <div class="py-4">
            <ul>
                @foreach ($jobs as $job)
                    <li><a class="block hover:bg-gray-300 py-4 border"
                            href="{{ route('jobs.form', $job->id) }}">{{ $job->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
