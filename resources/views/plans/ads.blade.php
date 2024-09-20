<!-- Life is available only in the present moment. - Thich Nhat Hanh -->
<x-app-layout>
    <h1 class="font-bold text-4xl p-4 text-center"> Banner Advertisement</h1>
    <div class="grid grid-cols-1 gap-4 p-4">
        <div class="rounded p-4 border silver-bg">
            <div style="background: linear-gradient(to bottom, #333, #555)" class="p-2  text-white rounded-lg">
                <h2 class="text-2xl font-bold">Silver </h2>
                <p class="text-green-500 text-sm capitalize"><i class="fas fa-circle-check"></i> Recommended For local
                    Business</p>
                <p class='font-bold text-xl capitalize'>Run Ads in a Any of the one city</p>
                <div class="grid grid-cols-2 gap-2 text-center">
                    <div>
                        <span
                            class="block silver-bg font-bold rounded-full px-3 py-1 my-2 text-xs font-semibold text-gray-700 mr-2">Delhi</span>
                        <span
                            class="block silver-bg font-bold rounded-full px-3 py-1 my-2 text-xs font-semibold text-gray-700 mr-2">Mumbai</span>
                    </div>
                    <div>
                        <span
                            class="block silver-bg font-bold rounded-full px-3 py-1 my-2 text-xs font-semibold text-gray-700 mr-2">Kolkata</span>
                        <span
                            class="block silver-bg font-bold rounded-full px-3 py-1 my-2 text-xs font-semibold text-gray-700 mr-2">Bengaluru</span>
                    </div>
                </div>
                <div class="py-4">
                    <table class="table-auto w-full">
                        <thead>
                            <tr class=" border border-black">
                                <th class="px-4 py-2 border border-black">Duration</th>
                                <th class="px-4 py-2 border border-black">Price</th>
                            </tr>
                        </thead>
                        <tbody class='text-center'>
                            <tr>
                                <td class="px-4 py-2 border border-black">1 Day</td>
                                <td class="px-4 py-2 border border-black">
                                    <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                                        @csrf
                                        <input type="hidden" name="amount" value="999" />
                                        <input class="p-2 silver-bg text-black rounded w-full font-bold" type="submit"
                                            name="submit" value=" Buy for Rs.999" />
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border border-black">15 Days</td>
                                <td class="px-4 py-2 border border-black">
                                    <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                                        @csrf
                                        <input type="hidden" name="amount" value="9,999" />
                                        <input class="p-2 silver-bg text-black  rounded w-full font-bold" type="submit"
                                            name="submit" value=" Buy for Rs.9,999" />
                                    </form>

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border border-black"><i
                                        class="fas fa-circle-check text-green-500"></i> 30 Days</td>
                                <td class="px-4 py-2 border border-black">
                                    <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                                        @csrf
                                        <input type="hidden" name="amount" value="14,999" />
                                        <input class="p-2 silver-bg text-black  rounded w-full font-bold" type="submit"
                                            name="submit" value=" Buy for Rs.14,999" />
                                    </form>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class=" rounded-lg p-4 border gold-bg">
            <div style="background: linear-gradient(to bottom, #333, #555)"
                class="p-2  text-white bg-opacity-20 rounded-lg">
                <h2 class="text-2xl font-bold">Gold</h2>
                <p class="text-green-500 text-sm capitalize"> <i class="fas fa-circle-check"></i> Recommended For Big
                    Business</p>
                <p class='font-bold text-xl capitalize'>Show your ads in all cities and on the Home Page of our website
                </p>
                <div class="flex flex-col mt-2 ">
                    <div class="grid grid-cols-2 gap-2 text-center">
                        <div>
                            <span
                                class="block gold-bg font-bold rounded-full px-3 py-1 my-2 text-xs font-semibold text-white mr-2">Delhi</span>
                            <span
                                class="block gold-bg font-bold rounded-full px-3 py-1 my-2 text-xs font-semibold text-white mr-2">Mumbai</span>
                        </div>
                        <div>
                            <span
                                class="block gold-bg font-bold rounded-full px-3 py-1 my-2 text-xs font-semibold text-white mr-2">Kolkata</span>
                            <span
                                class="block gold-bg font-bold rounded-full px-3 py-1 my-2 text-xs font-semibold text-white mr-2">Bengaluru</span>
                        </div>
                    </div>
                    <span class='font-black text-center text-2xl  text-white'> + </span>
                    <span
                        class="inline-block gold-bg font-bold rounded-full px-3 py-1  text-center text-xs font-semibold text-white mr-2">Homepage</span>
                </div>
                <div class="py-4">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border border-black">Duration</th>
                                <th class="px-4 py-2 border border-black">Price</th>
                            </tr>
                        </thead>
                        <tbody class='text-center'>
                            <tr>
                                <td class="px-4 py-2 border border-black">1 Day</td>
                                <td class="px-4 py-2 border border-black">
                                    <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                                        @csrf
                                        <input type="hidden" name="amount" value="1,999" />
                                        <input class="p-2 gold-bg text-white rounded w-full font-bold" type="submit"
                                            name="submit" value=" Buy for Rs.1,999" />
                                    </form>

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border border-black">15 Days</td>
                                <td class="px-4 py-2 border border-black">
                                    <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                                        @csrf
                                        <input type="hidden" name="amount" value="14,999" />
                                        <input class="p-2 gold-bg text-white rounded w-full font-bold" type="submit"
                                            name="submit" value=" Buy for Rs.14,999" />
                                    </form>

                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border border-black"><i
                                        class="fas fa-circle-check text-green-500"></i>
                                    30 Days
                                </td>
                                <td class="px-4 py-2 border border-black">
                                    <form action="{{ route('payment.show') }}" method="POST" id="card-form">
                                        @csrf
                                        <input type="hidden" name="amount" value="24,999" />
                                        <input class="p-2 gold-bg text-white rounded w-full font-bold" type="submit"
                                            name="submit" value=" Buy for Rs.24,999" />
                                    </form>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
