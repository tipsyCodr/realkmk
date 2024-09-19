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
            ['image' => 'https://via.placeholder.com/440x240?text=Ads%20Space', 'url' => '#'],
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


}
