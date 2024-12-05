<x-app-layout>
    <div class="container mx-auto px-4 py-8">
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

                <div>
                    <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                    <input type="text" name="state" id="state" required value="{{ old('state') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" name="city" id="city" required value="{{ old('city') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
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
    </div>
</x-app-layout>
