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

    public function candidateDashboard()
    {
        $loggedInUser = Auth::user();
        $last7DaysJobPost = Job::whereDate('created_at', '>=', now()->subDays(7))->count();
        $totalJobsApplied = Application::where('user_id', $loggedInUser->id)->count();
        $totalInterviewCall = Application::where('user_id', $loggedInUser->id)->where('interview_date', '!=', null)->count();
        $lastResumeUpdate = Candidate::where('user_id', $loggedInUser->id)->max('updated_at');
        $lastUpdate = Carbon::parse($lastResumeUpdate)->diffForHumans();
        return view('candidate.dashboard', compact('totalJobsApplied', 'last7DaysJobPost', 'totalInterviewCall', 'lastUpdate'));
    }
}
