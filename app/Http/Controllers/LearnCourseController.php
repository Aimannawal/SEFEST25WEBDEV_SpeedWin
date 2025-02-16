<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LearnCourse;
use Illuminate\Support\Facades\Storage;

class LearnCourseController extends Controller
{
    public function index()
    {
        $courses = LearnCourse::all();
        return view('admin.learn', compact('courses'));
    }

    public function create()
    {
        return view('admin.learn.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'duration'    => 'required|string',
            'level'       => 'required|in:Pemula,Menengah,Lanjutan',
            'rating'      => 'nullable|numeric|min:0|max:5',
            'students'    => 'nullable|integer|min:0',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->all();

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        LearnCourse::create($data);
        return redirect()->route('admin.learn.index')->with('success', 'Course created successfully.');
    }

    public function edit($id)
    {
        $course = LearnCourse::findOrFail($id);
        return view('admin.learn.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = LearnCourse::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required',
            'duration'    => 'required|string',
            'level'       => 'required|in:Pemula,Menengah,Lanjutan',
            'rating'      => 'nullable|numeric|min:0|max:5',
            'students'    => 'nullable|integer|min:0',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->all();

        // Update gambar jika ada gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $course->update($data);
        return redirect()->route('admin.learn.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = LearnCourse::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $course->delete();
        return redirect()->route('admin.learn.index')->with('success', 'Course deleted successfully.');
    }
}
