<x-app-layout>
<div class="px-6 py-4 my-4 w-80 rounded-xl gold-bg transition-opacity duration-500 ease-in-out " id="bGold"
            style="">

            <div class=" bg-gray-50 bg-opacity-45 p-2 rounded-t-lg">
                <h2 class="text-4xl font-bold text-center py-4 text-black">Join  Pay</h2>
                <p class="font-bold text-3xl text-center pb-4 text-black"> Rs.999</p>
                <b class="p-2 block text-center capitalize">
                    {{-- We are committed to offering the best deals and services.
                    <br>
                    Upon purchasing your property, pay Rs.9,000. --}}

                    We are providing this service for free. If you want to support us, feel free to give a tip of Rs. 999.
                </b>
                <ol class="card-text text-left ">
                    <li><i class="fa fa-check-circle text-green-600"></i> 1 Year Validity</li>
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
</x-app-layout>