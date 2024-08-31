<?php

namespace App\Http\Controllers;

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
}
