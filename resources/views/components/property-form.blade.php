    {{-- {{ dump(session()->all()) }} --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="py-4">
        {{-- Property Form --}}
        <div class="form-wrapper px-4">
            <form action="{{ route('listing.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                    <input type="hidden" name="category_type_id" value="{{ $categoryType->id }}">

                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="ad_title">
                        Ad Title
                    </label>
                    <input
                        class=" appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="ad_title" type="text" name="ad_title" value="{{ old('ad_title') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="description" name="description" placeholder="Enter Your Description" required>{{ old('description') }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                        Price
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="price" type="number" name="price" value="{{ old('price') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="category_type_id">
                        Type
                    </label>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                        Location
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="location" type="text" name="location" value="{{ old('location') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bedrooms">
                        Bedrooms
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="bedrooms" type="number" name="bedrooms" value="{{ old('bedrooms') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bathrooms">
                        Bathrooms
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="bathrooms" type="number" name="bathrooms" value="{{ old('bathrooms') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="furnishing">
                        Furnishing
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="furnishing" type="text" name="furnishing" value="{{ old('furnishing') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="construction_status">
                        Construction Status
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="construction_status" type="text" name="construction_status"
                        value="{{ old('construction_status') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="listed_by">
                        Listed By
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="listed_by" type="text" name="listed_by" value="{{ old('listed_by') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="facing">
                        Facing
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="facing" type="text" name="facing" value="{{ old('facing') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="project_name">
                        Project Name
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="project_name" type="text" name="project_name" value="{{ old('project_name') }}"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="super_builtup_area">
                        Super Builtup Area
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="super_builtup_area" type="number" name="super_builtup_area"
                        value="{{ old('super_builtup_area') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="carpet_area">
                        Carpet Area
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="carpet_area" type="number" name="carpet_area" value="{{ old('carpet_area') }}"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="maintainance">
                        Maintainance
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="maintainance" type="number" name="maintainance" value="{{ old('maintainance') }}"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="total_floors">
                        Total Floors
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="total_floors" type="number" name="total_floors" value="{{ old('total_floors') }}"
                        required>

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="total_floors">
                        Car Parking
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="car_parking" type="number" name="car_parking" value="{{ old('car_parking') }}"
                        required>

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="photos">
                        Photos
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="photos" type="file" name="photos[]" multiple>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
