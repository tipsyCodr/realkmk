<?php

namespace App\Http\Controllers;

use App\Models\Listing;
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
        echo "Chats";
        // return view('app');
    }
    public function post()
    {
        echo "posts";
        // return view('app');
    }
    public function plan()
    {
        echo "plans";
        // return view('app');
    }
    public function login()
    {
        echo "logins";
        // return view('app');
    }

}
