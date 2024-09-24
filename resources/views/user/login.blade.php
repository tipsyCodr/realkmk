<x-app-layout>
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
    <div class="text-center">
        <a href="{{ route('register') }}"
            class="inline-block mt-4 text-sm p-2 rounded text-white font-medium bg-indigo-600 hover:bg-indigo-500">
            Don't have an account? Register
        </a>
    </div>
    <div class="wrapper pt-6">

        <h1 class="px-4 font-bold text-xl capitalize">Login to your account</h1>
        <div class="login-wrapper px-4 ">
            <form class="space-y-6" action="{{ route('authenticate.user') }}" method="POST">
                @csrf
                <div class="space-y-2">
                    <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile No.</label>
                    <input id="mobile" name="mobile" type="mobile" autocomplete="mobile" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>

                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('password.reset') }}"
                            class="font-medium text-indigo-600 hover:text-indigo-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="text-sm text-center">
                    <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                        Or Register if you don't have an account
                    </a>
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Log in
                    </button>
                </div>
            </form>
        </div>
        <hr>
        <div class=" text-center px-4">
            <div class="my-2 flex items-center">
                <div class="border-b border-gray-300 flex-1"></div>
                <div class="px-2 text-gray-600">or</div>
                <div class="border-b border-gray-300 flex-1"></div>
            </div>
            <button id="google-login" class=" w-full p-2  bg-red-500 rounded-lg hover:bg-red-600 text-white font-bold">
                <i class="fab fa-google"></i>
                Sign in with Google
            </button>
        </div>
    </div>
    <script type="module">
        // Import the functions you need from the SDKs
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-analytics.js";
        import {
            getAuth,
            GoogleAuthProvider,
            PhoneAuthProvider,
            signInWithPopup,
        } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-auth.js";

        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyBIBGh8c2v-fjpxMSfiCHVQWu_ve9TR9Nc",
            authDomain: "realkmk-7b280.firebaseapp.com",
            projectId: "realkmk-7b280",
            storageBucket: "realkmk-7b280.appspot.com",
            messagingSenderId: "831756950686",
            appId: "1:831756950686:web:009d2dc15721c6556eaf8f",
            measurementId: "G-60B0Z7VR8P"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);

        // Initialize Firebase Authentication and set up Google provider
        const auth = getAuth();
        const provider = new GoogleAuthProvider();
        console.log("Provider: " + provider);

        // Event listener for Google login
        // Event listener for Google login

        document.getElementById("google-login").addEventListener("click", function() {
            signInWithPopup(auth, provider)
                .then((result) => {
                    // This gives you a Google Access Token. You can use it to access Google API.
                    const credential = GoogleAuthProvider.credentialFromResult(result);
                    const token = credential ? credential.accessToken : null;
                    // The signed-in user info.
                    const user = result.user;

                    if (user) {
                        alert("Welcome " + user.displayName);

                        // Create a new XMLHttpRequest object
                        const xhr = new XMLHttpRequest();
                        xhr.open("POST", "{{ route('google.auth') }}", true);
                        xhr.setRequestHeader("Content-Type", "application/json");

                        // Define what happens on successful data submission
                        /**
                         * This is the callback function that will be called when the data has been
                         * successfully submitted. It will check the server response and redirect
                         * the user to the main page if the login was successful.
                         * @param {Object} e The event containing the response from the server.
                         */
                        xhr.onload = function(e) {
                            const response = JSON.parse(xhr.responseText);
                            if (xhr.status >= 200 && xhr.status < 300) {
                                console.log(response);
                                // If the login was successful, redirect to the main page
                                if (response.success) {
                                    window.location.href = "{{ url('/') }}";
                                } else {
                                    console.log(response);
                                    // Handle case where login was not successful on server-side
                                    alert("Login failed on server-side. Please try again.");
                                }
                            } else {
                                // Handle failed network request or server error
                                console.log(xhr.responseText);
                                alert("Error during authentication. Please try again later.");
                            }
                        };

                        // Define what happens in case of an error
                        xhr.onerror = function() {
                            console.log(xhr.responseText);
                            alert("Error during authentication. Please try again later.");
                        };

                        // Send the request with user data
                        const data = JSON.stringify({
                            uid: user.uid,
                            email: user.email,
                            name: user.displayName,
                            token: token,
                            emailVerified: user.emailVerified,
                            photoURL: user.photoURL,
                        });
                        xhr.send(data);
                    }
                })
                .catch((error) => {
                    // Handle Errors here.
                    const errorCode = error.code;
                    const errorMessage = error.message;

                    // Log the full error message
                    console.error("Error during sign-in:", errorMessage);

                    // Optional: Provide feedback to the user
                    alert("Authentication failed: " + errorMessage);
                });
        });
    </script>
</x-app-layout>
