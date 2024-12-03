<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('main.index');
    }
    public function login() {
        return view('main.login');
    }
    public function register_candi() {
        return view('main.register_candi');
    }
    public function register_org() {
        return view('main.register_org');
    }

    
}
