//Register
<x-login-layout>
    @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
            <p>
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </p>
        </div>
    @endif

    <div class="bg-white rounded-lg  p-4 my-2">
        <h2 class="text-2xl font-bold">Register for an account</h2>

        <form class="space-y-6" action="{{ route('register.store') }}" method="POST">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <div class="mt-1">
                    <input id="name" name="name" type="text" required
                        class="loginearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="John Doe">
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email (Optional)</label>
                <div class="mt-1">
                    <input id="email" name="email" type="email"
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="john.doe@example.com">
                </div>
            </div>

            <div>
                <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile</label>
                <div class="mt-1">
                    <input id="mobile" name="mobile" type="tel" pattern="[0-9]{10}" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="9876543210">
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="mt-1">
                    <input id="password" name="password" type="password" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="********">
                </div>
            </div>
            <div>
                <label for="conf_pass" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <div class="mt-1">
                    <input id="conf_pass" name="conf_pass" type="password" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        placeholder="********">
                </div>
            </div>

            <div class="text-right">
                <button type="submit"
                    class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Register
                </button>
            </div>
        </form>
    </div>
</x-login-layout>
