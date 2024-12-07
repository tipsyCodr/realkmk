<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    // index
    function getAd($adCount)
    {
        // Assuming you have an array of ads with image and URL
        $ads = [
            ['image' => 'https://www.adspeed.com/placeholder-300x250.gif"', 'url' => '#'],
            // ...
        ];
        $ads = Ad::orderBy('position')->get();
        // Return the ad data based on the ad count, wrapping around to the start of the list when necessary
        if (count($ads) > 0) {
            return $ads[$adCount % count($ads)];
        } else {
            // Handle the case when $ads is empty, return null or any default value
            return null;
        }
    }

    public function getAllAds()
    {
        $ads = Ad::orderBy('position')->get();
        return view('admin.ads.list', compact('ads'));
    }

    public function updateOrder(Request $request)
    {
        $positions = $request->input('positions', []);
        
        // First, temporarily set all positions to null to avoid unique constraint conflicts
        Ad::query()->update(['position' => null]);
        
        // Then update with new positions
        foreach ($positions as $position) {
            Ad::where('id', $position['id'])
                ->update(['position' => $position['position']]);
        }
        
        return response()->json(['success' => true]);
    }
}
