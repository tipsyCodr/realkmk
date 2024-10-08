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
        $ads = Ad::all();
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
        $ads = Ad::all();
        return view('admin.ads.list', compact('ads'));
    }

}
