<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function index()
    {
        return view('app', );
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
