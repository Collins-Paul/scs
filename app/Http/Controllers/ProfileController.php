<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Fetch the authenticated user's profile data
        $user = auth()->user();
        return view('student.profile', compact('user'));
    }

    public function edit()
    {
        // Show the form for editing the authenticated user's profile
        $user = auth()->user();
        return view('student.profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        // Validate the profile update request
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|string',
            'username' => 'required|string|max:255|unique:users,username,' . auth()->id(),
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
        ]);

        // Update the authenticated user's profile
        $user = auth()->user();
        $user->update($request->only('email', 'firstname', 'lastname', 'gender', 'username'));

        // Redirect back with success message
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }
}
