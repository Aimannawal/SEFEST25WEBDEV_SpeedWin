<?php

namespace App\Http\Controllers;

use App\Models\Challenge_Registrations;
use Illuminate\Http\Request;
use App\Models\Challenge;

class UserChallengeController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $type = $request->input('type');

        $challenges = Challenge::where('active', true)
            ->when($keyword, function ($query, $keyword) {
                return $query->where('title', 'LIKE', "%{$keyword}%");
            })
            ->when($type, function ($query, $type) {
                return $query->where('type', 'LIKE', "%{$type}%");
            })
            ->get();

        return view('challenges', compact('challenges'));
    }

    public function show($id)
    {
        $challenge = Challenge::findOrFail($id);
        return view('detail-challenges', compact('challenge'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'institution' => 'required|string|max:255',
            'whatsapp_number' => 'required|string|max:20',
            'experience' => 'required|string',
        ]);

        // Simpan data pendaftaran tantangan
        Challenge_Registrations::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'email' => $request->email,
            'institution' => $request->institution,
            'whatsapp_number' => $request->whatsapp_number,
            'experience' => $request->experience,
        ]);

        return view('/challenges-form')->with('success', 'Pendaftaran berhasil dikirim!');
    }
}
