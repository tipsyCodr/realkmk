<div class="p-2 border border-gray-400 m-2 rounded">
    <a href="{{ route('listing.view', $post['id']) }}">
        <div class="w-30 h-30">
            @php
                $photos = json_decode($post['photos'], true);
            @endphp
            @if (is_array($photos))
                @foreach ($photos as $photo)
                    <img src="{{ Storage::url($photo) }}" alt="{{ $post['title'] }}"
                        class="w-full h-full rounded object-cover">
                @break
            @endforeach
        @else
            <img src="{{ Storage::url('uploads/property_images/' . $post['photos']) }}" alt="{{ $post['title'] }}"
                class="w-full h-full rounded object-cover">
        @endif
    </div>
    <p class="text-left text-xl font-bold">

        ₹ {{ IND_money_format($post['price']) }}

    </p>
    <p class="text-left text-gray-600 py-2">{{ $post['ad_title'] }}</p>
    <span class="flex flex-row items-center"> <i class="fa fa-location-dot p-2"></i>
        <small class="items-center text-gray-500">{{ $post['location'] }}</small>
    </span>
</a>
</div>
