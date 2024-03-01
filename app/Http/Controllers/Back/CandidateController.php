<?php

namespace App\Http\Controllers\Back;

use Exception;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

class CandidateController extends Controller
{
    public function createProfile()
    {
        return view('candidate.create-profile');
    }

    public function storeProfile(Request $request)
    {
        try {
            // dd($request->all());

            $vaildatedData = $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'date_of_birth' => 'required',
                'gender' => 'required',
                'marital_status' => 'required',
                'nationality' => 'required',
                'national_id' => 'required',
                'religion' => 'required',
                'contact_phone' => 'required',
                'contact_email' => 'required',
                'present_address' => 'required',
                'permanent_address' => 'required',
                'present_salary' => 'nullable',
                'expected_salary' => 'nullable',
                'career_objective' => 'required',
                'cv' => 'nullable',
                'image' => 'nullable',

            ]);

            // dd($vaildatedData);

            if ($request->hasFile('cv')) {
                $file = $request->file('cv');
                $filename = $file->getClientOriginalName();
                $file->move('uploads/cv/', $filename);
                $vaildatedData['cv'] = $filename;
            }
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $filename = $file->getClientOriginalName();
                $file->move('uploads/image/', $filename);
                $vaildatedData['image'] = $filename;
            }


            $vaildatedData['user_id'] = auth()->user()->id;

            Candidate::create($vaildatedData);

            $user = User::find(auth()->user()->id);
            $user->is_profile_created = 1;
            $user->save();
        
            Alert::success('Success', 'Profile created successfully!');
            return redirect()->route('candidate.dashboard');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            Alert::error('Error', 'Something went wrong!');
            return redirect()->back();
        }
    }


    public function candidateProfileView($id)
    {
        $authUser = auth()->user();

        if ($authUser->role == 'candidate' && $authUser->is_profile_created == 0) {
            Alert::warning('Warning', 'Please create your profile first!');
            return redirect()->route('candidate.profile.create');
        } else if ($authUser->role == 'candidate' && $authUser->is_profile_created == 1) {
            $profile = Candidate::where('user_id', $authUser->id)->first();
        
            } else {
            $profile = Candidate::find($id);
        }

        return view('candidate.view-profile', compact('profile'));
    }

    public function jobApplicationList()
    {
        $user_id = auth()->user()->id;
        $candidate = Candidate::where('user_id', $user_id)->first();

        if (!$candidate) {
            Alert::warning('Warning', 'Please create your profile first!');
            return redirect()->route('candidate.profile.create');
        }
        $jobApplications = Application::with('job')
                            ->where('candidate_id', $candidate->id)->get();
        // dd($jobApplications);
        return view('candidate.job-application-index', compact('jobApplications'));
    }


}
