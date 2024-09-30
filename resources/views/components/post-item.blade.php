<a class="m-0 p-0" href="{{ route('listing.view', $post['id']) }}">
    <div class="mx-auto px-2">
        <div class="max-w-xs cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
            @php
                $photos = json_decode($post['photos'], true);
            @endphp
            @if (is_array($photos))
                @foreach ($photos as $photo)
                    <img src="{{ Storage::url($photo) }}" alt="{{ $post['title'] }}"
                        class="w-full rounded-lg object-cover object-center" alt="listing">
                @break
            @endforeach
        @else
            <img src="{{ Storage::url('uploads/property_images/' . $post['photos']) }}" alt="{{ $post['title'] }}"
                class="w-full rounded-lg object-cover object-center" alt="listing">
        @endif
        {{-- <img class="w-full rounded-lg object-cover object-center"
        src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt="product" /> --}}
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
