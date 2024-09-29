<div class="">
    <div class="carousel">
        <div class="wrapper">
            <div class="item  flex justify-center bg-black">
                <div class="swiper flex justify-center">
                    <div class="swiper-wrapper ">
                        @php
                            $photos = json_decode($listing['photos'], true);
                        @endphp
                        @if (is_array($photos))
                            @foreach ($photos as $photo)
                                <div class="swiper-slide text-center flex items-center justify-center">
                                    <img src="{{ Storage::url($photo) }}" alt="{{ $listing['title'] }}"
                                        class="w-full h-auto rounded mx-auto" style="max-width: 500px;">
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide text-center flex items-center justify-center">
                                <img src="{{ Storage::url('uploads/property_images/' . $listing['photos']) }}"
                                    alt="{{ $listing['title'] }}" class="w-full h-auto rounded mx-auto"
                                    style="max-width: 500px;">
                            </div>
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="interaction-bar ">
        <div class="flex justify-between items-center p-4 bg-gray-50 shadow space-x-4">
            <div class="flex items-center space-x-4">
                <div class="flex flex-col">
                    <p class="text-2xl font-bold text-gray-800">&#x20B9;
                        {{ number_format($listing['price'], 0, '.', ',') }} /-</p>

                </div>
            </div>

            <div class="flex-shrink-0">
                <button class="p-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Like
                </button>
            </div>
        </div>

    </div>

    <div class=" px-4 pt-4 flex flex-row justify-between">
        @if (Auth::check() && Auth::user()->id == $listing['user_id'])
            <div><b>{{ $listing['views'] }} Views</b></div>
        @endif

        {{-- <p class="flex items-center"> <b>Location: </b> </p> --}}

        <p class="nowrap"><b class="nowrap" style="white-space: nowrap"> {{ $listing['likes'] }} Likes</b></p>
    </div>


</div>

<div class="px-4">
    <small class="text-gray-500">Posted on {{ $listing['created_at'] }}</small>
</div>




<div class="p-4">
    <div class="pb-4">
        <h2 class="text-lg font-bold">Ad TItle</h2>
        <p class='text-sm'>{{ $listing['ad_title'] }}</p>
    </div>
    <h2 class="text-lg pb-4 font-bold border-bottom border-black">Details</h2>
    <div class="flow-root">
        <dl class="-my-3 divide-y divide-gray-100 text-sm">
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Mobile</dt>
                <dd class="text-gray-700 sm:col-span-2">
                    {{ $listing['mobile'] ? '+91 ' . $listing['mobile'] : 'Not Available' }}
                </dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Location</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['location'] ?? '' }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Bedrooms</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['bedrooms'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Bathrooms</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['bathrooms'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Furnishing</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['furnishing'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Construction Status</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['construction_status'] }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Listed by</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['listed_by'] }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Facing</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['facing'] }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Project Name</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['project_name'] }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Super Built-up Area</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['super_builtup_area'] }} <b
                        class="text-sm">sq.ft.</b></dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Carpet Area</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['carpet_area'] }} <b class="text-sm">sq.ft.</b>
                </dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Maintenance</dt>
                <dd class="text-gray-700 sm:col-span-2">Rs. {{ $listing['maintainance'] }} (Monthly)</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Total Floors</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['total_floors'] }}</dd>
            </div>
            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">Car Parking</dt>
                <dd class="text-gray-700 sm:col-span-2">{{ $listing['car_parking'] }}</dd>
            </div>

            <div class="grid grid-cols-1 gap-1 py-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4">
                <dt class="font-bold text-gray-900">About listing</dt>
                <dd class="text-gray-700 sm:col-span-2 pb-6">{{ $listing['description'] }}
                </dd>
            </div>
        </dl>
    </div>

    <div class="account_bar border-y p-4 ">
        {{-- This is a future feature which will require db changes --}}
        <a class="flex justify-between" href="#">
            <div class="px-4 flex items-center">
                <img src="{{ isset($listing['user']) && $listing['user']['profile_picture'] ? $listing['user']['profile_picture'] : '' }}"
                    width="30" height="30" class="rounded-full mr-2" />
                <p class="text-black">
                    {{ isset($listing['user']) && isset($listing['user']['name']) ? $listing['user']['name'] : '' }}
                </p>
            </div>

            <div class="px-4">
                <b class="font-bold text-2xl ">></b>
            </div>
        </a>
    </div>


    <div class="p-4">
        <h2 class='text-xl font-bold py-6'>Location</h2>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q={{ $listing['location'] ? $listing['location'] . '+' . ($listing['state'] ?? '') . '+' . ($listing['city'] ?? '') : '' }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>

    <div class="px-2 py-4 my-4 flex justify-between border-y">
        <h2 class="font-bold text-sm ">AD UID: {{ $listing['listing_uid'] }} </h2>
        <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded"
            href="#report/{{ $listing['listing_uid'] }}"> REPORT THIS AD</a>
    </div>

</div>
<div>
    <div class="fixed bottom-0 left-0 w-full h-16 bg-white shadow " style="z-index: 5">

        <div class="flex flex-row  justify-between items-center p-2">
            <div class="flex-1">
                <a class='p-2 w-full block text-center bg-blue-500   text-white hover:bg-gray-300 hover:text-black'
                    href="tel:{{ $listing['mobile'] ?? '' }}" target="_blank">
                    <i class="fa fa-phone p-2"></i> Call </a>
            </div>
            <div class="flex-1">
                <a class='p-2 w-full block text-center bg-green-500  text-white hover:bg-green-600 '
                    href="https://wa.me/{{ $listing['mobile'] ?? '' }}" target="_blank">
                    <i class="fab fa-whatsapp p-2"></i> Chat on Whatsapp
                </a>
            </div>

        </div>
    </div>
</div>
