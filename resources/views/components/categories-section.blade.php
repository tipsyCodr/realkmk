<div class="pb-2 bg-gray-200">
    <div class=' px-2 py-2 bg-white'>
        {{-- <p>Browse Categories</p> --}}
        <div class=" item-wrapper item flex flex-row justify-center  ">
            <a href="{{ route('properties') }}"
                class="py-2 px-4 m-1 border border-gray-600 rounded-md shadow-lg bg-blue-50 active:translate-y-1 hover:bg-blue-100 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <p class="text-xl font-bold">Properties</p>
                <br>
                <img src="{{ asset('img/icon/building.png') }}"
                    class="img-fluid rounded-top w-24 hover:scale-105 transition-transform" alt="" />
            </a>
        </div>
    </div>
</div>
