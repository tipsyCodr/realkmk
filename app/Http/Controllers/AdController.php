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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'url' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $request->file('image');
        $location = time(); // Using timestamp as location/folder name
        $imageName = $location . '_' . $image->getClientOriginalName();
        
        // Store the image
        $image->storeAs('public/uploads/ad_images/' . $location, $imageName);

        // Create the ad
        Ad::create([
            'name' => $request->name,
            'title' => $request->title,
            'url' => $request->url,
            'image' => $image->getClientOriginalName(),
            'location' => $location
        ]);

        return redirect()->back()->with('success', 'Advertisement added successfully!');
    }

    public function update(Request $request, Ad $ad)
    {
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $image = $request->file('image');
            $location = time(); // New timestamp for new image
            $imageName = $location . '_' . $image->getClientOriginalName();
            
            // Store the new image
            $image->storeAs('public/uploads/ad_images/' . $location, $imageName);

            // Update ad with new image details
            $ad->update([
                'image' => $image->getClientOriginalName(),
                'location' => $location
            ]);

            return response()->json(['success' => true]);
        }

        // For other field updates
        $field = $request->input('field');
        $value = $request->input('value');

        // Validate field name to prevent mass assignment
        if (!in_array($field, ['name', 'title', 'url', 'position'])) {
            return response()->json(['error' => 'Invalid field'], 422);
        }

        // Validate the value based on field
        switch ($field) {
            case 'url':
                $request->validate(['value' => 'required|url']);
                break;
            case 'position':
                $request->validate(['value' => 'required|integer|min:1']);
                break;
            default:
                $request->validate(['value' => 'required|string|max:255']);
        }

        // Update the field
        $ad->update([$field => $value]);

        return response()->json(['success' => true]);
    }
}
