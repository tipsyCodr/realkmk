<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
<x-app-layout>
    <x-alert />
    <x-back-button />
    <div class="form-wrapper px-4 ">
        <div class="py-6">
            <h1 class="text-3xl font-bold  pb-2 capitalize">Request form for Buyer</h1>
            <p class="text-orange-500 italic capitalize">Fill this Request form below, then you can browse thousands of
                properties. We also provide Bank Properties & Owner
                Properties.</p>
        </div>

        {{-- <form id="property_request_form" onsubmit="submitForm(event)" action="{{ route('properties.form.store') }}" --}}
        <form id="property_request_form" action="{{ route('properties.form.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" name="name" type="text" placeholder="Enter Your Name"
                    value="{{ old('name') }}" required>
                <input type="hidden" name="location" value="{{ old('location') ? old('location') : $location }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="mobile">
                    Mobile
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="mobile" name="mobile" type="text" placeholder="Enter Your Mobile Number"
                    value="{{ old('mobile') }}" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" name="email" type="email" placeholder="Enter Your Email"
                    value="{{ old('email') }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="state">
                    State
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="state" name="state" required onchange="loadCities(this.value)">
                    <option value="">Select State</option>

                    @foreach ($states as $state)
                        {{-- <option value="{{ $state->pk_i_id }}" {{ old('state') == $state->pk_i_id ? 'selected' : '' }}>
                        {{ $state->s_name }}
                    </option> --}}
                        <option value="{{ $state->pk_i_id }}">
                            {{ $state->s_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                    City <span id="city-loader" style='display: none;'> <i class="fa fa-spinner fa-spin"></i></span>

                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="city" name="city" disabled required>
                    <option value="">Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->pk_i_id }}">
                            {{ $city->s_name }}
                        </option>
                        {{-- <option value="{{ $city->pk_i_id }}" {{ old('city') == $city->pk_i_id ? 'selected' : '' }}>
                        {{ $city->s_name }}
                    </option> --}}
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                    Category
                </label>
                <select
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="category" name="category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                    Address
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="address" name="address" placeholder="Enter Your Address">{{ old('address') }}</textarea>
            </div>
            <!-- <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="description" name="description" placeholder="Enter Your Description">{{ old('description') }}</textarea>
            </div> -->
            <div class="mb-4">
                <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4" role="alert">
                    <p class="font-semibold">Important Instructions:</p>
                    <p> You have to email on <a href="mailto:helpline@realkmk.com">helpline@realkmk.com</a>.To get the password, please make the payment of 999rs. Then you will receive an OTP, which you need to fill in this form.</p>
                </div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="password" name="password" type="password" placeholder="Enter Your Password"
                    required>
            </div>

            <fieldset class="mb-4 p-4 border border-gray-300 rounded">
                <legend class="text-gray-700 text-sm font-bold">Your Budget</legend>
                <div class="flex space-x-4">
                    <div class="w-1/2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="min_price">
                            Min Price
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="min_price" name="min_price" type="text" placeholder="Enter Min Price"
                            value="{{ old('min_price') }}">
                    </div>
                    <div class="w-1/2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="max_price">
                            Max Price
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="max_price" name="max_price" type="text" placeholder="Enter Max Price"
                            value="{{ old('max_price') }}">
                    </div>
                </div>
            </fieldset>

            <div class="flex items-center justify-between">
                <button id="submitBtn"
                    class="w-full bg-blue-500  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>
    
    <h2 class="text-center py-6 font-bold text-3xl">Join Membership</h2>
    <div class="mx-auto px-6 py-4 my-4 w-80 rounded-xl gold-bg transition-opacity duration-500 ease-in-out " id="bGold"
            style="">
            <div class=" bg-gray-50 bg-opacity-45 p-2 rounded-t-lg">
                <h2 class="text-4xl font-bold text-center py-4 text-black">Membership Pay</h2>
                <p class="font-bold text-3xl text-center pb-4 text-black"> Rs. 999</p>
                <b class="p-2 block text-center capitalize">
                    {{-- We are committed to offering the best deals and services.
                    <br>
                    Upon purchasing your property, pay Rs.9,000. --}}

                    We Are working Hard for providing the Best Deals And Services for you. When you successfully
                    purchase your property with us pay Rs.4,000
                    Total Amount Rs. 4,999
                </b>
                <ol class="card-text text-left ">
                    <li><i class="fa fa-check-circle text-green-600"></i> Unlimited Validity</li>
                    <!-- <li>Giving Seller Geniune Number </li> -->
                    <li><i class="fa fa-check-circle text-green-600"></i> 0% Commission</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> No Agents & No Broker Policy</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Owner Number Provided</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Owner To Owner Meeting</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Add Whatsapp Group</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Privacy Mobile Number</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Dedicated Support</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Bank Seizing Properties</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Buyer Bank Refinance</li>
                    {{-- <li><i class="fa fa-check-circle text-green-600"></i> Total amount Rs.19,500</li> --}}
                </ol>
            </div>
            <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                @csrf
                <input type="hidden" name="amount" value="999" />
                <input class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-b-lg w-full" type="submit"
                    name="submit" value="Pay Now" />
            </form>
        </div>
        <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4" role="alert">
                    <p class="font-semibold">Important Instructions:</p>
                    <p> You have to email on <a href="mailto:helpline@realkmk.com">helpline@realkmk.com</a>.To get the password, please make the payment of 999rs. Then you will receive an OTP, which you need to fill in this form.</p>
                </div>
    <script>
        function loadCities(stateId) {
            const cityLoader = document.getElementById('city-loader');
            cityLoader.style.display = 'inline';
            axios.get(`{{ route('cities.by.state') }}?stateId=${stateId}`)
                .then(response => {
                    const cities = response.data;
                    const citySelect = document.getElementById('city');
                    citySelect.disabled = false;
                    cityLoader.style.display = 'none';
                    citySelect.innerHTML = `<option value="">Select City</option>`;
                    cities.forEach(city => {
                        const option = document.createElement('option');
                        option.value = city.pk_i_id;
                        option.text = city.s_name;
                        citySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error(error);
                });
        }

        function submitForm(event) {
            event.preventDefault();
            const form = document.getElementById('property_request_form');
            const formData = new FormData(form);
            let isFormValid = true;
            for (const entry of formData.entries()) {
                if (!entry[1]) {
                    isFormValid = false;
                    break;
                }
            }
            if (isFormValid) {
                axios.post("{{ route('properties.form.store') }}", formData)
                    .then(response => {
                        console.log(response);
                        // window.location.href = '{{ route('jobs.list') }}';
                    })
                    .catch(error => {
                        console.error(error);
                    });
            } else {
                alert('Please fill all the fields');
            }
        }
    </script>
</x-app-layout>
