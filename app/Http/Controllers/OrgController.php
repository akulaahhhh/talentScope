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
}
