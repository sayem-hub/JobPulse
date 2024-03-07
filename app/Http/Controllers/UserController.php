<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function accountSettings()
    {
        return view('accounts.accountSettings');
    }

  

    public function accountUpdate(Request $request)
    {
        $user = User::find($request->id);

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:255',
            'current_password' => 'nullable|string|min:5',
            'new_password' => 'nullable|string|min:5',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
   
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;

        if ($request->filled('current_password') && $request->filled('new_password')) {
            if (Hash::check($request->current_password, $user->password)) {
                $user->password = Hash::make($request->new_password);
            } else {
                Alert::warning('Error', 'Current password does not match');
                return redirect()->back();
            }
        }
      
        
        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $filename = time() . '_' . preg_replace('/\s+/', '_', strtolower($file->getClientOriginalName()));
            $file->move(public_path('profile_pictures'), $filename);
            $user->profile_pic = 'profile_pictures/' . $filename;
        }
        // dd($user->profile_pic);
       
        $user->save();
        Alert::success('Success', 'Account updated successfully');
        return redirect()->back();
    }
}
