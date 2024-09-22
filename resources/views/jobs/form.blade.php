<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
<x-app-layout>
    <div class="p-2">
        <div class="form-wrapper">
            <h1 class='px-6 font-bold text-3xl capitalize py-2'>Fill the request form below:</h1>
            <p class='px-6 text-blue-500 font-bold capitalize'>Fill this Request form below and then make payment by
                clicking on
                payment button below the
                form</p>
            <form id='job_request_form' method="POST" action="{{ route('jobs.store') }}"
                class="w-full flex flex-col bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-900 text-justify text-sm font-bold mb-2" for="category">
                        Job Category
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="category" name="category_type">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ request()->url() == route('jobs.form', $category->id) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Applicant Name
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="name" type="text" placeholder="Enter Your Name" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" name="email" type="email" placeholder="Enter Your Email" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="mobile">
                        Mobile
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="mobile" name="mobile" type="tel" pattern="[0-9]{10}"
                        placeholder="Enter Your Mobile Number" required>
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
                        City
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="city" name="city" data-search="true" required>
                        <option value="">Select City</option>
                        @if (isset($cities))
                            @foreach ($cities as $city)
                                <option value="{{ $city->pk_i_id }}">{{ $city->s_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                        Address
                    </label>
                    <textarea
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="address" name="address" placeholder="Your Address" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="expected_salary">
                        Expected Salary
                    </label>
                    <input
                        class="shadow  py-2 px-3 border  focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        id="expected_salary" name="expected_salary" type="number" placeholder="Expected Salary"
                        style="appearance: textfield;" inputmode="numeric" required />
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="work_field">
                        Type of Job
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="work_field" name="work_field" required>
                        <option value="">Select Type of Job</option>
                        <option value="field-work">Field Work</option>
                        <option value="part-time">Part Time</option>
                        <option value="full-time">Full Time</option>
                        <option value="freelance">Freelance</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="experience">
                        Experience
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="experience" name="experience" required>
                        <option value="">Select Experience</option>
                        <option value="fresher">Fresher</option>
                        <option value="1-year">1 Year</option>
                        <option value="2-3-years">2-3 Years</option>
                        <option value="more-than-4-years">More than 4 Years</option>
                    </select>
                </div>
                {{-- <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="photo_passport">
                        Photo Passport of Applicant
                    </label>
                    <input
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        id="photo_passport" name="photo_passport" type="file" accept=".jpg, .jpeg, .png"
                        required>
                </div> --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="resume">
                        Resume
                    </label>
                    <input
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                        id="resume" name="resume" type="file" accept=".pdf" required>
                </div>
                <div id="message">
                    <div id="success"
                        class="bg-green-200 text-green-800 border border-green-600 p-2 my-2 rounded"style='display: none;'>
                        Your
                        Form Has
                        Been Submitted. We will contact you on your contact details.</div>
                    <div id="error" class="bg-red-200 text-red-800 border border-red-600 p-2 my-2 rounded "
                        style='display: none;'>There is some problem please try again later .</div>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>
            <div id='' class="silver-bg text-white text-center border border-black my-6 rounded p-4">
                <p class="text-center font-bold text-3xl text-black ">Note: </p>
                <p class="text-center font-bold text-3xl text-black capitalize pb-4">Join Membership pay Rs.499
                    only
                </p>
                <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                    @csrf
                    <input type="hidden" name="amount" value="499" />
                    <input class="cursor-pointer w-full p-2  block text-xl gold-bg text-white font-bold rounded"
                        type="submit" name="submit" value=" Pay Rs.499 /- Now" />
                </form>


            </div>
            <div class="py-4 text-center flex flex-col justify-center">
                <p class="font-bold text-2xl capitalize">
                    We are working our best with these companies to provide you with the best and geniune jobs for
                    you.
                </p>
                <img class="py-4 my-4 border" src="{{ asset('img/jobs.jpg') }}" alt="">
            </div>
        </div>

    </div>
    <script>
        function loadCities(stateId) {
            axios.get(`{{ route('cities.by.state') }}?stateId=${stateId}`)
                .then(response => {
                    const cities = response.data;
                    const citySelect = document.getElementById('city');
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

        // function submitsForm(event) {
        //     event.preventDefault();
        //     const form = document.getElementById('job_request_form');
        //     const formData = new FormData(form);
        //     axios.post('{{ route('jobs.store') }}', formData)
        //         .then(response => {
        //             console.log(response);
        //             $('#success').show();
        //             window.location.href = '#message';
        //         })
        //         .catch(error => {
        //             window.location.href = '#message';
        //             $('#error').show();
        //             console.error(error);
        //         });
        // }
        // document.addEventListener('DOMContentLoaded', () => {

        // })
    </script>
</x-app-layout>
