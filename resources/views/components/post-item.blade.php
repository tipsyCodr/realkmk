<a class="" href="{{ route('listing.view', $post['id']) }}">
    <div class="mx-auto px-2 my-6 ">
        <div class="max-w-xs cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
            @php
                $photos = json_decode($post['photos'], true);
            @endphp
            @if (is_array($photos))
                @foreach ($photos as $photo)
                    <img src="{{ $photo ? Storage::url($photo) : '' }}" alt="{{ $post['title'] }}"
                        class="w-full h-[340px] rounded-lg object-cover object-center {{ $photo ? '' : 'bg-gray-300' }}"
                        alt="listing" onerror="this.src='{{ asset('img/no-image.png') }}'">
                @break
            @endforeach
        @else
            <img src="{{ $post['photos'] ? Storage::url('uploads/property_images/' . $post['photos']) : '' }}"
                alt="{{ $post['title'] }}"
                class="w-full h-[340px] rounded-lg object-cover object-center {{ $post['photos'] ? '' : 'bg-gray-300' }}"
                alt="listing" onerror="this.src='{{ asset('img/no-image.png') }}'">
        @endif

        <p class=" ml-4 text-lg font-semibold text-green-600">
            ₹ {{ IND_money_format($post['price']) }}</p>
        <p class=" pl-4 text-xs  text-gray-400"><i class="fa fa-location-dot"></i> {{ $post['location'] }}</p>
        <p class="mt-4 pl-4 font-bold text-gray-700 h-12 overflow-hidden whitespace-nowrap text-ellipsis">
            {{ $post['ad_title'] }}
        </p>
        <p class='pl-4 text-xs  text-gray-400'>Click to know more</p>
    </div>
</div>
</a>
