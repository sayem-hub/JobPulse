<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function registerCandidate()
    {
        return view('auth.register-candidate');
    }

    public function registerEmployer()
    {
        return view('auth.register-employer');
    }
}
