<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function agent()
    {
        return view('plans.agent');
    }
}
