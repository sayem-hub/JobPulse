<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            return redirect()->intended(route('dashboard'));
        } else {

            return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect(route('login.page'));
    }



    public function employerRegisterPage()
    {
        return view('auth.employer.register-employer');
    }

    public function employerRegister(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email|unique:users',
                'phone' => 'required',
                'password' => 'required|string|min:5',

            ]);

            // dd($request->all());
            $employer = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'role' => "company",
            ]);

            return ResponseHelper::Out('success', $employer, 200);
        } catch (Exception $e) {
            return ResponseHelper::Out('error', $e, 200);
        }
    }

    public function candidateRegisterPage()
    {
        return view('auth.candidate.register-candidate');
    }

    public function candidateRegister(Request $request)
    {
        try {
            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email|unique:users',
                'phone' => 'required',
                'password' => 'required|string|min:5',

            ]);

            // dd($request->all());
            $candidate = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'role' => "candidate",
            ]);

            return ResponseHelper::Out('success', $candidate, 200);
        } catch (Exception $e) {
            return ResponseHelper::Out('error', $e, 200);
        }
    }

}
