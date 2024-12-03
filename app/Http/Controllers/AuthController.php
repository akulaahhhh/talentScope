<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Check the user credentials
        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['username' => 'The provided credentials are incorrect.']);
        }

        // Log the user in
        Auth::login($user);

        return redirect()->route('talentScope.index');
    }

    // Handle the logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('talentScope.login');
    }
}
