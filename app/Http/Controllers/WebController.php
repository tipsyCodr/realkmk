<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use App\Models\City;
use App\Models\Listing;
use App\Models\State;
use Illuminate\Http\Request;

class WebController extends Controller
{

    //
    public function index()
    {
        $listings = Listing::all();
        return view('app', compact('listings'));
    }
    public function chat()
    {
        // echo "Chats";
        return view('chats.index');
    }
    public function post()
    {
        // echo "posts";
        return view('sell');
    }
    public function jobs()
    {
        // echo "posts";
        $jobs = CategoryType::where('category_id', '2')->get();
        return view('jobs.list', compact('jobs'));
    }
    public function jobsForm()
    {
        // echo "posts";
        $states = State::all();
        $cities = City::all();
        $categories = CategoryType::where('category_id', 2)->get();
        return view('jobs.form', compact('categories', 'states', 'cities'));
    }
    public function citiesByState(Request $request)
    {
        $cities = City::where('state_id', $request->stateId)->get();
        return response()->json($cities);
    }
    public function jobsStore(Request $request)
    {
        dd($request->all());
    }
    public function plan()
    {
        // echo "plans";
        return view('plans.index');
    }
    public function login()
    {
        echo "logins";
        // return view('app');
    }

    public function properties()
    {

        return view('properties');
    }
    public function propertiesForm(Request $request)
    {
        $location = $request->segment(2);
        $states = State::all();
        $cities = City::all();
        $categories = CategoryType::where('category_id', 1)->get();
        return view('listings.form', compact('categories', 'states', 'cities', 'location'));
    }
    public function propertiesFormSave(Request $request)
    {
        $location = $request->post('location');
        // dd($location);
        session(['success' => 'dummy']);

        return redirect()->route('properties.show', $location)->with('success', 'Request Submitted Successfull!');
    }

    public function showProperties(Request $request)
    {
        $location = $request->segment(3);
        $listings = Listing::where('location', $location)->get();
        return view('listings.list', compact('listings'));
    }

}
