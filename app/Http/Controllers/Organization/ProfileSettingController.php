<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileSettingController extends Controller
{
    public function update_profile_setting(Request $request) {

        $user = $request->user;

        $validated = $request->validate([
            'email' => 'email|required',
            'org_name' => 'required',
            'ssm' => 'number|required',
            'type' => 'required',
            'desc' => 'nullable',
            'address' => 'nullable',
        ]);

        $user = User::find($user->id);

        $user->update([
            
        ])
        $user->organizer->update([

        ])
    }
}
