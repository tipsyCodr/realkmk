<?php

namespace App\Http\Controllers;

use App\Models\RealAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RealAgentController extends Controller
{
    public function create()
    {
        return view('agent.form');
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
        
        RealAgent::create($validated);

        return redirect()->route('agent.index')->with('success', 'Thank you for registering as an agent. We will review your application and get back to you soon.');
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
}
