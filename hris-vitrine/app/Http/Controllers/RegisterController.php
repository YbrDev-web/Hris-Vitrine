<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'linkedin' => 'nullable|url|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'linkedin' => $validated['linkedin'] ?? null,
            'password' => Hash::make($validated['password']),
        ]);

        auth()->login($user);

        return redirect()->route('home')->with('success', 'Bienvenue sur HRIS PRO CONSULTING !');
    }

}
