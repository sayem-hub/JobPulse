<?php

namespace App\Http\Controllers\Front;

use App\Models\Job;
use App\Models\District;
use App\Models\Application;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class PageController extends Controller
{
    public function index()
    {
        $categories = JobCategory::with('jobs')->select('id', 'name')->limit(8)->get();
        $jobs = Job::where('status', '=', 'published')->with(['company'])->limit(15)->get();
        return view('pages.home', compact('categories', 'jobs'));
    }

    public function jobSearch(Request $request)
    {
        $categories = JobCategory::select('id', 'name')->get();
        $locations = District::select('name')->get();
        $request->validate([
            'query' => 'required|min:3'
        ]);
    
        $search_text = $request->input('query');
        $jobResults = Job::where('status', 'published')
            ->whereHas('company', function ($query) {
                $query->where('is_active', 1);
            })
            ->with(['jobCategory', 'company'])
            ->where(function ($query) use ($search_text) {
                $query->where('job_title', 'LIKE', '%' . $search_text . '%')
                    ->orWhereHas('jobCategory', function ($q) use ($search_text) {
                        $q->where('name', 'LIKE', '%' . $search_text . '%');
                    })
                    ->orWhereHas('company', function ($q) use ($search_text) {
                        $q->where('company_name', 'LIKE', '%' . $search_text . '%');
                    });
            })
            ->paginate(50);
        
        return view('pages.job-search', compact('jobResults', 'categories', 'locations', 'search_text'));
    }
    
    


    public function jobsByCategory()
    {
        $categories = JobCategory::select('id', 'name')->get();
        return view('pages.job-categories', [ 'categories' => $categories]);
    }


    public function applyJob(Request $request, $jobId)
        {
            $user_id = Auth::user()->id;
            
            if (!Auth::user()) {
                Alert::error('Error', 'Please login to apply');
                return redirect()->back();
            }
            
            $candidate = Candidate::where('user_id', $user_id)->first();

            if (!$candidate) {
                Alert::error('Error', 'Please update your profile to apply');
                return redirect()->back();
            }
            
            if (Application::where('candidate_id', $candidate->id)->where('job_id', $jobId)->exists()) {
                Alert::error('Error', 'You have already applied for this job');
                return redirect()->back();
            }

            $request->validate([
                'cover_letter' => 'required',
                'expected_salary' => 'nullable',
            ]);

        try { 

            DB::beginTransaction();
        
            Application::create([
                'job_id' => $jobId,
                'company_id' => $request->company_id,
                'candidate_id' => $candidate->id,
                'cover_letter' => $request->cover_letter,
                'expected_salary' => $request->expected_salary,
            ]);

            //Application count
            $job = Job::find($jobId);
            $job->number_of_applications = $job->number_of_applications + 1;
            $job->save();

            DB::commit();

            Alert::success('Success', 'Application sent successfully');
            return redirect()->back();
        } catch (\Exception $e) {

            DB::rollBack();
            Log::error($e->getMessage());

            Alert::error('Error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function aboutUs()
    {
        return view('pages.about');
    }

    public function contactUs()
    {
        return view('pages.contact');
    }
}
