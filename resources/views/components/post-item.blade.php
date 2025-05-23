<a class="relative" href="{{ route('listing.view', $post['id']) }}">
    <div class="mx-auto px-2 my-6 ">
        <div class="max-w-xs cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
            <div class="h-[200px] bg-gray-500 relative">
                @if ($post['premium'] == 1)
                    <div class="absolute top-1 right-1 text-xs bg-yellow-400 rounded text-white px-2 py-1 font-bold">Premium</div>
                @endif
                @php
                    $photos = json_decode($post['photos'], true);
                @endphp
                @if (is_array($photos))
                    @foreach ($photos as $photo)
                        <img src="{{ $photo ? Storage::url($photo) : 'https://placehold.co/300x400?text=No\nImage' }}"
                            alt="{{ $post['title'] }}" style='height: 200px;'
                            class="w-full h-[250px] rounded-lg object-contain object-center {{ $photo ? '' : 'bg-gray-300' }}"
                            alt="listing" onerror="this.src='https://placehold.co/300x400?text=No\nImage'">
                    @break
                @endforeach
            @else
                <img src="{{ $post['photos'] ? Storage::url('uploads/property_images/' . $post['photos']) : 'https://placehold.co/300x400?text=No\nImage' }}"
                    alt="{{ $post['title'] }}" style='height: 200px;'
                    class="w-full h-[250px] rounded-lg object-contain object-center {{ $post['photos'] ? '' : 'bg-gray-300' }}"
                    alt="listing" onerror="this.src='https://placehold.co/300x400?text=No\nImage'">
            @endif
        </div>

        <p class=" ml-4 text-lg font-semibold text-green-600">
            ₹ {{ IND_money_format($post['price']) }}</p>
        <p class=" pl-4 text-xs  text-gray-400"><i class="fa fa-location-dot"></i> {{ $post['location'] }}</p>
        <p class="mt-4 pl-4 font-bold text-gray-700 h-7 overflow-hidden whitespace-nowrap text-ellipsis">
            {{ $post['ad_title'] }}
        </p>
        <p class='pl-4 text-xs  text-gray-400'>Click to know more</p>
    </div>
</div>
</a>
