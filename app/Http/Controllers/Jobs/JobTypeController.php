<?php

namespace App\Http\Controllers\Jobs;

use App\Models\JobType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobTypeController extends Controller
{
    public function jobType()
    {
        $jobTypes = JobType::all();
        return view('admin.job-type.index', compact('jobTypes'));
    }


    public function createType()
    {
        return view('admin.job-type.create');
    }


    public function storeType(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        JobType::create($validatedData);
        return redirect()->route('type.index')->with('success', 'Job type created successfully');
    }


    public function editType($id)
    {
        $jobType = JobType::findOrFail($id);
        return view('admin.job-type.edit', compact('jobType'));
    }


    public function updateType(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $jobType = JobType::findOrFail($id);
        $jobType->update($validatedData);
        return redirect()->route('type.index')->with('success', 'Job type updated successfully');
    }


    public function deleteType($id)
    {
        $jobType = JobType::findOrFail($id);
        $jobType->delete();
        return redirect()->route('type.index')->with('success', 'Job type deleted successfully');
    }
}
