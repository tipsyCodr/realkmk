<div class="pb-2 bg-gray-200">
    <div class=' px-2 bg-white'>
        {{-- <p>Browse Categories</p> --}}
        <div class=" item-wrapper item flex flex-row justify-center overflow-x-scroll ">
            <a href="{{ route('properties') }}"
                class=" h-auto w-auto flex flex-col items-center p-2 m-1 border rounded hover:bg-gray-50 transition-color ">
                <p class="text-xl font-bold">Properties</p>
                <br>
                <img src="{{ asset('img/icon/building.png') }}"
                    class="img-fluid rounded-top w-24 hover:scale-105 transition-transform" alt="" />
            </a>
        </div>
    </div>
</div>
