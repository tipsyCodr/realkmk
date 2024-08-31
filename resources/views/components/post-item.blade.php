<div class="p-2 border border-gray-400 m-2 rounded">
    <a href="{{ route('post', $post['slug']) }}">
        <div class="w-30 h-30"><img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-auto rounded">
        </div>
        <p class="text-left text-xl font-bold">₹ {{ $post['price'] }}</p>
        <p class="text-left text-gray-600 py-2">{{ $post['title'] }}</p>
        <span class="flex flex-row items-center"> <x-location-icon />
            <small class="items-center text-gray-500">{{ $post['location'] }}</small>
        </span>
    </a>
</div>
