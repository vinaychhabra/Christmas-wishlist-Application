<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        return view('auth.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // 'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add more validation rules for other fields
        ]);
        // if ($request->hasFile('profile_photo')) {
        //     $request->user()->updateProfilePhoto($request->file('profile_photo'));
        // }

        $user->update($request->all());

      Session::flash('success', 'Profile updated successfully!');

    // Redirect to the previous page after a delay
    return redirect()->back()->with('status', 'Profile updated successfully!');

    }
}
