<?php

namespace App\Http\Controllers;

use App\Models\JobRequest;
use App\Models\Listing;
use App\Models\PropertyRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        // // if (auth()->user()->hasRole('admin')) {
        // if (auth()->user()->hasRole('admin')) {
        //     return redirect("/admin/dashboard");
        // } else {
        //     return redirect("/");
        // }
        return redirect("/admin/dashboard");
    }
    public function dashboard()
    {
        $totalJobRequests = JobRequest::all()->count();
        $totalPropertyRequests = PropertyRequest::all()->count();
        $totalListings = Listing::all()->count();

        return view("admin.index");
    }
}
