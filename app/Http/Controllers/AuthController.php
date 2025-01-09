<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isNull;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
            // 'password' => 'required|string|min:8',
        ]);

        // Check the user credentials
        $user = User::where('email', $request->email)->first();
        if(User::where('email', $request->email)->first())
        {
            $user = User::where('email', $request->email)->first();
        }
        elseif(User::where('username', $request->email)->first())
        {
            $user = User::where('username', $request->email)->first();
        }


        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'The provided credentials are incorrect.']);
        }
        // if(is_null($user->email_varified_at))
        // return redirect()->back(); 


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
            'role' => "CANDIDATES",
        ]);
        // BAWAH NI FUNCTION DIA UNTUK SEND EMAIL
        // event(new Registered($user));
        // Log the user in
        // auth()->login($user);

        // Redirect to the desired page
        // return redirect()->route('talentScope.index')->with('success', 'Registration successful!');
        // return response()->json([
        //     'message' => 'Registration successful. Please verify your email.',
        // ]);
        // return redirect()->route('verification.notice')->with('success', 'Registration successful!. Please verify your email.');
        return redirect()->route('talentScope.login')->with('success', 'Registration successful!.');
    }
    public function register_org(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'username' =>'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed',
            'org_name' => 'required',
            'type' => 'required',
            'ssm' => 'required',
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
            'role' => "ORGANIZER",
        ]);

        Organizer::create([
            'user_id' => $user->id,
            'org_name' => $request->org_name,
            'ssm' => $request->ssm,
            'type' => $request->type,

        ]);

        
        // Log the user in
        // auth()->login($user);

        // Redirect to the desired page
        return redirect()->route('talentScope.login')->with('success', 'Registration successful!');
    }





    // Handle the logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('talentScope.login')->with('success', 'Logout successfull');
    }
}
