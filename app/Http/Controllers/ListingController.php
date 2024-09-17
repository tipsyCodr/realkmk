<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //
    public function viewListing(Request $request)
    {
        $id = $request->segment(2);
        $listing = Listing::find($id);
        return view('listings.view', compact('listing'));
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
        $categoryType = CategoryType::where('id', $categorySlug)->first();
        $category = Category::where('id', $categoryType->category_id)->first();
        $user = auth()->user();
        return view('listings.post', compact('user', 'category', 'categoryType'));
    }
}
