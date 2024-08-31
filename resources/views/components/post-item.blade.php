<div class="p-2 border border-gray-400 m-2 rounded">
    <a href="{{ route('listing.view', $post['id']) }}">
        <div class="w-30 h-30">
            @php
                $photos = json_decode($post['photos'], true);
            @endphp
            @if (is_array($photos))
                @foreach ($photos as $photo)
                    <img src="{{ $photo }}" alt="{{ $post['title'] }}" class="w-full h-auto rounded">
                @endforeach
            @else
                <img src="{{ $post['photos'] }}" alt="{{ $post['title'] }}" class="w-full h-auto rounded">
            @endif
        </div>
        <p class="text-left text-xl font-bold">₹ {{ $post['price'] }}</p>
        <p class="text-left text-gray-600 py-2">{{ $post['title'] }}</p>
        <span class="flex flex-row items-center"> <x-location-icon />
            <small class="items-center text-gray-500">{{ $post['location'] }}</small>
        </span>
    </a>
</div>
