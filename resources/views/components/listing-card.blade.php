<div class="disabled m-2 mx-auto flex max-w-2xl overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 ">
    <a class="w-1/3 bg-cover" href="{{ route('admin.listings.show', $listing['id']) }}"
        style="background-image: url('{{ asset('storage/uploads/property_images/' . $listing['photos']) }}')">
        <div>
        </div>
    </a>
    <a class="w-2/3 p-4 md:p-4" href="{{ route('admin.listings.show', $listing['id']) }}">
        <div class="">
            <h1 class="text-xl font-bold text-gray-800 dark:text-white">{{ $listing['project_name'] }}</h1>
            @if ($listing['status'] == 1)
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
            </div>

            <div class="flex justify-between mt-3 item-center">
                <h1 class="text-lg font-bold text-green-700 dark:text-green-500 md:text-xl">&#x20B9;
                    {{ number_format($listing['price'], 0, '.', ',') }}
                </h1>
                <div class="flex flex-col sm:flex-row">
                    <form method="POST" action="{{ route('admin.listings.delete') }}">
                        @csrf
                        <input type="hidden" name='id'value="{{ $listing['id'] }}">
                        <button type="submit"
                            class="px-2 py-1 m-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-red-800 rounded dark:bg-red-700 hover:bg-red-700 dark:hover:bg-red-600 focus:outline-none focus:bg-red-700 dark:focus:bg-red-600">
                            Delete Listing
                        </button>
                    </form>
                    @if ($listing['status'] == 1)
                        <form method="POST" action="{{ route('admin.listings.enable') }}">
                            @csrf

                            <input type="hidden" name="id" value="{{ $listing['id'] }}">
                            <button type="submit"
                                class="px-2 py-1 m-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-black rounded dark:bg-black hover:bg-black dark:hover:bg-black focus:outline-none focus:bg-black dark:focus:bg-black">
                                Enable Listing
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('admin.listings.disable') }}">
                            @csrf

                            <input type="hidden" name="id" value="{{ $listing['id'] }}">
                            <button type="submit"
                                class="px-2 py-1 m-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-black rounded dark:bg-black hover:bg-black dark:hover:bg-black focus:outline-none focus:bg-black dark:focus:bg-black">
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
