<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrgController extends Controller
{
    public function index() {
        return view('main.organizer_dashboard.index');
    }
    public function view_upload_event() {
        return view('main.organizer_dashboard.upload_event');
    }
    public function view_profile_setting() {
        return view('main.organizer_dashboard.profile_setting');
    }
    public function form_template() {
        return view('main.organizer_dashboard.form_template');
    }
}
