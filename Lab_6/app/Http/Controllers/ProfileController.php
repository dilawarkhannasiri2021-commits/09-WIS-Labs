<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function edit()
    {
        return view('profile-edit');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        $user->save();

        return redirect()->route('profile')
            ->with('success', 'Profile updated successfully!');
    }

    public function changePassword()
    {
        return view('change-password');
    }

    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        $user->password = $validated['password'];
        $user->save();

        return redirect()->route('profile')
            ->with('success', 'Password changed successfully!');
    }
}
