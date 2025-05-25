<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function update(Request $request)
    {
        // Get the authenticated user model (not just the ID)
        $user = Auth::user();

        // Validate the form input
        $validated = $request->validate([
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('The current password is incorrect.');
                    }
                },
            ],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Update the password
        $user->update([
            'password' => Hash::make($validated['new_password']),
        ]);

        // Redirect with success message
        return redirect()->route('profile.index')->with('success', 'Password updated successfully.');
    }

    public function edit()
    {
        // Show the form for changing the password
        return view('student.password-edit');
    }
}
