<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

        
        Alert::warning('Login Error', 'Invalid admin credentials');
        return redirect()->back();
    }
    

    public function loginPage()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $role = Auth::user()->role;
        switch ($role) {
            case 'company':
                Alert::success('Login Success', 'Welcome Back!');
                return redirect()->intended(route('company.dashboard'));
            case 'candidate':
                Alert::success('Login Success', 'Welcome Back!');
                return redirect()->intended(route('candidate.dashboard'));
            default:
                Auth::logout();
                Alert::warning('Login Error', 'Unauthorized Access');
                return redirect()->route('login.page');
        }
    }

    Alert::error('Login Failed', 'The provided credentials do not match our records.');
    return back();
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

            Alert::success('Registration Success', 'Welcome to the Job Pulse!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            Alert::warning('Registration Failed', 'Please check your credentials!');
            return redirect()->back();
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

    public function forgotPasswordForm()
    {
        return view('auth.forgot-password-form');
    }

    public function submitForgotPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $user = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if($user) {
            Alert::warning('Password reset link already sent', 'Please check your inbox!');
            return redirect()->back();
        }

        $token = Str::random(64); 
        $email = $request->email;
        

        DB::table('password_reset_tokens')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        
        Mail::to($email)->send(new ForgotPasswordMail($email, $token));
        Alert::success('Password Reset Link Sent', 'Please check your inbox!');
        return redirect()->back();
    }


    public function resetPasswordForm($token)
    {
        return view('auth.reset-password-form', compact('token'));
    }

    public function submitResetPasswordForm(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:5|confirmed',
            'password_confirmation' => 'required',
        ]);
        $updatePassword = DB::table('password_reset_tokens')->where([
            'email' => $request->email, 'token' => $request->token
        ])->first();

        if(!$updatePassword){
            Alert::warning('Invalid Token', 'Please try again!');
            return redirect()->back()->withInput();
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();
        Alert::success('Password Reset Success', 'Please login with your new password!');
        return redirect()->route('login.page');

    }



}
