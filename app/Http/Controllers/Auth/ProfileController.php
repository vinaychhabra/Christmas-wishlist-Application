<?php
// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add more validation rules for other fields
        ]);

        $user->update($request->all());

        return redirect()->route('edit-profile')->with('success', 'Profile updated successfully!');
    }
}
