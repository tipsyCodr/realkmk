<?php

class AdHelper
{


    function getAd($adCount)
    {
        // Assuming you have an array of ads with image and URL
        $ads = [
            ['image' => 'ad1.jpg', 'url' => 'https://example.com/ad1'],
            ['image' => 'ad2.jpg', 'url' => 'https://example.com/ad2'],
            // ...
        ];

        // Return the ad data based on the ad count, wrapping around to the start of the list when necessary
        return $ads[$adCount % count($ads)];
    }
}
