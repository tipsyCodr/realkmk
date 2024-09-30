<div class="border p-2 flex flex-col justify-center">
    <span class='text-xs text-gray-600 px-1'>Banner Advertisement</span>
    @if (!is_null($ad) && isset($ad['url'], $ad['image']))
        <a href="{{ $ad['url'] }}" target="_blank">
            <img class="img-fluid"
                src="{{ asset('storage/uploads/ad_images/' . $ad['location'] . '/' . $ad['location'] . '_' . $ad['image']) }}"
                alt="{{ $ad['image'] }}">
        </a>
    @endif
</div>
