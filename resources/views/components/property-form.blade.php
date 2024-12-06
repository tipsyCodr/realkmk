@if ($errors->any())
<div id='alert' class=" w-full text-white bg-red-500">
    <div class="container flex items-center justify-between px-6 py-4 mx-auto  my-6">
        <div class="flex flex items-center">
            <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                <path
                    d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z">
                </path>
            </svg>

            <div class="flex flex-col justify-start">
                <p class="mx-3 font-bold">Please fill the form Carefully.</p>
                <ul class='mx-3'>
                    @foreach ($errors->all() as $error)
                    <li class='px-2 text-xs'>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <button
            class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" onclick=" document.querySelector('#alert').classList.add('hidden');" />
            </svg>
        </button>

    </div>
</div>
@endif

<div class="py-4">
    {{-- Property Form --}}
    <div class="form-wrapper px-4">
        <form action="{{ route('listing.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="photos">
                    Photos
                    <a class="p-2 bg-blue-500 text-white rounded" type="button">Select Properties
                        Photos</a>
                    <input
                        class="hidden appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="photos" accept="image/png,image/jpeg" type="file" name="photos[]" multiple>
                </label>

            </div> --}}
            <div class="border-b border-black pb-2">
                <label for="photos" class="block text-gray-700 text-sm font-bold mb-2">Photos</label>

                <label for="photos"
                    class="flex flex-col items-center w-full max-w-lg p-5 mx-auto mt-2 text-center bg-gray-400 border-2 border-gray-500 border-dashed cursor-pointer dark:bg-gray-900 dark:border-gray-700 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8 text-gray-500 dark:text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                    </svg>

                    <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">Upload Property Images
                    </h2>

                    <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg & drop your
                        PNG, JPG. </p>
                    <input id="photos" type="file" name="photos[]" accept="image/png,image/jpeg" class="hidden"
                        multiple max="5" />
                </label>
            </div>
            <div class="mb-4">
                <input type="hidden" name="category_id" value="{{ $category->id }}">
                <input type="hidden" name="category_type_id" value="{{ $categoryType->id }}">

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="ad_title">
                    Ad Title
                </label>
                <input
                    class=" appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="ad_title" type="text" name="ad_title" value="{{ old('ad_title') }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" name="description" placeholder="Enter Your Description" required>{{ old('description') }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="mobile">
                    Mobile
                </label>
                <input
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="mobile" type="tel" name="mobile" pattern="[0-9]{10}"
                    placeholder="Enter Your Mobile Number" value="{{ old('mobile') }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                    Price
                </label>
                <input
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="price" type="number" name="price" value="{{ old('price') }}" required>
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="state">
                    State
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="state" name="state" data-search="true" onchange="loadCities(this.value)" required>
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                    <option value="{{ $state->pk_i_id }}">{{ $state->s_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                    City <span id="city-loader" style='display: none;'> <i class="fa fa-spinner fa-spin"></i></span>
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="city" name="city" data-search="true" disabled required>
                    <option value="">Select City</option>

                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                    Area (Locality)
                </label>
                <input
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="location" type="text" name="location" value="{{ old('location') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bedrooms">
                    Bedrooms
                </label>
                <select
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="bedrooms" name="bedrooms" required>
                    <option value="">Select Bedrooms</option>
                    @for ($i = 1; $i <= 7; $i++)
                        <option value="{{ $i }}" {{ old('bedrooms') == $i ? 'selected' : '' }}>
                        {{ $i }}</option>
                        @endfor
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="bathrooms">
                    Bathrooms
                </label>
                <select
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="bathrooms" name="bathrooms" required>
                    <option value="">Select Bathrooms</option>
                    @for ($i = 1; $i <= 7; $i++)
                        <option value="{{ $i }}" {{ old('bathrooms') == $i ? 'selected' : '' }}>
                        {{ $i }}</option>
                        @endfor
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="furnishing">
                    Furnishing
                </label>
                <select
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="furnishing" name="furnishing" required>
                    <option value="">Select Furnishing</option>
                    <option value="No Furnishing" {{ old('furnishing') == 'No Furnishing' ? 'selected' : '' }}>
                        No Furnishing</option>
                    <option value="Semi Furnished" {{ old('furnishing') == 'Semi Furnished' ? 'selected' : '' }}>
                        Semi Furnished</option>
                    <option value="Fully Furnished" {{ old('furnishing') == 'Fully Furnished' ? 'selected' : '' }}>
                        Fully Furnished</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="construction_status">
                    Construction Status
                </label>
                <select
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="construction_status" name="construction_status" required>
                    <option value="">Select Construction Status</option>
                    <option value="Under Construction"
                        {{ old('construction_status') == 'Under Construction' ? 'selected' : '' }}>
                        Under Construction</option>
                    <option value="Ready To Move"
                        {{ old('construction_status') == 'Ready To Move' ? 'selected' : '' }}>
                        Ready To Move</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="listed_by">
                    Listed By
                </label>
                <select
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="listed_by" name="listed_by" required>
                    <option value="">Select Listed By</option>
                    <option value="Owner" {{ old('listed_by') == 'Owner' ? 'selected' : '' }}>
                        Owner</option>
                    <option value="Builder" {{ old('listed_by') == 'Builder/Developer' ? 'selected' : '' }}>
                        Builder</option>
                    <option value="Agent" {{ old('listed_by') == 'Agent' ? 'selected' : '' }}>
                        Agent</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="facing">
                    Facing
                </label>
                <select
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="facing" name="facing" required>
                    <option value="">Select Facing</option>
                    <option value="East" {{ old('facing') == 'East' ? 'selected' : '' }}>
                        East</option>
                    <option value="West" {{ old('facing') == 'West' ? 'selected' : '' }}>
                        West</option>
                    <option value="North" {{ old('facing') == 'North' ? 'selected' : '' }}>
                        North</option>
                    <option value="South" {{ old('facing') == 'South' ? 'selected' : '' }}>
                        South</option>
                    <option value="North-East" {{ old('facing') == 'North-East' ? 'selected' : '' }}>
                        North-East</option>
                    <option value="North-West" {{ old('facing') == 'North-West' ? 'selected' : '' }}>
                        North-West</option>
                    <option value="South-East" {{ old('facing') == 'South-East' ? 'selected' : '' }}>
                        South-East</option>
                    <option value="South-West" {{ old('facing') == 'South-West' ? 'selected' : '' }}>
                        South-West</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="project_name">
                    Project Name
                </label>
                <input
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="project_name" type="text" name="project_name" value="{{ old('project_name') }}"
                    required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="super_builtup_area">
                    Super Builtup Area (ft)
                </label>
                <input
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="super_builtup_area" type="number" name="super_builtup_area"
                    value="{{ old('super_builtup_area') }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="carpet_area">
                    Carpet Area (ft)
                </label>
                <input
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="carpet_area" type="number" name="carpet_area" value="{{ old('carpet_area') }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="maintainance">
                    Maintainance (Monthly)
                </label>
                <input
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="maintainance" type="number" name="maintainance" value="{{ old('maintainance') ?? 0 }}"
                    required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="total_floors">
                    Total Floors
                </label>
                <select
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="total_floors" name="total_floors" required>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}" {{ old('total_floors') == $i ? 'selected' : '' }}>
                        {{ $i }}</option>
                        @endfor
                </select>

            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="total_floors">
                    Car Parking
                </label>
                <select
                    class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="car_parking" name="car_parking" required>
                    <option value="1" {{ old('car_parking') == 0 ? 'selected' : '' }}>
                        0
                    </option>
                    <option value="1" {{ old('car_parking') == 1 ? 'selected' : '' }}>
                        1
                    </option>
                    <option value="2" {{ old('car_parking') == 2 ? 'selected' : '' }}>
                        2
                    </option>
                    <option value="3" {{ old('car_parking') == 3 ? 'selected' : '' }}>
                        3
                    </option>
                    <option value="4" {{ old('car_parking') == 4 ? 'selected' : '' }}>
                        4
                    </option>
                </select>

            </div>

            <div class="flex items-center justify-between">
                <button
                    class="loaderButton bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <div class="flex items-center justify-center">

        <div class="px-6 py-4 my-4 w-80 rounded-xl gold-bg transition-opacity duration-500 ease-in-out " id="bGold">

            <div class=" bg-gray-50 bg-opacity-45 p-2 rounded-t-lg">
                <h2 class="text-4xl font-bold text-center py-4 text-black-100 ">Join Membership Pay</h2>
                <p class="font-bold text-3xl text-center pb-4 text-black"> Rs. 2,999</p>
                <b class="p-2 block text-left capitalize">
                    {{-- We are committed to offering the best deals and services.
        <br>
        Upon selling your property, pay Rs.27,000. --}}

                    We Are working Hard for providing the Best Deals And Services for you. When you successfully,
                    sell your property with us pay Rs. 17000
                    Total Amount 19,999
                </b>
                <ol class="card-text text-left ">
                    <li><i class="fa fa-check-circle text-green-600"></i> Unlimited Validity</li>
                    <!-- <li>Giving Seller Geniune Number </li> -->


                    <li><i class="fa fa-check-circle text-green-600"></i> 0% Commission</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Owner Number Provided</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> No Agents & No Broker Policy</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Owner To Owner Meeting</li>
                    {{-- <li><i class="fa fa-check-circle text-green-600"></i> Add Whatsapp Group</li> --}}
                    <li><i class="fa fa-check-circle text-green-600"></i> Privacy Mobile Number</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Dedicated Support</li>
                    {{-- <li><i class="fa fa-check-circle text-green-600"></i> Buyer Bank Refinance also</li> --}}
                    {{-- <li><i class="fa fa-check-circle text-green-600"></i> Total amount Rs.39,500</li> --}}

                </ol>
            </div>
            <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                @csrf
                <input type="hidden" name="amount" value="2,999" />
                <input class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-b-lg w-full" type="submit"
                    name="submit" value="Pay Now" />
            </form>
        </div>
    </div>

    <script>
        function loadCities(stateId) {
            const cityLoader = document.getElementById('city-loader');
            cityLoader.style.display = 'inline';

            axios.get(`{{ route('cities.by.state') }}?stateId=${stateId}`)
                .then(response => {
                    const cities = response.data;
                    cityLoader.style.display = 'none';
                    const citySelect = document.getElementById('city');
                    citySelect.disabled = false;
                    citySelect.innerHTML = `<option value="">Select City</option>`;
                    cities.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.s_slug;
                        option.text = city.s_name;
                        citySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        }
    </script>