<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{

    public function index()
    {
        $myCompanyList = Company::where('user_id', Auth::user()->id)->get();
        return view('company.index', compact('myCompanyList'));
    }
    public function create()
    {

        return view('company.create');
    }

    public function store(Request $request)
    {

        try {
            $validatedData = $request->validate([
                'company_name' => 'required',
                'company_email' => 'required|email',
                'company_phone' => 'required',
                'company_address' => 'required',
                'bio' => 'nullable',
                'company_country' => 'required',
                'industry_type' => 'required',
                'establishment_date' => 'required',
                'company_size' => 'required',
                'website' => 'required',
                'vision' => 'nullable',
                'facebook_url' => 'nullable',
                'twitter_url' => 'nullable',
                'linkedin_url' => 'nullable',
            ]);

            $user = Auth::user();
            $validatedData['user_id'] = $user->id;
            Company::create($validatedData);


            return redirect()->route('dashboard')->with('success', 'Company created successfully!');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors('error', $e->getMessage());
        }

    }

    public function edit($id)
    {
        $company = Company::find($id);
        return view('company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->update($request->all());
        return redirect()->route('company.index')->with('success', 'Company updated successfully!');
    }
}
