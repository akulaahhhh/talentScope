<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            // 'password' => 'required|string|min:8',
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

    public function register_candi(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed',
            // 'password' => 'required|string|min:8|confirmed',
        ]);
        // var_dump($request->username);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create the user
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect to the desired page
        return redirect()->route('talentScope.index')->with('success', 'Registration successful!');
    }





    // Handle the logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('talentScope.login');
    }
}
