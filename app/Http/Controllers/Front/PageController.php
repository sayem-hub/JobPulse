<?php

namespace App\Http\Controllers\Front;

use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Job;

class PageController extends Controller
{
    public function index()
    {
        $categories = JobCategory::select('id', 'name')->get();
        return view('pages.home', compact('categories'));
    }

    public function jobSearch(Request $request)
    {
        $request->validate(([
            'query' => 'required|min:3'
        ]));

        $search_text = $request->input('query');
        $jobResults = Job::with(['jobCategory', 'company'])
            ->where('job_title', 'LIKE', '%' . $search_text . '%')
            ->orWhereHas('jobCategory', function ($q) use ($search_text) {
                $q->where('name', 'LIKE', '%' . $search_text . '%');
            })
            ->orWhereHas('company', function ($q) use ($search_text) {
                $q->where('company_name', 'LIKE', '%' . $search_text . '%');
            })
            
            ->paginate(50);
        return view('pages.job-search', ['jobResults' => $jobResults])
            ->with('search_text', $search_text);
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
