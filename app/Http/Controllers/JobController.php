<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Job_Applications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function index()
{
    $jobs = Job::latest()->get();
    $applications = Job_Applications::latest()->get();
    return view('admin.worker', compact('jobs', 'applications'));
}


    public function create()
    {
        return view('admin.worker.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'               => 'required|string|max:255',
            'company'             => 'required|string|max:255',
            'location'            => 'required|string|max:255',
            'job_type'            => 'required|string|in:full-time,part-time,contract,internship',
            'description'         => 'required|string',
            'responsibilities'    => 'required|string',
            'qualifications'      => 'required|string',
            'salary_range'        => 'nullable|string',
            'application_deadline'=> 'required|date',
            'active'              => 'boolean',
        ]);

        Job::create([
            'title'               => $request->title,
            'company'             => $request->company,
            'location'            => $request->location,
            'job_type'            => $request->job_type,
            'description'         => $request->description,
            'responsibilities'    => $request->responsibilities,
            'qualifications'      => $request->qualifications,
            'salary_range'        => $request->salary_range,
            'application_deadline'=> $request->application_deadline,
            'active'              => $request->has('active'),
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Job created successfully!');
    }

    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('admin.worker.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'               => 'required|string|max:255',
            'company'             => 'required|string|max:255',
            'location'            => 'required|string|max:255',
            'job_type'            => 'required|string|in:full-time,part-time,contract,internship',
            'description'         => 'required|string',
            'responsibilities'    => 'required|string',
            'qualifications'      => 'required|string',
            'salary_range'        => 'nullable|string',
            'application_deadline'=> 'required|date',
            'active'              => 'boolean',
        ]);

        $job = Job::findOrFail($id);
        $job->update([
            'title'               => $request->title,
            'company'             => $request->company,
            'location'            => $request->location,
            'job_type'            => $request->job_type,
            'description'         => $request->description,
            'responsibilities'    => $request->responsibilities,
            'qualifications'      => $request->qualifications,
            'salary_range'        => $request->salary_range,
            'application_deadline'=> $request->application_deadline,
            'active'              => $request->active,
        ]);

        return redirect()->route('admin.jobs.index', $id)->with('success', 'Job updated successfully!');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('admin.jobs.index')->with('success', 'Job deleted successfully.');
    }

        public function getResume($id)
    {
        $application = Job_Applications::find($id);

        if (!$application) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json([
            'name' => $application->name,
            'email' => $application->email,
            'phone' => $application->phone,
            'experience' => $application->experience,
            'resume_path' => asset($application->resume_path),
            'portfolio' => $application->portfolio ? asset($application->portfolio) : null,
            'status' => $application->status
        ]);
    }

    public function downloadResume($id)
    {
        $application = Job_Applications::find($id);
        
        if (!$application || !$application->resume_path) {
            return back()->with('error', 'Resume tidak ditemukan.');
        }
    
        $filePath = $application->resume_path;
    
        if (Storage::disk('public')->exists($filePath)) {
            return Storage::disk('public')->download($filePath);
        }
    
        if (file_exists(public_path($filePath))) {
            return response()->download(public_path($filePath));
        }
    
        return back()->with('error', 'File tidak tersedia.');
    }

}
