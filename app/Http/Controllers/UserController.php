<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $user = User::where('email', '=', $data['email'])->orWhere('mobile', '=', $data['mobile'])->first();
        if ($user) {
            if ($user->email == $data['email']) {
                return back()->with('error', 'Email is already registered');
            }
            if ($user->mobile == $data['mobile']) {
                return back()->with('error', 'Mobile number is already registered');
            }
        }
        $user = User::create([
            'name' => $data['name'],
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => 'user',
        ]);

        auth()->login($user);
        return redirect('/')->with('success', 'Registration Successful ! Now you can post your listing!');

    }
    public function authenticateUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'password' => 'required',
            // 'remember' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $credentials = $request->only('mobile', 'password');
        if (auth()->attempt($credentials, $request->remember)) {
            $user = auth()->user();
            if ($user->role == 'admin') {
                return redirect()->intended('/admin')->with('success', 'Login Successful !');
            }
            return redirect()->intended('/')->with('success', 'Login Successful !');
        }
        return redirect()->back()->withErrors(['mobile' => 'Invalid Credentials']);
    }

    public function googleAuthenticate(Request $request)
    {
        $request->validate([
            'uid' => 'required',
            'email' => 'required|email',
            'name' => 'required',
            'token' => 'required',
            'photoURL' => 'nullable',
            'emailVerified' => 'nullable|boolean',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            auth()->login($user, true);
            return response()->json(['success' => true, 'message' => 'User logged in']);
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->token),
                'email_verified_at' => $request->emailVerified ? now() : null,
                'profile_picture' => $request->photoURL,
                'role' => 'user'
            ]);

            $email = $user->email;
            $password = $user->password;
            $remember = true;
            // auth()->login($user, true);
            if (Auth::attempt($this->only('email', 'password'), $remember)) {
                // logged in succcessfully, if remember key exist in request then remember me will be true
                // return redirect()->intended('/')->with('success', 'User registered and logged in');
                return response()->json(['success' => true, 'message' => 'User registered and logged in']);
            }
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/')->with('success', 'Logged out successfully !');
    }
}
