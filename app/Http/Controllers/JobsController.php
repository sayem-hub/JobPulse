<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController extends Controller
{
    public function jobsIndex()
    {
        $user = Auth::user();
        $jobs = [];

        // Iterate over each company associated with the user
        foreach ($user->userCompany as $company) {
            // Retrieve the jobs associated with the current company
            $jobs = array_merge($jobs, $company->jobs->toArray());
        }
        return view('jobs.index', compact('jobs'));
    }
}
