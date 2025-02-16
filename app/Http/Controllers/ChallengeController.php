<?php

namespace App\Http\Controllers;

use App\Models\Challenge_Registrations;
use Illuminate\Http\Request;
use App\Models\Challenge;

class ChallengeController extends Controller
{
    public function index()
{
    $challenges = Challenge::all();
    $registrations = Challenge_Registrations::all();

    return view('admin.challenge', compact('challenges', 'registrations'));
}


    public function create()
    {
        return view('admin.challenge.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'required',
            'requirements' => 'required',
            'evaluation_criteria' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'prize_description' => 'required|string',
            'active' => 'boolean',
        ]);

        Challenge::create([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'evaluation_criteria' => $request->evaluation_criteria,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'prize_description' => $request->prize_description,
            'active' => $request->has('active'),
        ]);

        return redirect()->route('admin.challenge.index')->with('success', 'Challenge created successfully!');
    }

    public function destroy($id)
    {
        $challenge = Challenge::findOrFail($id);
        $challenge->delete();
        return redirect()->route('admin.challenge.index')->with('success', 'Challenge deleted successfully!');
    }

    public function edit($id)
    {
        $challenge = Challenge::findOrFail($id);
        return view('admin.challenge.edit', compact('challenge'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'required',
            'requirements' => 'required',
            'evaluation_criteria' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'prize_description' => 'required|string',
            'active' => 'boolean',
        ]);
    
        $challenge = Challenge::findOrFail($id);
        $challenge->update([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'requirements' => $request->requirements,
            'evaluation_criteria' => $request->evaluation_criteria,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'prize_description' => $request->prize_description,
            'active' => $request->active,
        ]);
    
        return redirect()->route('admin.challenge.index')->with('success', 'Challenge updated successfully!');
    }
    
}
