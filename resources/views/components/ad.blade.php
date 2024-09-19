<div class="border p-2 flex justify-center  ">
    @if (!is_null($ad) && isset($ad['url']))
        <a href="{{ $ad['url'] }}" target="_blank">
            <img class="img-fluid" src="{{ asset('storage/uploads/ad_images/' . $ad['image']) }}"
                alt="{{ $ad['image'] }}">
        </a>
    @endif


</div>
