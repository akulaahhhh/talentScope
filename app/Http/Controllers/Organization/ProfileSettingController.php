<?php

namespace App\Http\Controllers\Organization;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileSettingController extends Controller
{
    public function update_profile_setting(Request $request)
    {

        $user = $request->user;

        $validated = $request->validate([
            'email' => 'email|required',
            'org_name' => 'required',
            'ssm' => 'numeric|required',
            'type' => 'required',
            'desc' => 'nullable',
            'address' => 'nullable',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // Validation for avatar
        ]);

        $user = User::find($user->id);

        // If a file is uploaded, set it as the user's avatar
        if ($request->hasFile('avatar')) {
            // This will automatically trigger the setAvatarAttribute method in USer Model
            $user->upload_avatar = $request->file('avatar');
        }

        $user->update([
            'email' => $validated['email']
        ]);
        $user->organizer->update([
            'org_name' => $validated['org_name'],
            'ssm' => $validated['ssm'],
            'type' => $validated['type'],
            'description' => $validated['desc'],
            'address' => $validated['address']
        ]);
        return redirect()
            ->route('talentScope.organizer_dashboard.view_profile_setting')
            ->with('success', 'Profile setting saved succesfully.');
    }
    public function update_password_org(Request $request)
    {

        $user = $request->user;

        $validated = $request->validate([
            'password' => 'confirmed',
        ]);

        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()
            ->route('talentScope.organizer_dashboard.view_profile_setting')
            ->with('success', 'Password changed succesfully.');
    }
}
