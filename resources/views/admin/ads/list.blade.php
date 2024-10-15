<x-admin-layout>

    <div id="sortable" class="flex flex-row flex-wrap gap-5 items-center justify-center">
        @foreach ($ads as $ad)
            <div class="item h-[25rem] bg-white py-4 px-1 rounded-xl shadow max-w-sm hover:bg-gray-50">
                <div class="px-4 flex flex-col gap-1">
                    <label class='font-bold text-lg'>Change Ad Name</label>
                    <input class="w-full" type="text" value="{{ $ad->name }}">
                </div>
                {{-- <input type="text" value=" {{ $ad->title }}"> --}}
                <div class="m-2 bg-gray-200 shadow shadow-inner">
                    <img class="object-contain  w-full h-60 rounded-lg"
                        src="{{ asset('storage/uploads/ad_images/' . $ad->location . '/' . $ad->location . '_' . $ad->image) }}"
                        alt="{{ $ad->name }}}">
                </div>
                <span class="px-4 flex gap-5">
                    <div class="">
                        <label class='font-bold text-md'>Change Ad Link</label>
                        <input type="text" value="{{ $ad->url }}">
                    </div>
                    <label class='font-bold text-md'>Change position</label>
                    <input class="w-12" type="number" value="{{ $ad->position }}">
                </span>
            </div>
        @endforeach
    </div>

</x-admin-layout>
