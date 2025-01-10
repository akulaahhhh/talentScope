<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandiController extends Controller
{
    public function index() {
        return view('main.candidate_dashboard.index');
    }
    public function view_profile_setting() {
        return view('main.candidate_dashboard.profile_setting');
    }
}
