<!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
<x-app-layout>
    <div class="p-6 ">
        <div class="flex flex-col form-wrapper sm:flex-row ">
            @if ($errors->any())
                <div class="fixed top-0 right-0 z-50 mt-4 mr-4">
                    <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-lg shadow-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="">
                <h1 class='px-6 py-2 text-3xl font-bold capitalize'>Fill the request form below:</h1>
                <p class='px-6 font-bold text-blue-500 capitalize'>Fill this Request form below and then make payment by
                    clicking on
                    payment button below the
                    form</p>
                <form id='job_request_form' method="POST" action="{{ route('jobs.store') }}"
                    class="flex flex-col w-full px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-justify text-gray-900" for="category">
                            Job Category
                        </label>
                        <select
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
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
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                            Applicant Name
                        </label>
                        <input
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="name" name="name" type="text" placeholder="Enter Your Name" required>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email" name="email" type="email" placeholder="Enter Your Email" required>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="mobile">
                            Mobile
                        </label>
                        <input
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="mobile" name="mobile" type="tel" pattern="[0-9]{10}"
                            placeholder="Enter Your Mobile Number" required>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="state">
                            State
                        </label>
                        <select
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="state" name="state" data-search="true" onchange="loadCities(this.value)" required>
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->pk_i_id }}">{{ $state->s_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="city">
                            City <span id="city-loader" style='display: none;'><i
                                    class="fa fa-spinner fa-spin"></i></span>
                        </label>
                        <select
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="city" name="city" data-search="true" disabled required>
                            <option value="">Select City</option>
                            @if (isset($cities))
                                @foreach ($cities as $city)
                                    <option value="{{ $city->pk_i_id }}">{{ $city->s_name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                            Address
                        </label>
                        <textarea
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="address" name="address" placeholder="Your Address" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="expected_salary">
                            Expected Salary
                        </label>
                        <input
                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="expected_salary" name="expected_salary" type="number" placeholder="Expected Salary"
                            style="appearance: textfield;" inputmode="numeric" required />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="work_field">
                            Type of Job
                        </label>
                        <select
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="work_field" name="work_field" required>
                            <option value="">Select Type of Job</option>
                            <option value="field-work">Field Work</option>
                            <option value="part-time">Part Time</option>
                            <option value="full-time">Full Time</option>
                            <option value="freelance">Freelance</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="experience">
                            Experience
                        </label>
                        <select
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="experience" name="experience" required>
                            <option value="">Select Experience</option>
                            <option value="fresher">Fresher</option>
                            <option value="1-year">1 Year</option>
                            <option value="2-3-years">2-3 Years</option>
                            <option value="more-than-4-years">More than 4 Years</option>
                        </select>
                    </div>
                    {{-- <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="photo_passport">
                            Photo Passport of Applicant
                        </label>
                        <input
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="photo_passport" name="photo_passport" type="file" accept=".jpg, .jpeg, .png"
                            required>
                    </div> --}}

                    {{-- <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="resume">
                            Resume
                        </label>
                        <input
                            class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            id="resume" name="resume" type="file" accept=".pdf" required>
                    </div> --}}

                    <div class="pb-2 border-b border-black">
                        <label for="resume" class="block mb-2 text-sm font-bold text-gray-700">Upload Resume</label>

                        <label for="resume"
                            class="flex flex-col items-center w-full max-w-lg p-5 mx-auto mt-2 text-center bg-gray-400 border-2 border-gray-500 border-dashed cursor-pointer dark:bg-gray-900 dark:border-gray-700 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor"
                                class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                            </svg>

                            <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">Upload Resume
                            </h2>

                            <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg &
                                drop your
                                PDF, PNG, JPG. </p>

                            <input id="resume" type="file" name="resume" accept="image/png,image/jpeg"
                                class="hidden" multiple />
                        </label>
                    </div>
                    <div id="message">
                        <div id="success"
                            class="p-2 my-2 text-green-800 bg-green-200 border border-green-600 rounded"style='display: none;'>
                            Your Form Has Been Submitted. We will contact you on your contact details.</div>
                        <div id="error" class="p-2 my-2 text-red-800 bg-red-200 border border-red-600 rounded "
                            style='display: none;'>There is some problem please try again later .</div>
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded loaderButton hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                            type="submit">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="lg:mx-40 lg:my-10">
                <div id='' class="p-4 my-6 text-center text-white border border-black rounded silver-bg">
                    <p class="text-3xl font-bold text-center text-black ">Note: </p>
                    <p class="pb-4 text-3xl font-bold text-center text-black capitalize">Join Membership
                        <br> Pay
                        Rs.499/- only
                    </p>
                    <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                        @csrf
                        <input type="hidden" name="amount" value="499" />
                        <input class="block w-full p-2 text-xl font-bold text-white rounded cursor-pointer gold-bg"
                            type="submit" name="submit" value=" Pay Rs.499 /- Now" />
                    </form>
                </div>
                <div class="hidden px-4 py-2 bg-blue-300 border border-blue-600 shadow rounded-xl shadow-slate-400">
                    <div>
                        <h1 class='text-2xl font-bold text-center'>
                            Watch this video for more details about our contracts
                        </h1>
                    </div>
                    <div class="relative overflow-hidden rounded-xl" style="padding-top: 56.25%">
                        <iframe disabled class="absolute top-0 left-0 w-full h-full"
                            srsc="https://www.youtube.com/embed/aax-NyK8Qco?si=DhyDUk18bUuSLoJN"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center py-4 text-center">
                    <p class="text-2xl font-bold capitalize">
                        We are working our best with these companies and job placement offices to provide you with the best and 100% geniune jobs
                        for you.
                    </p>
                    <div class="p-4 my-4 bg-orange-100 border-l-4 border-orange-500 rounded-lg shadow-lg">
                        <p class="text-xl font-bold capitalize">
                            <i class="text-orange-500 fa-solid fa-circle-info"></i> Notice: When you land a job through
                            our platform, we will request a one-time service fee of Rs. 2,500/- from your first salary to
                            support the efforts that make these opportunities possible. Total Amount Rs. 2,999/-.
                        </p>
                    </div>

                    <img class="max-w-md py-4 my-4 border" src="{{ asset('img/jobs.jpg') }}" alt="">

                </div>
            </div>
        </div>
    </div>
    <div class="relative py-4 text-center bg-green-50 ">
        <h1 class="text-xl font-bold text-center sm:text-3xl">Trusted by 10Lakh+ Indians 🤝 <h1>
                <p class="py-0 text-center text-gray-600 sm:py-2">We are here to help you.</p>
                <br>
                <style>
                    .swiper-slide {
                        background: #fff;
                        border-radius: 10px;
                        padding-top: 10px;
                        padding-bottom: 10px;
                        min-height: 100px;
                    }
                </style>
                <div class="overflow-hidden testimonies">
                    <div class="swiper-container testimonies-swiper">
                        <div class="px-2 pb-10 swiper-wrapper">
                            <!-- Testimony Slide 1 -->
                            <div class="shadow swiper-slide">
                                <div class="flex items-center">

                                    <div class="">
                                        <p class="mx-4 text-lg font-bold">"This is the best service I have ever used!"
                                        </p>
                                        <div class="flex items-start justify-center gap-2 py-2 mx-4">
                                            <i class="text-gray-500 fa-solid fa-user-circle fa-2x"></i>
                                            <div class="flex flex-col items-start justify-start gap-2">
                                                <p class="text-xs font-bold ">
                                                    Rajesh Kumar, Mumbai</p>
                                                <div class="flex">
                                                    <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                                    <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                                    <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                                    <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                                    <i class="text-yellow-500 fa-solid fa-star-half-stroke fa-xs"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimony Slide 2 -->
                            <div class="shadow swiper-slide">
                                <p class="mx-4 text-lg font-bold">"I found my dream job thanks to this platform."</p>
                                <div class="flex items-start justify-center gap-2 py-2 mx-4">
                                    <i class="text-gray-500 fa-solid fa-user-circle fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Anjali Sharma, Delhi</p>
                                        <div class="flex">
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star-half-stroke fa-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimony Slide 3 -->
                            <div class="shadow swiper-slide">
                                <p class="mx-4 text-lg font-bold">"The opportunities here are endless."</p>
                                <div class="flex items-start justify-center gap-2 py-2 mx-4">
                                    <i class="text-gray-500 fa-solid fa-user-circle fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Priya Singh, Bangalore </p>
                                        <div class="flex">
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star-half-stroke fa-xs"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Testimony Slide 4 -->
                            <div class="shadow swiper-slide">
                                <p class="mx-4 text-lg font-bold">"A fantastic resource for job seekers."</p>
                                <div class="flex items-start justify-center gap-2 py-2 mx-4">
                                    <i class="text-gray-500 fa-solid fa-user-circle fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Amit Patel, Ahmedabad </p>
                                        <div class="flex">
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star-half-stroke fa-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow swiper-slide">
                                <p class="mx-4 text-lg font-bold">"I got a job in a week from posting my resume on the
                                    site."</p>
                                <div class="flex items-start justify-center gap-2 py-2 mx-4">
                                    <i class="text-gray-500 fa-solid fa-user-circle fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Monika Singh, Mumbai </p>
                                        <div class="flex">
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star-half-stroke fa-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow swiper-slide">
                                <p class="mx-4 text-lg font-bold">"This is the best job search website I have ever
                                    seen."
                                </p>
                                <div class="flex items-start justify-center gap-2 py-2 mx-4">
                                    <i class="text-gray-500 fa-solid fa-user-circle fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Rohan Desai, Chennai </p>
                                        <div class="flex">
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star fa-xs"></i>
                                            <i class="text-yellow-500 fa-solid fa-star-half-stroke fa-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more testimony slides as needed -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                    </div>
                </div>

    </div>
    <p class='py-4 text-center'> Contact Us at <a class="text-blue-500 underline hover:text-blue-700"
            href="mailto:helpline@realkmk.com">
            helpline@realkmk.com
        </a></p>
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
