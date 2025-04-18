<x-admin-layout>
    <div class="">
        <div class="carousel">
            <div class="wrapper">
                <div class="item  flex justify-center bg-black">
                    <div class="swiper flex justify-center">
                        <div class="swiper-wrapper ">
                            @php
                                $photos = $listing['photos'];
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
                        <h1 class="text-xl text-gray-700 overflow-hidden overflow-ellipsis whitespace-nowrap">
                            {{ $listing['ad_title'] }}
                        </h1>
                    </div>
                </div>
            </div>

        </div>

        <div class=" px-4 pt-4 flex flex-row justify-between">
            @if (Auth::check() && Auth::user()->id == $listing['user_id'])
                <div><b>{{ $listing['views'] }} Views</b></div>
            @endif

            <p class="flex items-center"> <b>Location: </b> {{ $listing['location'] }}</p>

            <p class="nowrap"><b class="nowrap" style="white-space: nowrap"> {{ $listing['likes'] }} Likes</b></p>
        </div>
        <div class="p-4 flex flex-col sm:flex-row gap-2 items-center w-full justify-between">
            <form class="w-full" method="POST" action="{{ route('admin.listings.delete') }}">
                @csrf
                <input type="hidden" name='id'value="{{ $listing['id'] }}">
                <button type="submit" class="loaderButton p-2 bg-red-500 text-white rounded hover:bg-red-600"> Delete
                    Listing
                </button>
            </form>
            @if ($listing['status'] == 0)
                <form class="w-full" method="POST" action="{{ route('admin.listings.enable') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $listing['id'] }}">
                    <button type="submit"
                        class="p-2 loaderButton border border-black bg-white text-black rounded hover:bg-white">
                        Enable Listing
                    </button>
                </form>
            @else
                <form class="w-full" method="POST" action="{{ route('admin.listings.disable') }}">
                    @csrf

                    <input type="hidden" name="id" value="{{ $listing['id'] }}">
                    <button type="submit" class="loaderButton p-2 bg-black text-white rounded hover:bg-black">
                        Disable Listing
                    </button>
                </form>
            @endif
        </div>

    </div>

    <div class="px-4">
        <small class="text-gray-500">Posted on {{ $listing['created_at'] }}</small>
    </div>




    <div class="p-4">
        {{-- <h2>Details</h2> --}}
        <div class="overflow-x-auto" style="max-width: 500px;">
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-100 shadow" colspan=2>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">Mobile:</td>
                        <td class="border px-4 py-2">{{ $listing['mobile'] ?? '' }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Bedrooms:</td>
                        <td class="border px-4 py-2">{{ $listing['bedrooms'] }}</td>
                    </tr>

                    <tr>
                        <td class="border px-4 py-2">Bathrooms:</td>
                        <td class="border px-4 py-2">{{ $listing['bathrooms'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Furnishing:</td>
                        <td class="border px-4 py-2">{{ $listing['furnishing'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Construction Status:</td>
                        <td class="border px-4 py-2">{{ $listing['construction_status'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Listed by:</td>
                        <td class="border px-4 py-2">{{ $listing['listed_by'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Facing:</td>
                        <td class="border px-4 py-2">{{ $listing['facing'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Project Name:</td>
                        <td class="border px-4 py-2">{{ $listing['project_name'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Super Built-up Area:</td>
                        <td class="border px-4 py-2">{{ $listing['super_builtup_area'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Carpet Area:</td>
                        <td class="border px-4 py-2">{{ $listing['carpet_area'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Maintenance:</td>
                        <td class="border px-4 py-2">{{ $listing['maintainance'] }}</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">Total Floors:</td>
                        <td class="border px-4 py-2">{{ $listing['total_floors'] }}</td>
                    </tr>
                    {{-- <tr>
                        <td class="border px-4 py-2">Floor No:</td>
                        <td class="border px-4 py-2">{{ $listing['floor_no'] }}</td>
                    </tr> --}}
                    <tr>
                        <td class="border px-4 py-2">Car Parking:</td>
                        <td class="border px-4 py-2">{{ $listing['car_parking'] }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="account_bar border-y p-4 ">
        {{-- This is a future feature which will require db changes --}}
        <a class="flex justify-between" href="#">
            <div class="px-4 flex items-center">
                <img src="https://i.pravatar.cc/100?img={{ rand(1, 70) }}" width="30" height="30"
                    class="rounded-full mr-2" />
                <p class="text-black">{{ $listing['user'] ? $listing['user']['name'] : '' }}</p>
            </div>

            <div class="px-4">
                <b class="font-bold text-2xl ">></b>
            </div>
        </a>
    </div>
    <div class="p-4">
        <h2 class='text-xl font-bold'>Description</h2>
        <p class="text-black">{{ $listing['description'] }}</p>
    </div>

    <div class="p-4">
        <h2 class='text-xl font-bold'>Location</h2>
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

    </x-app-layout>
