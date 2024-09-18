<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function registerUser(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'mobile' => 'required|digits:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $user = \App\Models\User::where('email', '=', $data['email'])->orWhere('mobile', '=', $data['mobile'])->first();
        if ($user) {
            if ($user->email == $data['email']) {
                return back()->with('error', 'Email is already registered');
            }
            if ($user->mobile == $data['mobile']) {
                return back()->with('error', 'Mobile number is already registered');
            }
        }
        $user = \App\Models\User::create([
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        auth()->login($user);
        return redirect('/')->with('success', 'Registration Successful ! Now you can post your listing!');

    }
    public function authenticateUser(\Request $request)
    {

        $request->validate([
            'mobile' => 'required|digits:10',
            'password' => 'required',
        ]);
        $credentials = $request->only('mobile', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->intended('/')->with('success', 'Login Successful !');
        }
        return redirect()->back()->withErrors(['mobile' => 'Invalid Credentials']);



    }
}
