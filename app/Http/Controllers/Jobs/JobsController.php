<?php

namespace App\Http\Controllers\Jobs;

use App\Models\Job;
use App\Models\Skill;
use App\Models\Degree;
use App\Models\Company;
use App\Models\JobType;
use App\Models\District;
use App\Models\Division;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JobsController extends Controller
{
    public function jobsIndex()
    {
        if (auth()->user()->role == 'company') {
            
            $user_id = auth()->user()->id;
            $jobs = Job::with('company')
                ->whereHas('company', function ($query) use ($user_id) {
                    $query->where('user_id', $user_id);
                })->get();
        } else {

            $jobs = Job::with('company')->get();
        }

            // dd($jobs);
        return view('jobs.index', compact('jobs'));
    }

    public function createJob()
    {
       
        $user_id = auth()->user()->id;
        $loggedInUserCompanyList = Company::where('user_id', $user_id)->select('id', 'company_name')->get();
        
        $skills = Skill::all();
        $degreeList = Degree::all();
        $categoryList = JobCategory::all();
        $jobTypeList = JobType::all();
        $districts = District::select('id', 'name')->get();
        $divisions = Division::all();
        return view('jobs.create', compact('loggedInUserCompanyList', 'degreeList', 'categoryList', 'jobTypeList', 'skills', 'districts', 'divisions'));
    }

    public function storeJob(Request $request)
    {

        try {

            $this->validate($request, [
                'company_id' => 'required',
                'job_category_id' => 'required',
                'job_type_id' => 'required',
                'degree_id' => 'nullable',
                'job_title' => 'required',
                'experience_level' => 'nullable',
                'requirements' => 'nullable',
                'responsibilities' => 'required',
                'vacancy' => 'required',
                'work_place' => 'required',
                'district_id' => 'required',
                'division_id' => 'required',
                'salary_range' => 'nullable',
                'salary_review' => 'required',
                'festival_bonus' => 'required',
                'age_range' => 'required',
                'gender' => 'required',
                'deadline' => 'required',
                'priority' => 'nullable',
                'is_featured' => 'nullable',
            ]);

            $data = [
                'company_id' => $request->input('company_id'),
                'job_category_id' => $request->input('job_category_id'),
                'job_type_id' => $request->input('job_type_id'),
                'degree_id' => $request->input('degree_id'),
                'job_title' => $request->input('job_title'),
                'experience_level' => $request->input('experience_level'),
                'requirements' => $request->input('requirements'),
                'responsibilities' => json_encode(json_decode($request->responsibilities[0])),
                'vacancy' => $request->input('vacancy'),
                'work_place' => $request->input('work_place'),
                'district_id' => $request->input('district_id'),
                'division_id' => $request->input('division_id'),
                'salary_range' => $request->input('salary_range'),
                'salary_review' => $request->input('salary_review'),
                'festival_bonus' => $request->input('festival_bonus'),
                'age_range' => $request->input('age_range'),
                'gender' => $request->input('gender'),
                'deadline' => $request->input('deadline'),
                'priority' => $request->input('priority'),
                'is_featured' => $request->input('is_featured'),
            ];

            $user_id = auth()->user()->id;
            $data['created_by'] = $user_id;

            DB::beginTransaction();

            Job::create($data);
            
            foreach ($request->input('skills') as $skill) {
                $job = Job::latest()->first();
                $job->skills()->attach($skill);
            }
            
            DB::commit();

            Alert::success('Success', 'Job created successfully!');
            return redirect()->route('jobs.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            Alert::warning('Error', 'Job creation failed! Try again.');
            return redirect()->back()->withInput();

        }

    }

    public function editJob($id)
    {
        if (auth()->user()->role == 'company') {
            $user_id = auth()->user()->id;
            $loggedInUserCompanyList = Company::where('user_id', $user_id)->select('id', 'company_name')->get();
        } else {
            $loggedInUserCompanyList = Company::select('id', 'company_name')->get();
        }
       
        $job = Job::with('skills')->findOrFail($id);
        $existingResponsibilities = json_decode($job->responsibilities);
        $degreeList = Degree::all();
        $categoryList = JobCategory::all();
        $jobTypeList = JobType::all();
        $skills = Skill::all();
        $districts = District::select('id', 'name')->get();
        $divisions = Division::all();
        return view('jobs.edit', compact('loggedInUserCompanyList', 'job', 'existingResponsibilities', 'degreeList', 'categoryList', 'jobTypeList', 'skills', 'districts', 'divisions', ));
    }

    public function updateJob(Request $request, $id)
    {
        try {

            $this->validate($request, [
                'company_id' => 'required',
                'job_category_id' => 'required',
                'job_type_id' => 'required',
                'degree_id' => 'nullable',
                'job_title' => 'required',
                'experience_level' => 'nullable',
                'requirements' => 'nullable',
                'responsibilities' => 'required',
                'vacancy' => 'required',
                'work_place' => 'required',
                'district_id' => 'required',
                'division_id' => 'required',
                'salary_range' => 'nullable',
                'salary_review' => 'required',
                'festival_bonus' => 'required',
                'age_range' => 'required',
                'gender' => 'required',
                'deadline' => 'required',
                'priority' => 'nullable',
                'is_featured' => 'nullable',
                'status' => 'nullable',
            ]);

            $data = [
                'company_id' => $request->input('company_id'),
                'job_category_id' => $request->input('job_category_id'),
                'job_type_id' => $request->input('job_type_id'),
                'degree_id' => $request->input('degree_id'),
                'job_title' => $request->input('job_title'),
                'experience_level' => $request->input('experience_level'),
                'requirements' => $request->input('requirements'),
                'responsibilities' => $request->responsibilities,
                'vacancy' => $request->input('vacancy'),
                'work_place' => $request->input('work_place'),
                'district_id' => $request->input('district_id'),
                'division_id' => $request->input('division_id'),
                'salary_range' => $request->input('salary_range'),
                'salary_review' => $request->input('salary_review'),
                'festival_bonus' => $request->input('festival_bonus'),
                'age_range' => $request->input('age_range'),
                'gender' => $request->input('gender'),
                'deadline' => $request->input('deadline'),
                'priority' => $request->input('priority'),
                'is_featured' => $request->input('is_featured'),
               
            ];

            if (Auth::user()->role == 'company') {
                $data['status'] = 'pending';
            } else {
                $data['status'] = $request->input('status');
            }

         if ($request->has('status') && $request->input('status') == 'published') {
             $data['published_at'] = now();
         }
         
            $job = Job::findOrFail($id);

            DB::beginTransaction();
            $job->skills()->detach();

            if ($request->has('skills')) {
                foreach ($request->input('skills') as $skill) {
                    $job->skills()->attach($skill);
                }
            }

            $user_id = auth()->user()->id;
            $data['updated_by'] = $user_id;

            // dd($data);
            $job->update($data);

            DB::commit();

            Alert::success('Success', 'Job updated successfully!');
            return redirect()->route('jobs.index');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            Alert::warning('Error', 'Job update failed! Try again.');
            return redirect()->back()->withInput();
        }

    }
}
