<x-app-layout>

    <div class="container mx-auto p-4 capitalize">
        <div class="max-w-2xl mx-auto py-10">
            <div class="flex flex-col items-center">
                <img class="py-6" src="{{ asset('img/agent.jpg') }}" alt="">
                <div class=" w-full flex justify-between">
                    <h2 class="text-3xl font-bold">10 Benefits for Real Agent</h2>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded capitalize">Unlimited post a free ad</button>
                </div>
            </div>
            <ol class="list-decimal list-inside">
                <li>Real Unlimited Post a Property Ads.</li>
                <li>RealKMK Giving 100% Geniune Buyer Number with follow up.</li>
                <li>Real Agent can Deal Bank & owner Properties.</li>
                <li>10 Real Agent When Deal a property you Earn 2% Commission.</li>
                <li>RealKMK Given (ID) Card for Real Agent 6 month validity</li>
                <li>Real Agent sell Builder & Developer projects.</li>
                <li>RealKMK Provide training video & Add WhatApy group.</li>
                <li>Real Agent can add any one Agent with Reference you Will earn 1000rs.</li>
                <li>Buyer & Seller When Deal a Property there contact real agent for verify Documentation per day you will Earn 1000.</li>
                <li>Realkmk is classified portal real agent can promoting banner advertisement you earn 20% Commission.</li>
            </ol>
            <div class="bg-white shadow-md rounded px-4 pt-6 pb-8 mb-4 flex flex-col my-2">
                <div class="mb-4">
                    <img src="{{ asset('img/agent2.jpg') }}" alt="" class="w-full object-contain">
                </div>
                <div class="flex justify-between">
                    <p class="text-2xl font-bold">6 Month validity</p>
                    <p class="text-2xl font-bold">Join Membership</p>
                </div>

                <div class="flex justify-between">
                    <p class="text-2xl font-bold">Rs.9999</p>
                    <p class="text-md  line-through">Rs.19999</p>
                </div>
                <p class="text-2xl font-bold">50% off</p>
                <form class="mt-4" action="{{ route('payment.show') }}" method="POST" id="card-form">
                    @csrf
                    <input type="hidden" name="amount" value="9999" />
                    <input class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-lg w-full" type="submit"
                        name="submit" value="Pay Now" />
                </form>
            </div>
        </div>
    </div>

    <div class="agents">
    <h3 class=" px-4 py-3 rounded text-center relative" role="alert">
        <span class=" text-xl block sm:inline font-bold capitalize">RealKMK Add Real Agent India Most popular portal cities</span>
    </h3>
    
    </p>
    <hr class="border border-1 border-gray-300 my-4 mx-4">
    <div class="grid grid-cols-3 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'delhi') }}">
                <img class="rounded object-contain w-full py-2 " src="{{ asset('storage/uploads/locations/delhi.jpg') }}"
                    alt="">
                <p class="font-bold md:text-lg text-sm  text-center">Delhi</p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>
            </a>
        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'mumbai') }}">
                <img class="rounded object-contain w-full py-2 " src="{{ asset('storage/uploads/locations/mumbai.jpg') }}"
                    alt="">
                <p class="font-bold md:text-lg text-sm   text-center">Mumbai </p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'kolkata') }}">
                <img class="rounded object-contain w-full py-2" src="{{ asset('storage/uploads/locations/kolkata.jpg') }}"
                    alt="">
                <p class="font-bold md:text-lg text-sm   text-center">Kolkata </p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'bengaluru') }}">
                <img class="rounded object-contain w-full   py-2"
                    src="{{ asset('storage/uploads/locations/banglore.jpg') }}" alt="">
                <p class="font-bold md:text-lg text-sm   "> Banglore </p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'chennai') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/chennai.jpg') }}" alt="">
                <p class="font-bold md:text-lg text-sm   "> Chennai </p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'pune') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/pune.jpg') }}" alt="">
                <p class="font-bold md:text-lg text-sm   "> Pune </p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'ahmedabad') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/ahmedabad.jpg') }}" alt="">
                <p class="font-bold md:text-lg text-sm   "> Ahmedabad </p>
                <p class="font-normal text-sm"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'jaipur') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/jaipur.jpg') }}" alt="">
                <p class="font-bold md:text-lg text-sm   "> Jaipur </p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'surat') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/surat.jpg') }}" alt="">
                <p class="font-bold md:text-lg text-sm "> Surat </p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>
        <div class="bg-white rounded p-4 shadow text-center">
            <a href="{{ route('properties.form', 'hyderabad') }}">
                <img class="rounded object-contain w-full py-2"
                    src="{{ asset('storage/uploads/locations/hyderabad.jpg') }}" alt="">
                <p class="font-bold md:text-lg text-sm   "> Hyderabad </p>
                <p class="font-normal text-xs"> {{ rand(50,200) }} Agents registered</p>

            </a>

        </div>

    </div>
    </div>
    <div class="reviews">

    <div class="relative text-center bg-green-50 py-4 my-4 ">
        <h1 class="text-center font-bold text-xl sm:text-3xl">Real agent Review for RealKMK <h1>
                <!-- <p class="text-center text-gray-600 py-0 sm:py-2">We are here to help you.</p> -->
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
                <div class="testimonies overflow-hidden">
                    <div class="swiper-container testimonies-swiper">
                        <div class="swiper-wrapper pb-10 px-2">
                            <!-- Testimony Slide 1 -->
                            <div class="swiper-slide shadow">
                                <div class="flex items-center">

                                    <div class="">
                                        <p class="font-bold text-lg mx-4">"I got 5 new clients through this platform in a
                                            single month."</p>
                                        <div class="mx-4 flex gap-2 items-start justify-center py-2">
                                            <i class="fa-solid fa-user-circle text-gray-500 fa-2x"></i>
                                            <div class="flex flex-col items-start justify-start gap-2">
                                                <p class="text-xs font-bold ">
                                                    Rajesh Kumar, Mumbai</p>
                                                <div class="flex">
                                                    <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                                    <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                                    <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                                    <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                                    <i class="fa-solid fa-star-half-stroke text-yellow-500 fa-xs"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimony Slide 2 -->
                            <div class="swiper-slide shadow">
                                <p class="font-bold text-lg mx-4">"This platform has been a game-changer for my business.
                                    I've increased my sales by 50%."</p>
                                <div class="mx-4 flex gap-2 items-start justify-center py-2">
                                    <i class="fa-solid fa-user-circle text-gray-500 fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Anjali Sharma, Delhi</p>
                                        <div class="flex">
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star-half-stroke text-yellow-500 fa-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimony Slide 3 -->
                            <div class="swiper-slide shadow">
                                <p class="font-bold text-lg mx-4">"I've been able to find the perfect clients for my
                                    properties through this platform."</p>
                                <div class="mx-4 flex gap-2 items-start justify-center py-2">
                                    <i class="fa-solid fa-user-circle text-gray-500 fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Priya Singh, Bangalore </p>
                                        <div class="flex">
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star-half-stroke text-yellow-500 fa-xs"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Testimony Slide 4 -->
                            <div class="swiper-slide shadow">
                                <p class="font-bold text-lg mx-4">"This platform has been a great resource for me to find
                                    new clients."</p>
                                <div class="mx-4 flex gap-2 items-start justify-center py-2">
                                    <i class="fa-solid fa-user-circle text-gray-500 fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Amit Patel, Ahmedabad </p>
                                        <div class="flex">
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star-half-stroke text-yellow-500 fa-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide shadow">
                                <p class="font-bold text-lg mx-4">"I've been able to increase my sales by 20% through this
                                    platform."</p>
                                <div class="mx-4 flex gap-2 items-start justify-center py-2">
                                    <i class="fa-solid fa-user-circle text-gray-500 fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Monika Singh, Mumbai </p>
                                        <div class="flex">
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star-half-stroke text-yellow-500 fa-xs"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide shadow">
                                <p class="font-bold text-lg mx-4">"This platform has been a great resource for me to find
                                    new clients."</p>
                                <div class="mx-4 flex gap-2 items-start justify-center py-2">
                                    <i class="fa-solid fa-user-circle text-gray-500 fa-2x"></i>
                                    <div class="flex flex-col items-start justify-start gap-2">
                                        <p class="text-xs font-bold ">
                                            Rohan Desai, Chennai </p>
                                        <div class="flex">
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star text-yellow-500 fa-xs"></i>
                                            <i class="fa-solid fa-star-half-stroke text-yellow-500 fa-xs"></i>
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
    <p class='text-center py-4'> Contact Us at <a class="text-blue-500 hover:text-blue-700 underline"
            href="mailto:helpline@realkmk.com">
            helpline@realkmk.com
        </a></p>
    </div>

    </div>
</x-app-layout>