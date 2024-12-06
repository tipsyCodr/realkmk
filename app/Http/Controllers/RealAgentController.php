<?php

namespace App\Http\Controllers;

use App\Models\RealAgent;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RealAgentController extends Controller
{
    public function create()
    {
        $states = State::all();
        return view('agent.form', compact('states'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'experience' => 'required|in:1 year,3 years,5+ years',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:255',
            'pan_card' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'aadhar_card' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            'passport_photo' => 'required|image|max:2048'
        ]);

        // Handle file uploads
        if ($request->hasFile('pan_card')) {
            $validated['pan_card'] = $request->file('pan_card')->store('agent-documents', 'public');
        }
        if ($request->hasFile('aadhar_card')) {
            $validated['aadhar_card'] = $request->file('aadhar_card')->store('agent-documents', 'public');
        }
        if ($request->hasFile('passport_photo')) {
            $validated['passport_photo'] = $request->file('passport_photo')->store('agent-photos', 'public');
        }

        $validated['user_id'] = Auth::id();
        
        // Store form data in session
        session(['agent_form_data' => $validated]);
        
        return redirect()->route('agent.otp');
    }

    public function showOtpForm()
    {
        if (!session()->has('agent_form_data')) {
            return redirect()->route('agent.create');
        }
        return view('agent.otp-verify');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|string|size:4'
        ]);

        if ($request->otp !== '7777') {
            return back()->with('error', 'Invalid OTP. Please try again.');
        }

        // Get the stored form data
        $validated = session('agent_form_data');
        
        // Create the agent
        RealAgent::create($validated);
        
        // Clear the session data
        session()->forget('agent_form_data');
        
        return redirect()->route('loading');
    }

    public function index()
    {
        $agent = RealAgent::where('user_id', Auth::id())->first();
        return view('agent.index', compact('agent'));
    }

    public function edit()
    {
        $agent = RealAgent::where('user_id', Auth::id())->firstOrFail();
        return view('agent.edit', compact('agent'));
    }

    public function update(Request $request)
    {
        $agent = RealAgent::where('user_id', Auth::id())->firstOrFail();
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'experience' => 'required|in:1 year,3 years,5+ years',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'ifsc_code' => 'required|string|max:255',
            'pan_card' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
            'aadhar_card' => 'nullable|file|mimes:jpeg,png,pdf|max:2048',
            'passport_photo' => 'nullable|image|max:2048'
        ]);

        // Handle file uploads
        if ($request->hasFile('pan_card')) {
            Storage::disk('public')->delete($agent->pan_card);
            $validated['pan_card'] = $request->file('pan_card')->store('agent-documents', 'public');
        }
        if ($request->hasFile('aadhar_card')) {
            Storage::disk('public')->delete($agent->aadhar_card);
            $validated['aadhar_card'] = $request->file('aadhar_card')->store('agent-documents', 'public');
        }
        if ($request->hasFile('passport_photo')) {
            Storage::disk('public')->delete($agent->passport_photo);
            $validated['passport_photo'] = $request->file('passport_photo')->store('agent-photos', 'public');
        }

        $agent->update($validated);

        return redirect()->route('agent.dashboard')->with('success', 'Agent profile updated successfully!');
    }

    public function getCities($stateId)
    {
        $cities = City::where('fk_i_region_id', $stateId)->get();
        return response()->json($cities);
    }
}
