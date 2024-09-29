<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\City;
use App\Models\Listing;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ListingController extends Controller
{
    //
    public function viewListing(Request $request)
    {
        $id = $request->segment(2);
        $listing = Listing::find($id);
        $listing_user = User::find($listing["user_id"]);
        return view('listings.view', compact('listing', 'listing_user'));
    }
    /**
     * Search for listings given the request query parameters
     *
     * @param \Illuminate\Http\Request $request
     */

    public function searchListings(Request $request)
    {
        $q = $request->input('q');
        $location = $request->input('l');
        $query = Listing::query();
        if ($q && $location) {
            $query->where('location', 'like', '%' . $location . '%')->where('ad_title', 'like', '%' . $q . '%');
        } elseif ($q) {
            $query->where('ad_title', 'like', '%' . $q . '%');
        } elseif ($location) {
            $query->where('location', 'like', '%' . $location . '%');
        }
        $listings = $query->get();
        return view('listings.list', compact('listings'));
    }
    public function postCategoriesTypes(Request $request)
    {
        $categorySlug = $request->segment(4);
        $category = Category::where('slug', $categorySlug)->first();
        $categoryTypes = CategoryType::where('category_id', $category->id)->get();

        return view('listings.types', compact('category', 'categoryTypes'));
    }
    public function postForm(Request $request)
    {
        $categorySlug = $request->segment(3);
        // dd($categorySlug);
        $states = State::all();
        $cities = City::all();
        $categoryType = CategoryType::where('id', $categorySlug)->first();
        $category = Category::where('id', $categoryType->category_id)->first();
        $user = auth()->user();
        return view('listings.post', compact('user', 'category', 'categoryType', 'states', 'cities'));
    }
    public function storePropertyListing(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'ad_title' => 'required',
            'location' => 'nullable',
            'category_type_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'mobile' => 'required',
            'photos' => 'nullable|array',
            'photos.*' => 'nullable|file|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'furnishing' => 'nullable|string',
            'construction_status' => 'nullable|string',
            'listed_by' => 'nullable|string',
            'facing' => 'nullable|string',
            'project_name' => 'nullable|string',
            'super_builtup_area' => 'nullable|integer',
            'carpet_area' => 'nullable|integer',
            'maintainance' => 'nullable|integer',
            'total_floors' => 'nullable|integer',
            'car_parking' => 'nullable|integer',
        ]);

        $user = auth()->user();
        $categoryType = CategoryType::find($request->category_type_id);
        // dd($categoryType);
        $category = Category::find($categoryType->category_id)->slug;
        $listing = Listing::create([
            'user_id' => $user->id,
            'listing_uid' => "KMK" . rand(1000000000, 9999999999),
            'ad_title' => $request->ad_title,
            'slug' => Str::slug($request->ad_title),
            'location' => $request->location,
            'mobile' => $request->mobile,
            'state' => $request->state,
            'city' => $request->city,
            'category_id' => $request->category_id,
            'category_type_id' => $request->category_type_id,
            'price' => $request->price,
            'description' => $request->description,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'furnishing' => $request->furnishing,
            'construction_status' => $request->construction_status,
            'listed_by' => $request->listed_by,
            'facing' => $request->facing,
            'project_name' => $request->project_name,
            'super_builtup_area' => $request->super_builtup_area,
            'carpet_area' => $request->carpet_area,
            'maintainance' => $request->maintainance,
            'total_floors' => $request->total_floors,
            'car_parking' => $request->car_parking,
            'status' => 1,
        ]);
        if ($request->hasFile('photos')) {
            $photos = [];
            foreach ($request->file('photos') as $photo) {
                $photos[] = $photo->store('uploads/property_images', 'public');
            }
            $listing->photos = json_encode($photos);
            $listing->save();
        }
        return redirect()->back()->with([
            'listing_uid' => $listing->listing_uid,
            'success' => 'Thank You for posting your listing it will be available after sometime',
        ]);
        // return view('listings.post', compact('user', 'category', 'categoryType'));
    }
    public function searchListingsAdmin(Request $request)
    {
        $q = $request->input('q');
        $location = $request->input('l');
        $query = Listing::query()->orderBy('created_at', 'desc');
        if ($q && $location) {
            $query->where('location', 'like', '%' . $location . '%')->where('ad_title', 'like', '%' . $q . '%');
        } elseif ($q) {
            $query->where('ad_title', 'like', '%' . $q . '%');
        } elseif ($location) {
            $query->where('location', 'like', '%' . $location . '%');
        }

        $listings = $query->get();
        return view('admin.listings.list', compact('listings'));
    }
    public function getUserListing()
    {
        $user_id = auth()->user()->id;
        $listings = Listing::where('user_id', $user_id)->get();
        return view('my-listings', compact('listings', 'user_id'));
    }
    public function showListingsAdmin(Request $request)
    {
        $id = $request->segment(4);
        $listing = Listing::find($id);
        if (!$listing) {
            abort(404);
        }
        $listing->photos = json_decode($listing->photos);
        // dd($listing);
        return view('admin.listings.view', compact('listing'));
    }
    public function deleteListingsAdmin(Request $request)
    {
        $id = $request->post('id');
        $listing = Listing::find($id);
        // dd($listing);
        if ($listing) {
            $listing->delete();
            return redirect('admin/listings')->with([
                'success' => 'Listing Deleted Successfully',
            ]);
        } else {
            return redirect('admin/listings')->with([
                'error' => 'Listing not found',
            ]);
        }
    }
    public function disableListingsAdmin(Request $request)
    {
        $id = $request->post('id');
        $listing = Listing::find($id);
        // dd($listing);
        if ($listing) {
            $listing->status = 0;
            $listing->save();
            return redirect('admin/listings')->with([
                'success' => 'Listing Disabled Successfully',
            ]);
        } else {
            return redirect('admin/listings')->with([
                'error' => 'Listing not found',
            ]);
        }
    }
    public function enableListingsAdmin(Request $request)
    {
        $id = $request->post('id');
        $listing = Listing::find($id);
        // dd($listing);
        if ($listing) {
            $listing->status = 1;
            $listing->save();
            return redirect('admin/listings')->with([
                'success' => 'Listing Enabled Successfully',
            ]);
        } else {
            return redirect('admin/listings')->with([
                'error' => 'Listing not found',
            ]);
        }
    }
}
