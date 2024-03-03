<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
class AuthController extends Controller
{


    public function adminLoginPage()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
        
        $credentials = $request->only('email', 'password');
    // dd($credentials);
        if (Auth::attempt($credentials) && Auth::user()->role == 'admin') {
            $request->session()->regenerate();
            Alert::success('Login Success', 'Welcome Back Admin!');
            return redirect()->intended(route('admin.dashboard'));
        }

        
        return redirect()->route('login.page')->with('error', 'Invalid admin credentials');
    }
    

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::check()) {
            return redirect()->intended(route(Auth::user()->role . '.dashboard'));
            
        } else if (Auth::attempt($credentials)) {
            
            if(Auth::user()->role == 'candidate'){
                Alert::success('Login Success', 'Welcome Back!');
                return redirect()->intended(route('candidate.dashboard'));
            } else if(Auth::user()->role == 'company'){
                Alert::success('Login Success', 'Welcome Back!');
                return redirect()->intended(route('company.dashboard'));
            } else {
                Alert::warning('Login Failed', 'Please check your credentials');
                return redirect()->back();
            }
        }
    }
    
    

    public function logout()
    {
        $redirectRoute = Auth::user()->role === 'admin' ? route('admin.login') : route('login.page');
        Auth::logout();
        return redirect($redirectRoute);
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

            Alert::success('Registration Success', 'Welcome to the Job Pulse!');
            return redirect()->route('login.page');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            Alert::warning('Registration Failed', 'Please check your credentials!');
            return redirect()->back();
        }
    }

}
