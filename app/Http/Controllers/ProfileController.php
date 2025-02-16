<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'industry' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'website' => 'nullable|url',
            'founded_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'company_size' => 'nullable|string|max:255',
            'headquarters' => 'nullable|string|max:255',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'facebook' => 'nullable|url',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['_token', 'company_logo']);

        // Jika ada file baru, upload dan update company_logo
        if ($request->hasFile('company_logo')) {
            // Hapus file lama jika ada
            if ($user->company_logo) {
                Storage::delete('public/' . $user->company_logo);
            }

            // Simpan file baru
            $path = $request->file('company_logo')->store('company_logos', 'public');
            $data['company_logo'] = $path;
        }

        // Update user data
        $user->update($data);

        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully.');
    }
}
