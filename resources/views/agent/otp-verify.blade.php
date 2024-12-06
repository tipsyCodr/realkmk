<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow">
            <h2 class="text-2xl font-bold mb-6 text-center">OTP Verification</h2>
            <p class="text-gray-600 text-center mb-6">Please enter the OTP to verify your registration</p>

            <form action="{{ route('agent.otp.verify') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="otp" class="block text-sm font-medium text-gray-700">Enter OTP</label>
                    <input type="text" name="otp" id="otp" required 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        maxlength="4" pattern="\d{4}">
                </div>

                @if(session('error'))
                    <div class="text-red-500 text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Verify OTP
                    </button>

                </div>
                <a href="{{ route(name: 'payment.show') }}" class="mt-2 block w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Pay 9,999</a>
                <img src="{{ asset('img/pay.jpg') }}" class="mt-4 w-full" alt="">

            </form>
        </div>
    </div>
</x-app-layout>
