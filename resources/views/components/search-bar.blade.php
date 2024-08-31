<div class="search-bar-wrapper p-2 bg-gray-200">
    <a id='btn-search' class="block border border-black bg-white p-1 rounded  w-full" href="#">
        <div class="flex flex-row items-center">
            <x-search-icon :color="'black'" />
            <p class=" px-1 self-center items-center text-gray-400">Find Properties and Jobs...</p>
        </div>
    </a>

    <div id='search-bar-wrapper'
        class="hidden  search-popup w-full h-full fixed top-0 left-0 bg-white p-2 transition-all duration-500 ease-in-out">
        {{-- Search Bar --}}
        <div class="search-bar flex flex-row">
            {{-- back arrow --}}
            <a id="btn-back" href="#" class="px-1 self-center items-center">
                <x-back-arrow-icon />
            </a>

            <input class="w-full rounded py-2 px-1 border border-black pr-0" style="border-right:0px" type="text"
                name="q" id="q" placeholder="Search">
            <button class="bg-green-700 text-white p-3 rounded relative top-0" style="margin-left:-40px ">
                <x-search-icon :color="'white'" />
            </button>
        </div>
        <div class="location-bar border px-2 flex flex-row my-2 items-center">
            <x-location-icon></x-location-icon>
            <input class="w-full py-2 px-1" type="text" name="location" id="location"
                placeholder="{{ old('location') ?? 'Enter Location' }}" value="{{ old('location') ?? '' }}">
        </div>
        <div class="search-suggestion-wrapper">
            <div class="popular">
                <small class="uppercase text-gray-400">Popular Categories</small>
                <a href class="flex flex-row p-2 items-center hover:bg-gray-200 ">
                    <p class="px-2">
                        <x-search-icon></x-search-icon>
                    </p>
                    <p class="px-2">Properties</p>
                </a>
                <a href class="flex flex-row p-2 items-center hover:bg-gray-200 ">
                    <p class="px-2">
                        <x-search-icon></x-search-icon>
                    </p>
                    <p class="px-2">Jobs</p>
                </a>
                <a href class="flex flex-row p-2 items-center hover:bg-gray-200 ">
                    <p class="px-2">
                        <x-search-icon></x-search-icon>
                    </p>
                    <p class="px-2">Flats</p>
                </a>

            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#btn-search').on('click', function() {
            $('#search-bar-wrapper').removeClass('hidden');
        });
        $('#btn-back').on('click', function() {
            $('#search-bar-wrapper').addClass('hidden');
        });


    });
</script>
