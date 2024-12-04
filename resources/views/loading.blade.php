<x-app-layout>
    <div class="flex items-center justify-center ">
        <div class="my-32 flex flex-col items-center px-4">
            <!-- Spinner -->
            <div style="border: 5px solid #f3f3f3; border-top: 5px solid #3498db; border-radius: 50%; width: 50px; height: 50px; animation: spin 1s linear infinite;" class="mx-auto">
            </div>
            
            <!-- Loading text -->
            <div class="mt-4 text-blue-500 text-md font-normal text-center" id="loading-text">
                Loading ...
            </div>
        </div>
    </div>

    <style>
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <script>
        setTimeout(() => {
            document.getElementById('loading-text').innerHTML = 'Loading taking too much time.<br/> Please check your  internet connection';
        }, 6000);
    </script>
</x-app-layout>
