<!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
<x-app-layout>
    <div class="p-2 w-full">
        <p class="font-bold text-4xl text-center">Choose Your Plan</p>
    </div>
    {{-- <div class="p-2 flex flex-row w-full">
        <a class='px-2 m-6 font-bold  text-center flex-1 w-28 block silver-bg rounded-xl hover:bg-gray-300 py-4 border'
            href="#"
            onclick="document.getElementById('bGold').style.display='none'; document.getElementById('bSilver').style.display='block';">Silver
        </a>
        <a class='px-2 m-6 font-bold text-white text-center flex-1 w-28 block gold-bg rounded-xl hover:bg-gray-300 py-4 border'
            href="#"
            onclick="document.getElementById('bSilver').style.display='none'; document.getElementById('bGold').style.display='block';">Gold
        </a>
    </div> --}}
    <div class="p-2 flex flex-col justify-center items-center">
        <div class="px-6 py-4 my-4 w-80 rounded-xl silver-bg transition-opacity duration-500 ease-in-out" id="bSilver"
            style="display:none;">
            <h2 class="text-4xl font-bold text-center py-4">Silver Plan</h2>
            <p class="font-bold text-3xl text-center pb-4 "> Rs. 4,500</p>

            <div class="bg-gray-50 bg-opacity-45 p-2 rounded-t-lg">
                <ol class="card-text text-left">
                    <li><i class="fa fa-check-circle text-green-600"></i> 3 Month Validity</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Giving Buyer Geniune Number </li>
                    <li><i class="fa fa-check-circle text-green-600"></i> 0% Commission</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> No Agents & No Broker Policy</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Owner To Owner Meeting</li>
                    <li><i class="fa fa-check-circle text-green-600"></i> Website Marketing of your Property</li>
                    <li><i class="fa fa-circle-xmark text-red-600"></i> Privacy mobile number</li>
                    <li><i class="fa fa-circle-xmark text-red-600"></i> Relationship Manager You call</li>
                    <li><i class="fa fa-circle-xmark text-red-600"></i> Bank Seizing Property Show</li>
                    <li><i class="fa fa-circle-xmark text-red-600"></i> Buyer Bank Refinance also</li>
                    <li><i class="fa fa-circle-xmark text-red-600"></i> Total amount Rs.39,500</li>
                </ol>
            </div>
            <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                @csrf
                <input type="hidden" name="amount" value="4,500" />
                <input class="p-2 bg-blue-500 hover:bg-blue-700 text-white rounded-b-lg w-full" type="submit"
                    name="submit" value="Pay Now" />
            </form>
        </div>
        <div class="px-6 py-4 my-4 w-80 rounded-xl gold-bg transition-opacity duration-500 ease-in-out " id="bGold">

            <div class=" bg-gray-50 bg-opacity-45 p-2 rounded-t-lg">
                <h2 class="text-4xl font-bold text-center py-4 text-black-100 ">Gold Plan</h2>
                <p class="font-bold text-3xl text-center pb-4 text-black"> Rs. 2,999</p>
                <b class="p-2 block text-left capitalize">
                    We are working hard for providing the best deals and services for you. If You like our services, you
                    can donate a tip to us after you successfully sell a property.
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
</x-app-layout>
