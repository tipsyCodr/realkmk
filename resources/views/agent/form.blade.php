<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-center">
            <img src="{{ asset('img/logo.png') }}" alt="RealKMK" class="h-20 w-auto">
        </div>
        
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow">
            <h2 class="text-2xl font-bold mb-6">Real Agent Registration</h2>

            <form action="{{ route('agent.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" required value="{{ old('name') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" id="email" required value="{{ old('email') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                    <input type="tel" name="mobile" id="mobile" required value="{{ old('mobile') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
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


                <div>
                    <label for="area" class="block text-sm font-medium text-gray-700">Area/Locality</label>
                    <input type="text" name="area" id="area" required value="{{ old('area') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="experience" class="block text-sm font-medium text-gray-700">Real Estate Experience</label>
                    <select name="experience" id="experience" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">Select Experience</option>
                        <option value="1 year" {{ old('experience') == '1 year' ? 'selected' : '' }}>1 Year</option>
                        <option value="3 years" {{ old('experience') == '3 years' ? 'selected' : '' }}>3 Years</option>
                        <option value="5+ years" {{ old('experience') == '5+ years' ? 'selected' : '' }}>5+ Years</option>
                    </select>
                </div>

                <div>
                    <label for="bank_name" class="block text-sm font-medium text-gray-700">Bank Name</label>
                    <input type="text" name="bank_name" id="bank_name" required value="{{ old('bank_name') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="account_number" class="block text-sm font-medium text-gray-700">Account Number</label>
                    <input type="text" name="account_number" id="account_number" required value="{{ old('account_number') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="ifsc_code" class="block text-sm font-medium text-gray-700">IFSC Code</label>
                    <input type="text" name="ifsc_code" id="ifsc_code" required value="{{ old('ifsc_code') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="pan_card" class="block text-sm font-medium text-gray-700">PAN Card</label>
                    <input type="file" name="pan_card" id="pan_card" required accept=".jpg,.jpeg,.png,.pdf"
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="mt-1 text-sm text-gray-500">Upload PAN Card (JPG, PNG or PDF)</p>
                </div>

                <div>
                    <label for="aadhar_card" class="block text-sm font-medium text-gray-700">Aadhar Card</label>
                    <input type="file" name="aadhar_card" id="aadhar_card" required accept=".jpg,.jpeg,.png,.pdf"
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="mt-1 text-sm text-gray-500">Upload Aadhar Card (JPG, PNG or PDF)</p>
                </div>

                <div>
                    <label for="passport_photo" class="block text-sm font-medium text-gray-700">Passport Photo</label>
                    <input type="file" name="passport_photo" id="passport_photo" required accept="image/*"
                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    <p class="mt-1 text-sm text-gray-500">Upload a recent passport photo (JPG or PNG)</p>
                </div>

                <div class="flex items-center justify-end mt-6">
                    <button type="submit"
                        class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-200">
                        Register as Agent
                    </button>
                </div>
            </form>
        </div>
        <div class="flex items-center justify-center">

        <div class="px-6 py-4 my-4 w-80 rounded-xl gold-bg transition-opacity duration-500 ease-in-out " id="bGold"
            style="">

            <div class=" bg-gray-50 bg-opacity-45 p-2 rounded-t-lg">
                <h2 class="text-4xl font-bold text-center py-4 text-black">Join  Pay</h2>
                <p class="font-bold text-3xl text-center pb-4 text-black"> Rs.9,999</p>
                <b class="p-2 block text-center capitalize">
                    {{-- We are committed to offering the best deals and services.
                    <br>
                    Upon purchasing your property, pay Rs.9,000. --}}

                    We are providing this service for free. If you want to support us, feel free to donate a tip.
                </b>
                <ol class="card-text text-left ">
                    <li><i class="fa fa-check-circle text-green-600"></i> 1 Year Validity</li>
                    <!-- <li>Giving Seller Geniune Number </li> -->
                    <li><i class="fa fa-check-circle text-green-600"></i> 0% Commission</li>
                    <!-- <li><i class="fa fa-check-circle text-green-600"></i> No Agents & No Broker Policy</li> -->
                    <li><i class="fa fa-check-circle text-green-600"></i> Owner Number Provided</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Owner To Agent Meeting</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Add Whatsapp Group</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Privacy Mobile Number</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Dedicated Support</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Bank Seizing Properties</li>
                    <!-- <li><i class="fa fa-check-circle text-green-600"></i> Buyer Bank Refinance</li> -->
                    {{-- <li><i class="fa fa-check-circle text-green-600"></i> Total amount Rs.19,500</li> --}}
                </ol>
            </div>
            <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                @csrf
                <input type="hidden" name="amount" value="9,999" />
                <input class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-b-lg w-full" type="submit"
                    name="submit" value="Pay Now" />
            </form>
        </div>
    </div>
    </div>
</x-app-layout>

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
