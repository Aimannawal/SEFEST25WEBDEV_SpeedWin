<?php

namespace App\Http\Controllers;

use App\Models\LearnCourse;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function index() {
        $courses = LearnCourse::paginate(6); // Pagination
        return view('learn', compact('courses'));
    }
}
