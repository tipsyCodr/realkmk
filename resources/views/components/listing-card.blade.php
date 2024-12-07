<div
    class="m-2 mx-auto sm:mx-16 flex mx-w-2xl sm:max-w-full  overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 ">

    @php
        $photos = json_decode($listing['photos'], true);
    @endphp
    @if (is_array($photos))
        @foreach ($photos as $photo)
            <a class="w-1/3 bg-cover relative" href="{{ route('admin.listings.show', $listing['id']) }}"
                style="background-image: url('{{ asset('storage/' . $photo) }}')">
                @if ($listing['premium'])
                    <div class="absolute top-0 right-0 bg-yellow-500 text-white px-2 py-1 text-sm font-bold rounded-bl">Premium</div>
                @endif
                <div>
                </div>
            </a>
            @break
        @endforeach
    @else
        <a class="w-1/3 bg-cover relative" href="{{ route('admin.listings.show', $listing['id']) }}"
            style="background-image: url('{{ asset('storage/' . $photos) }}')">
            @if ($listing['premium'])
                <div class="absolute top-0 right-0 bg-yellow-500 text-white px-2 py-1 text-sm font-bold rounded-bl">Premium</div>
            @endif
            <div>
            </div>
        </a>
    @endif

<a class="w-2/3 p-4 md:p-4" href="{{ route('admin.listings.show', $listing['id']) }}">
    <div class="">
        <h1 class="text-xl font-bold text-gray-800 dark:text-white">{{ $listing['project_name'] }}</h1>
        @if ($listing['status'] == 0)
            <span class="text-red-500">This listing is disabled</span>
        @else
            <span class="text-green-500">This listing is active</span>
        @endif
        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 ">{{ $listing['ad_title'] }}</p>

        <div class="flex mt-2 item-center">
            <span class="px-1 text-white text-xs"><i
                    class="fa fa-location-dot pr-1 "></i>{{ $listing['location'] }}</span>
            <span class="px-1 text-white text-xs"><i class="fa fa-building pr-1 "></i>
                {{ $listing['city'] }}</span>
            <form action="{{ route('admin.listings.update.premium', $listing['id']) }}" method="POST" class="ml-2">
                @csrf
                @method('PUT')
                <button type="submit" class="px-2 py-1 text-xs font-semibold {{ $listing['premium'] ? 'bg-yellow-500 hover:bg-yellow-600' : 'bg-gray-500 hover:bg-gray-600' }} text-white rounded-full transition duration-300">
                    {{ $listing['premium'] ? 'Premium' : 'Make Premium' }}
                </button>
            </form>
        </div>
        <h1 class="text-lg font-bold text-green-700 dark:text-green-500 md:text-xl">&#x20B9;
            {{ number_format($listing['price'], 0, '.', ',') }}
        </h1>
        <div class="flex justify-between mt-3 item-center">

            <div class="flex flex-col gap-5 sm:flex-row w-full">
                <form method="POST" action="{{ route('admin.listings.delete') }}">
                    @csrf
                    <input type="hidden" name='id'value="{{ $listing['id'] }}">
                    <button type="submit"
                        class="loaderButton px-3 py-2 m-2 text-xs font-bold text-white uppercase transition-all duration-300 transform bg-red-800 rounded dark:bg-red-700 hover:bg-red-700 dark:hover:bg-red-600 focus:outline-none focus:bg-red-700 dark:focus:bg-red-600">
                        Delete Listing
                    </button>
                </form>
                @if ($listing['status'] == 0)
                    <form method="POST" action="{{ route('admin.listings.enable') }}">
                        @csrf

                        <input type="hidden" name="id" value="{{ $listing['id'] }}">
                        <button type="submit"
                            class="loaderButton border border-black  px-3 py-2 m-2 text-xs font-bold text-black uppercase transition-all duration-300 transform bg-white rounded dark:bg-white hover:bg-white dark:hover:bg-white focus:outline-none focus:bg-white dark:focus:bg-white">

                            Enable Listing
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{ route('admin.listings.disable') }}">
                        @csrf

                        <input type="hidden" name="id" value="{{ $listing['id'] }}">
                        <button type="submit"
                            class="loaderButton px-3 py-2 m-2 text-xs font-bold text-white uppercase transition-all duration-300 transform bg-black rounded dark:bg-black hover:bg-black dark:hover:bg-black focus:outline-none focus:bg-black dark:focus:bg-black">
                            Disable Listing
                        </button>
                    </form>
                @endif

            </div>
        </div>
    </div>
</a>
</div>

{{-- 
[
{
"id": 1,
"listing_uid": "536256299340935",
"ad_title": "House For Sale",
"description": "1aKcnhI9qyvHJ4xTr3Wfyj5SofHfHMAzlR9DVGEw7TYxDl9hFb",
"mobile": null,
"city": null,
"state": null,
"price": "4330139.00",
"category_type_id": 2,
"category_id": 2,
"user_id": 5,
"photos": "0.jpg",
"location": "Durg",
"bedrooms": 5,
"bathrooms": 2,
"furnishing": "Semi Furnished",
"construction_status": "New Launch",
"listed_by": "Dealer",
"facing": "East",
"project_name": "Kalp Gaurav",
"super_builtup_area": 133,
"carpet_area": 567,
"maintainance": 492,
"total_floors": 4,
"floor_no": 4,
"car_parking": 3,
"salary_period": "lX9QaEJ0iT",
"salary": "407",
"position_type": "eRnyPe45q7",
"salary_min_range": 735,
"salary_max_range": 594,
"premium": 4,
"views": 8,
"likes": 5,
"slug": "house_for_sale",
"expires_at": "2024-09-09 17:43:54",
"status": "rZYSuop1Lk",
"created_at": "2024-09-07T17:43:54.000000Z",
"updated_at": "2024-09-07T17:43:54.000000Z"
}
] --}}
