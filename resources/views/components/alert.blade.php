<!-- Be present above all else. - Naval Ravikant -->
@if (session('success'))
    <div
        class="z-50 fixed bottom-24 w-full bg-green-100 border border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md ">
        {{ session('success') }}
        <script>
            setTimeout(() => {
                document.querySelector('.bg-green-100').classList.add('hidden')
            }, 3000)
        </script>
    </div>
@elseif (session('error'))
    <div
        class="z-50 fixed bottom-24 w-full bg-red-100 border-t-4 border-red-500 rounded-b text-red-900 px-4 py-3 shadow-md ">
        {{ session('error') }}
        <script>
            setTimeout(() => {
                document.querySelector('.bg-red-100').classList.add('hidden')
            }, 3000)
        </script>
    </div>
@endif
