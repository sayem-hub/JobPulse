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
        $totalJobsApplied = Application::where('user_id', $loggedInUser->id)->count();
        return view('candidate.dashboard', compact('totalJobsApplied'));
    }
}
