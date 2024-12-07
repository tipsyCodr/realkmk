<x-admin-layout>

    <div id="sortable" class="flex flex-row flex-wrap gap-5 items-center justify-center" data-update-url="{{ route('admin.ads.updateOrder') }}">
        @foreach ($ads as $ad)
            <div class="item h-[25rem] bg-white py-4 px-1 rounded-xl shadow max-w-sm hover:bg-gray-50" data-id="{{ $ad->id }}">
                <div class="px-4 flex flex-col gap-1">
                    <label class='font-bold text-lg'>Change Ad Name</label>
                    <input class="w-full" type="text" value="{{ $ad->name }}">
                </div>
                {{-- <input type="text" value=" {{ $ad->title }}"> --}}
                <div class="m-2 bg-gray-200  shadow-inner">
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <script>
        $(document).ready(function() {
            $("#sortable").sortable({
                items: ".item",
                cursor: "move",
                opacity: 0.6,
                update: function(event, ui) {
                    let positions = [];
                    $('.item').each(function(index) {
                        positions.push({
                            id: $(this).data('id'),
                            position: index + 1
                        });
                    });
                    
                    $.ajax({
                        url: $(this).data('update-url'),
                        method: 'POST',
                        data: {
                            positions: positions,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            console.log('Order updated successfully');
                        },
                        error: function(xhr) {
                            console.error('Error updating order');
                        }
                    });
                }
            }).disableSelection();
        });
    </script>
</x-admin-layout>
