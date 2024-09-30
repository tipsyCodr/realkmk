<x-login-layout>
    <div class="flex justify-center mx-auto mb-5">
        <img class="w-auto h-16 sm:h-20" src="{{ asset('img/logo.png') }}" alt="">
    </div>
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
    <section class="bg-white dark:bg-gray-900">
        <div class="flex justify-center min-h-screen">
            <div class="hidden bg-cover lg:block lg:w-2/5"
                style="background-image: url('https://images.unsplash.com/photo-1494621930069-4fd4b2e24a11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80')">
            </div>

            <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
                <div class="w-full">
                    <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                        Get your free account now.
                    </h1>

                    <p class="mt-4 text-gray-500 dark:text-gray-400">
                        Let’s get you all set up so you can verify your personal account and begin setting up your
                        profile.
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
                        <span class="w-2/5 border-b dark:border-gray-600 md:w-1/4"></span>

                        <p class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">or
                        </p>

                        <span class="w-2/5 border-b dark:border-gray-600 md:w-1/4"></span>
                    </div>

                    <form action='{{ route('register.store') }}' method='POST'
                        class="grid grid-cols-1 gap-6 mt-8 md:grid-cols-2">
                        @csrf
                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Full Name</label>
                            <input type="text" placeholder="Name" id="name" name="name" type="text"
                                required
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>



                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Phone number</label>
                            <input id="mobile" name="mobile" type="tel" pattern="[0-9]{10}" required
                                placeholder="Mobile"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email address</label>
                            <input id="email" name="email" type="email" placeholder="user@email.com"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class='relative'>
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                            <input id="password" name="password" type="password" required
                                placeholder="Enter your password"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />

                            <button type="button" id="togglePassword" class="absolute right-4 top-10 text-gray-500">
                                <i class='fa fa-eye hover:text-gray-300 transition-colors'></i>
                            </button>
                        </div>

                        <div class="relative">
                            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                            <input id="conf_pass" name="conf_pass" type="password" required
                                placeholder="Enter your password again"
                                class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />

                            <button type="button" id="toggleConfPassword"
                                class="absolute right-4 top-10 text-gray-500">
                                <i class='fa fa-eye hover:text-gray-300 transition-colors'></i>
                            </button>
                        </div>

                        <button
                            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Sign Up </span>

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
                        console.log(user);

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

        const passwordInput = document.getElementById('password');
        const togglePasswordButton = document.getElementById('togglePassword');
        const confPasswordInput = document.getElementById('conf_pass');
        const toggleConfPasswordButton = document.getElementById('toggleConfPassword');

        togglePasswordButton.addEventListener('click', function() {
            const currentType = passwordInput.getAttribute('type');
            if (currentType === 'password') {
                passwordInput.setAttribute('type', 'text');
            } else {
                passwordInput.setAttribute('type', 'password');
            }
        });

        toggleConfPasswordButton.addEventListener('click', function() {
            const currentType = confPasswordInput.getAttribute('type');
            if (currentType === 'password') {
                confPasswordInput.setAttribute('type', 'text');
            } else {
                confPasswordInput.setAttribute('type', 'password');
            }
        });
    </script>
</x-login-layout>
