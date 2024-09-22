<?php

namespace App\Http\Controllers;

use App\Models\CategoryType;
use App\Models\City;
use App\Models\JobRequest;
use App\Models\Listing;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WebController extends Controller
{

    //
    public function index()
    {
        $listings = Listing::orderByDesc('created_at')->get();
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
        $cities = City::where('fk_i_region_id', $request->stateId)->get();
        return response()->json($cities);
    }

    public function plan()
    {
        // echo "plans";
        return view('plans.index');
    }
    public function login()
    {
        if (auth()->check()) {
            return view('user.profile');
        }
        return view('user.login');
    }

    public function register()
    {
        return view('user.register');
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


    public function showProperties(Request $request)
    {
        $location = $request->segment(3);
        $listings = Listing::where('location', $location)->get();
        return view('listings.list', compact('listings'));
    }

    public function showScanner(Request $request)
    {
        $amount = $request->input('amount');
        return view('payment.show', compact('amount'));
    }
}
