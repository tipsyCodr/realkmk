<x-app-layout>
    <div class="container px-4 py-8 mx-auto">
        <div class="max-w-md p-8 mx-auto bg-white rounded-lg shadow">
            <h2 class="mb-6 text-2xl font-bold text-center">OTP Verification</h2>
            <p class="mb-6 text-center text-gray-600">Please enter the OTP to verify your registration</p>

            <form action="{{ route('agent.otp.verify') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="otp" class="block text-sm font-medium text-gray-700">Enter OTP</label>
                    <input type="text" name="otp" id="otp" required 
                        class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        maxlength="4" pattern="\d{4}">
                </div>

                @if(session('error'))
                    <div class="text-sm text-red-500">
                        {{ session('error') }}
                    </div>
                @endif

                <div>
                    <button type="submit"
                        class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Verify OTP
                    </button>

                </div>
                <a href="{{ route('payment.show.get', ['amount' => 9999]) }}" class="flex justify-center block w-full px-4 py-2 mt-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Pay 9,999</a>
                <img src="{{ asset('img/pay.jpg') }}" class="w-full mt-4" alt="">

            </form>
        </div>
    </div>
</x-app-layout>
