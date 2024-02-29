<?php

namespace App\Http\Controllers\Back;

use App\Models\Job;
use App\Models\Company;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $totalJobs = Job::count();
        $publishedJobs = Job::where('status', 'published')->count();
        $totalCompanies = Company::count();
        $totalCandidates = Candidate::count();
        $applicationCount = DB::table('applications')->count();
        // $totalUsers = User::count();
        return view('admin.dashboard', compact('totalJobs', 'publishedJobs', 'totalCompanies', 'totalCandidates'));
    }

    public function companyDashboard()
    {
        $loggedInUserId= Auth::user()->id;
        $company = Company::where('user_id', $loggedInUserId)->first();
        $totalJobPost = Job::where('company_id', $company->id)->count();
        
        $activeJobs = Job::where('company_id', $company->id)->where('status', 'published')->count();
        $pendingJobs = Job::where('company_id', $company->id)->where('status', 'pending')->count();
        $expiredJobs = Job::where('company_id', $company->id)->where('status', 'expired')->count();

        $totalApplicationReceived = Job::where('company_id', $company->id)->sum('number_of_applications');

       
        return view('company.dashboard', compact('totalJobPost', 'activeJobs', 'pendingJobs', 'expiredJobs', 'totalApplicationReceived'));
    }

    public function candidateDashboard()
    {
        $loggedInUser = Auth::user();
        $candidate = Candidate::where('user_id', $loggedInUser->id)->first();
        $last7DaysJobPost = Job::whereDate('created_at', '>=', now()->subDays(7))->count();
        $totalJobsApplied = Application::where('candidate_id', $candidate->id)->count();
        $totalInterviewCall = Application::where('candidate_id', $candidate->id)->where('interview_date', '!=', null)->count();
        $lastResumeUpdate = Candidate::where('user_id', $loggedInUser->id)->max('updated_at');
        $lastUpdate = Carbon::parse($lastResumeUpdate)->diffForHumans();
        return view('candidate.dashboard', compact('totalJobsApplied', 'last7DaysJobPost', 'totalInterviewCall', 'lastUpdate'));
    }
}
