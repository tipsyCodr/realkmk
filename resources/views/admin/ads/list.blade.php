<x-admin-layout>
    <div class="p-4">
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-2xl font-bold mb-4">Add New Advertisement</h2>
            <form action="{{ route('admin.ads.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ad Name</label>
                        <input type="text" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ad Title (optional)</label>
                        <input type="text" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ad URL</label>
                        <input type="url" name="url" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Ad Image</label>
                        <input type="file" name="image" required accept="image/*" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                    </div>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Add Advertisement
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="sortable" class="flex flex-row flex-wrap gap-5 items-center justify-center" data-update-url="{{ route('admin.ads.updateOrder') }}">
        @foreach ($ads as $ad)
            <div class="item h-[28rem] bg-white py-4 px-1 rounded-xl shadow max-w-sm hover:bg-gray-50" data-id="{{ $ad->id }}">
                <div class="px-4 flex flex-col gap-1">
                    <label class='font-bold text-lg'>Change Ad Name</label>
                    <input class="w-full update-field" type="text" value="{{ $ad->name }}" data-field="name" data-id="{{ $ad->id }}">
                </div>
                <div class="m-2 bg-gray-200 shadow-inner">
                    <img class="object-contain w-full h-60 rounded-lg"
                        src="{{ asset('storage/uploads/ad_images/' . $ad->location . '/' . $ad->location . '_' . $ad->image) }}"
                        alt="{{ $ad->name }}}">
                    <input type="file" class="hidden update-image" data-id="{{ $ad->id }}" accept="image/*">
                    <button class="w-full mt-2 px-2 py-1 bg-gray-100 text-sm text-gray-700 hover:bg-gray-200 rounded" onclick="document.querySelector('.update-image[data-id=\'{{ $ad->id }}\']').click()">
                        Change Image
                    </button>
                </div>
                <span class="px-4 flex gap-5">
                    <div class="">
                        <label class='font-bold text-md'>Change Ad Link</label>
                        <input type="text" class="update-field" value="{{ $ad->url }}" data-field="url" data-id="{{ $ad->id }}">
                    </div>
                    <label class='font-bold text-md'>Change position</label>
                    <input class="w-12 update-field" type="number" value="{{ $ad->position }}" data-field="position" data-id="{{ $ad->id }}">
                </span>
            </div>
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <script>
        $(document).ready(function() {
            // Sortable functionality
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

            // Update fields on change
            $('.update-field').change(function() {
                const id = $(this).data('id');
                const field = $(this).data('field');
                const value = $(this).val();

                $.ajax({
                    url: '{{ url("admin/ads/update") }}/' + id,
                    method: 'POST',
                    data: {
                        field: field,
                        value: value,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log('Updated successfully');
                    },
                    error: function(xhr) {
                        console.error('Error updating');
                        alert('Failed to update. Please try again.');
                    }
                });
            });

            // Handle image updates
            $('.update-image').change(function() {
                const id = $(this).data('id');
                const file = this.files[0];
                if (!file) return;

                const formData = new FormData();
                formData.append('image', file);
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    url: '{{ url("admin/ads/update") }}/' + id,
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.reload(); // Reload to show new image
                    },
                    error: function(xhr) {
                        console.error('Error updating image');
                        alert('Failed to update image. Please try again.');
                    }
                });
            });
        });
    </script>
</x-admin-layout>
