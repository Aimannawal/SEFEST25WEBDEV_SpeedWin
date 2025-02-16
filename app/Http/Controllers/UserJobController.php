<?php

namespace App\Http\Controllers;

use App\Models\Job_Applications;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;

class UserJobController extends Controller
{
        public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $category = $request->input('category');

        $jobs = Job::where('active', true) // Hanya ambil yang aktif
            ->when($keyword, function ($query, $keyword) {
                return $query->where(function ($q) use ($keyword) {
                    $q->where('title', 'LIKE', "%{$keyword}%")
                    ->orWhere('company', 'LIKE', "%{$keyword}%");
                });
            })
            ->when($category, function ($query, $category) {
                return $query->where(function ($q) use ($category) {
                    $q->where('title', 'LIKE', "%{$category}%")
                    ->orWhere('company', 'LIKE', "%{$category}%");
                });
            })
            ->get();

        return view('jobs', compact('jobs'));
    }


    public function show($id)
    {
        $job = Job::where('id', $id)->where('active', true)->firstOrFail();
        return view('detail-jobs', compact('job'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'portfolio' => 'nullable|url|max:255',
            'experience' => 'required|string',
            'resume' => 'required|mimes:pdf|max:2048',
        ]);

        $resumePath = $request->file('resume')->store('resumes', 'public');

        Job_Applications::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'portfolio' => $request->portfolio,
            'experience' => $request->experience,
            'resume_path' => $resumePath,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Lamaran berhasil dikirim.');
    }
}
