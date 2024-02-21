<?php

namespace App\Http\Controllers\Jobs;

use App\Models\Job;
use App\Models\Degree;
use App\Models\Company;
use App\Models\JobType;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class JobsController extends Controller
{
    public function jobsIndex()
    {
        $user_id = auth()->user()->id;
        $jobs = Job::with('company')
            ->whereHas('company', function ($query) use ($user_id) {
                $query->where('user_id', $user_id);
            })->get();
        return view('jobs.index', compact('jobs'));
    }

    public function createJob()
    {
        $loggedInUser = Auth::user();
        $loggedInUserCompanyList = Company::where('user_id', $loggedInUser->id)->get();

        $degreeList = Degree::all();
        $categoryList = JobCategory::all();
        $jobTypeList = JobType::all();
        return view('jobs.create', compact('loggedInUserCompanyList', 'degreeList', 'categoryList', 'jobTypeList'));
    }

    public function storeJob(Request $request)
    {

        try {
            $this->validate($request, [
                'company_id' => 'required',
                'job_category_id' => 'required',
                'job_type_id' => 'required',
                'degree_id' => 'required',
                'job_title' => 'required',
                'job_description' => 'required',
                'vacancy' => 'required',
                'job_location' => 'required',
                'min_salary' => 'required',
                'max_salary' => 'required',
                'deadline' => 'required',
            ]);

            Job::create([
                'company_id' => $request->input('company_id'),
                'job_category_id' => $request->input('job_category_id'),
                'job_type_id' => $request->input('job_type_id'),
                'degree_id' => $request->input('degree_id'),
                'job_title' => $request->input('job_title'),
                'job_description' => $request->input('job_description'),
                'vacancy' => $request->input('vacancy'),
                'job_location' => $request->input('job_location'),
                'min_salary' => $request->input('min_salary'),
                'max_salary' => $request->input('max_salary'),
                'deadline' => $request->input('deadline'),
            ]);

            return redirect()->route('jobs.index')->with('success', 'Job created successfully.');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }

    }

    public function editJob($id)
    {
        $loggedInUser = Auth::user();
        $loggedInUserCompanyList = Company::where('user_id', $loggedInUser->id)->get();
        $job = Job::find($id);
        $degreeList = Degree::all();
        $categoryList = JobCategory::all();
        $jobTypeList = JobType::all();
        return view('jobs.edit', compact('loggedInUserCompanyList', 'job', 'degreeList', 'categoryList', 'jobTypeList'));
    }

    public function updateJob(Request $request, $id)
    {
        try {
            $job = Job::find($id);
            $job->update($request->all());
            return redirect()->route('jobs.index')->with('success', 'Job updated successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors($e->getMessage());
        }

    }
}
