<x-login-layout>
    <div class="flex justify-center mx-auto mb-5">
        <img class="w-auto h-16 sm:h-20" src="{{ asset('img/logo.png') }}" alt="">
    </div>
    <script></script>

    @if ($errors->any())
        <div id='alert' class=" w-full text-white bg-red-500">
            <div class="container flex items-center justify-between px-6 py-4 mx-auto  my-6">
                <div class="flex flex items-center">
                    <svg viewBox="0 0 40 40" class="w-6 h-6 fill-current">
                        <path
                            d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z">
                        </path>
                    </svg>

                    <div class="flex flex-col justify-start">
                        <p class="mx-3 font-bold">Incorrect Mobile No. or Password.</p>
                        <ul class='mx-3'>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <button
                    class="p-1 transition-colors duration-300 transform rounded-md hover:bg-opacity-25 hover:bg-gray-600 focus:outline-none">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            onclick=" document.querySelector('#alert').classList.add('hidden');" />
                    </svg>
                </button>

            </div>
        </div>
    @endif

    <div
        class="flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
        <div class="hidden bg-cover lg:block lg:w-1/2"
            style="background-image: url('https://images.unsplash.com/photo-1606660265514-358ebbadc80d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1575&q=80');">
        </div>

        <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">


            <p class="mt-3 text-xl text-center text-gray-600 dark:text-gray-200">
                Welcome back!
            </p>

            <a href="#" id='google-login'
                class="flex items-center justify-center mt-4 text-gray-600 transition-colors duration-300 transform border rounded-lg dark:border-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <div class="px-4 py-2">
                    <svg class="w-6 h-6" viewBox="0 0 40 40">
                        <path
                            d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                            fill="#FFC107" />
                        <path
                            d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                            fill="#FF3D00" />
                        <path
                            d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                            fill="#4CAF50" />
                        <path
                            d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                            fill="#1976D2" />
                    </svg>
                </div>

                <span class="w-5/6 px-4 py-3 font-bold text-center">Sign in with Google</span>
            </a>

            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

                <a href="#"
                    class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">or login
                    with email</a>

                <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
            </div>
            <form action="{{ route('authenticate.user') }}" method="POST">
                @csrf
                <div class="mt-4">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                        for="LoggingMobile">Enter Your Mobile Number</label>
                    <input id="LoggingMobile" name="mobile"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        type="text" />
                </div>

                <div class="mt-4">
                    <div class="flex justify-between">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                            for="loggingPassword">Password</label>
                        <a href="#" class="text-xs text-gray-500 dark:text-gray-300 hover:underline">Forget
                            Password?</a>
                    </div>

                    <input id="loggingPassword" name="password"
                        class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300"
                        type="password" />
                </div>

                <div class="mt-6">
                    <button
                        class="loaderButton w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-800 rounded-lg hover:bg-gray-700 border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                        Sign In
                    </button>
                </div>
            </form>

            <div class="flex items-center justify-between mt-4">
                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>

                <p class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">or Sign up Here</p>

                <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
            </div>

            <div class="mt-6">
                <a href="{{ route('register') }}"
                    class="block text-center w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-gray-700 dark:border border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                    Sign
                    up </a>
            </div>

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
                    const credential = GoogleAuthProvider.credentialFromResult(result);
                    const token = credential ? credential.accessToken : null;
                    const user = result.user;

                    if (user) {
                        alert("Welcome " + user.displayName);

                        // Get CSRF token from meta tag
                        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content');

                        // Send the request with fetch
                        fetch("{{ route('google.auth') }}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                    "X-CSRF-TOKEN": csrfToken, // Add CSRF token to the request
                                },
                                body: JSON.stringify({
                                    uid: user.uid,
                                    email: user.email,
                                    name: user.displayName,
                                    token: token,
                                    emailVerified: user.emailVerified,
                                    photoURL: user.photoURL,
                                }),
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    window.location.href = "{{ url('/') }}";
                                } else {
                                    alert("Login failed on server-side. Please try again.");
                                }
                            })
                            .catch(error => {
                                console.error("Error during sign-in:", error.message);
                                alert("Error during authentication. Please try again later.");
                            });
                    }
                })
                .catch((error) => {
                    console.error("Error during sign-in:", error.message);
                    alert("Authentication failed: " + error.message);
                });
        });
    </script>
</x-login-layout>
