<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Get the authenticated user
        return inertia('Profile/Show', [
            'user' => $user,
        ]);
    }

    public function edit(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add other fields you want to validate/update
        ]);

       // $user->update($request->only(['name', 'email'])); // Update user info

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user(); // Get the authenticated user

        $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        }

      //  $user->update([
        //    'password' => Hash::make($request->password),
        //]);

        return redirect()->back()->with('success', 'Password updated successfully!');
    }

    public function destroy()
    {
        $user = Auth::user(); // Get the authenticated user

        // You might want to perform additional actions before deleting the account

       // $user->delete(); // Delete the user account

        return redirect('/')->with('success', 'Your account has been deleted.');
    }
}
