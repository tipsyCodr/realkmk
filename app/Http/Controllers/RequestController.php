<?php

namespace App\Http\Controllers;

use App\Models\JobRequest;
use App\Models\PropertyRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    public function jobsStore(Request $request)
    {

        try {
            $jobRequest = new JobRequest();
            $jobRequest->name = $request->name ?? '';
            $jobRequest->category_type = $request->category_type ?? '';
            $jobRequest->expected_salary = $request->expected_salary ?? 0;
            $jobRequest->experience = $request->experience ?? '';
            $jobRequest->work_field = $request->work_field ?? '';
            $jobRequest->address = $request->address ?? '';
            $location = 'public/uploads/requests/job';
            if (!File::exists($location)) {
                File::makeDirectory($location, 0775, true, true);
            }
            if ($request->hasFile('photo_passport')) {
                $photo = $request->file('photo_passport');
                $filename = $request->name . '_passport.jpg';
                $path = $photo->storeAs($location, $filename);
                $jobRequest->photo_passport = $path;
            }
            if ($request->hasFile('resume')) {
                $resume = $request->file('resume');
                $filename = $request->name . '_resume.pdf';
                $path = $resume->storeAs($location, $filename);
                $jobRequest->resume = $path;
            }
            $jobRequest->city_id = $request->city ?? 0;
            $jobRequest->state_id = $request->state ?? 0;
            // $jobRequest->user_id = auth()->user()->id ?? 0;
            $jobRequest->save();
            return 'success';
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return 'failed';
        }

    }

    public function showRequests()
    {
        // $requests = JobRequest::all();
        return view('admin.requests.view');
    }

    public function indexJobs()
    {
        $requests = JobRequest::all();
        return view('admin.requests.jobs.list', compact('requests'));
    }

    public function indexProperties()
    {
        $requests = PropertyRequest::all();
        return view('admin.requests.properties.list', compact('requests'));
    }


    public function viewJob(Request $request)
    {
        $id = $request->route('id');
        $job = JobRequest::where('id', $id)->first();

        if (!$job) {
            abort(404, 'Job request not found');
        }

        return view('admin.requests.jobs.view', compact('job'));
    }
    public function viewProperty(Request $request)
    {
        $id = $request->route('id');
        $request = PropertyRequest::where('id', $id)->first();

        return view('admin.requests.properties.view', compact('request'));
    }
    public function propertiesFormSave(Request $request)
    {

        // return json_encode($request->all());
        try {
            $propertyRequest = new PropertyRequest();
            $propertyRequest->address = $request->address ?? '';
            $propertyRequest->category = $request->category ?? '';
            $propertyRequest->city = $request->city ?? '';
            $propertyRequest->description = $request->description ?? '';
            $propertyRequest->email = $request->email ?? '';
            $propertyRequest->location = $request->location ?? '';
            $propertyRequest->max_price = $request->max_price ?? 0;
            $propertyRequest->min_price = $request->min_price ?? 0;
            $propertyRequest->mobile = $request->mobile ?? '';
            $propertyRequest->name = $request->name ?? '';
            $propertyRequest->state = $request->state ?? '';
            $propertyRequest->save();
            return 'success';
        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return 'failed';
        }
        // $location = $request->post('location');
        // // dd($location);
        // session(['success' => 'dummy']);

        return redirect()->route('properties.show', $location)->with('success', 'Request Submitted Successfully!');
    }

}
