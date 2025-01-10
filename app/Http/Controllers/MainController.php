<?php

namespace App\Http\Controllers;

use App\Models\OrgType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('main.index', compact('user'));
    }
    public function login() {
        return view('main.login');
    }
    public function register_candi() {
        return view('main.register_candi');
    }
    public function register_org() {
        return view('main.register_org',['org_types'=> OrgType::TYPES]);
    }
    

    
}
