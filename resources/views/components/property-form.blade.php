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
                {{-- <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="category_type_id">
                        Type
                    </label>
                </div> --}}

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="state">
                        State
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="state" name="state" data-search="true" onchange="loadCities(this.value)" required>
                        <option value="">Select State</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->pk_i_id }}">{{ $state->s_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                        City
                    </label>
                    <select
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="city" name="city" data-search="true" required>
                        <option value="">Select City</option>

                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                        Area (Locality)
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="location" type="text" name="location" value="{{ old('location') }}">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bedrooms">
                        Bedrooms
                    </label>
                    <select
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="bedrooms" name="bedrooms" required>
                        <option value="">Select Bedrooms</option>
                        @for ($i = 1; $i <= 7; $i++)
                            <option value="{{ $i }}" {{ old('bedrooms') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bathrooms">
                        Bathrooms
                    </label>
                    <select
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="bathrooms" name="bathrooms" required>
                        <option value="">Select Bathrooms</option>
                        @for ($i = 1; $i <= 7; $i++)
                            <option value="{{ $i }}" {{ old('bathrooms') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="furnishing">
                        Furnishing
                    </label>
                    <select
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="furnishing" name="furnishing" required>
                        <option value="">Select Furnishing</option>
                        <option value="No Furnishing" {{ old('furnishing') == 'No Furnishing' ? 'selected' : '' }}>
                            No Furnishing</option>
                        <option value="Semi Furnished" {{ old('furnishing') == 'Semi Furnished' ? 'selected' : '' }}>
                            Semi Furnished</option>
                        <option value="Fully Furnished" {{ old('furnishing') == 'Fully Furnished' ? 'selected' : '' }}>
                            Fully Furnished</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="construction_status">
                        Construction Status
                    </label>
                    <select
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="construction_status" name="construction_status" required>
                        <option value="">Select Construction Status</option>
                        <option value="Under Construction"
                            {{ old('construction_status') == 'Under Construction' ? 'selected' : '' }}>
                            Under Construction</option>
                        <option value="Ready To Move"
                            {{ old('construction_status') == 'Ready To Move' ? 'selected' : '' }}>
                            Ready To Move</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="listed_by">
                        Listed By
                    </label>
                    <select
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="listed_by" name="listed_by" required>
                        <option value="">Select Listed By</option>
                        <option value="Owner" {{ old('listed_by') == 'Owner' ? 'selected' : '' }}>
                            Owner</option>
                        <option value="Builder" {{ old('listed_by') == 'Builder/Developer' ? 'selected' : '' }}>
                            Builder</option>
                        <option value="Agent" {{ old('listed_by') == 'Agent' ? 'selected' : '' }}>
                            Agent</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="facing">
                        Facing
                    </label>
                    <select
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="facing" name="facing" required>
                        <option value="">Select Facing</option>
                        <option value="East" {{ old('facing') == 'East' ? 'selected' : '' }}>
                            East</option>
                        <option value="West" {{ old('facing') == 'West' ? 'selected' : '' }}>
                            West</option>
                        <option value="North" {{ old('facing') == 'North' ? 'selected' : '' }}>
                            North</option>
                        <option value="South" {{ old('facing') == 'South' ? 'selected' : '' }}>
                            South</option>
                        <option value="North-East" {{ old('facing') == 'North-East' ? 'selected' : '' }}>
                            North-East</option>
                        <option value="North-West" {{ old('facing') == 'North-West' ? 'selected' : '' }}>
                            North-West</option>
                        <option value="South-East" {{ old('facing') == 'South-East' ? 'selected' : '' }}>
                            South-East</option>
                        <option value="South-West" {{ old('facing') == 'South-West' ? 'selected' : '' }}>
                            South-West</option>
                    </select>
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
                        Super Builtup Area (ft)
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="super_builtup_area" type="number" name="super_builtup_area"
                        value="{{ old('super_builtup_area') }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="carpet_area">
                        Carpet Area (ft)
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="carpet_area" type="number" name="carpet_area" value="{{ old('carpet_area') }}"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="maintainance">
                        Maintainance (Monthly)
                    </label>
                    <input
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="maintainance" type="number" name="maintainance" value="{{ old('maintainance') ?? 0 }}"
                        required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="total_floors">
                        Total Floors
                    </label>
                    <select
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="total_floors" name="total_floors" required>
                        @for ($i = 1; $i <= 10; $i++)
                            <option value="{{ $i }}" {{ old('total_floors') == $i ? 'selected' : '' }}>
                                {{ $i }}</option>
                        @endfor
                    </select>

                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="total_floors">
                        Car Parking
                    </label>
                    <select
                        class="appearance-none border-b border-black rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="car_parking" name="car_parking" required>
                        <option value="1" {{ old('car_parking') == 0 ? 'selected' : '' }}>
                            0
                        </option>
                        <option value="1" {{ old('car_parking') == 1 ? 'selected' : '' }}>
                            1
                        </option>
                        <option value="2" {{ old('car_parking') == 2 ? 'selected' : '' }}>
                            2
                        </option>
                        <option value="3" {{ old('car_parking') == 3 ? 'selected' : '' }}>
                            3
                        </option>
                        <option value="4" {{ old('car_parking') == 4 ? 'selected' : '' }}>
                            4
                        </option>
                    </select>

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
        <script>
            function loadCities(stateId) {
                axios.get(`{{ route('cities.by.state') }}?stateId=${stateId}`)
                    .then(response => {
                        const cities = response.data;
                        const citySelect = document.getElementById('city');
                        citySelect.innerHTML = `<option value="">Select City</option>`;
                        cities.forEach(city => {
                            const option = document.createElement('option');
                            option.value = city.pk_i_id;
                            option.text = city.s_name;
                            citySelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        </script>
