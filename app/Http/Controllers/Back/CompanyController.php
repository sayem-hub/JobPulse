<?php

namespace App\Http\Controllers\Back;

use Exception;
use App\Models\User;
use App\Models\Plugin;
use App\Models\Company;
use App\Models\District;
use App\Models\Division;
use App\Models\Candidate;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\LaravelIgnition\Http\Requests\UpdateConfigRequest;

class CompanyController extends Controller
{

    public function index()
    {
        if (auth()->user()->role == 'company') {
            $user_id = auth()->user()->id;
            $myCompanyList = Company::where('user_id', $user_id)->get();
        } else {
            $myCompanyList = Company::where('is_verified', 1)->get();
        }
        
        return view('company.index', compact('myCompanyList'));
    }

        public function unapprovedCompany()
        {
            $unapprovedCompanies = Company::where('is_verified', 0)->get();
            return view('company.unapproved-company', compact('unapprovedCompanies'));
        }

        public function featuredCompany()
        {
            $featuredCompanies = Company::where('is_featured', 1)->get();
            return view('company.featured-company', compact('featuredCompanies'));
        }

        public function create()
        {
            $districts = District::select('id', 'name')->get();
            $divisions = Division::all();
            return view('company.create', compact('districts', 'divisions'));
        }

        public function store(Request $request)
        {
        
            $validatedData = $request->validate([
                'organization_type' => 'required',
                'company_name' => 'required',
                'company_email' => 'required|email',
                'company_phone' => 'required',
                'company_address' => 'required',
                'district_id' => 'required',
                'division_id' => 'required',
                'company_country' => 'required',
                'establishment_date' => 'required',
                'company_size' => 'required',
                'company_business' => 'required',
                'website' => 'required',
                'vision' => 'nullable',
                'facebook_url' => 'nullable',
                'twitter_url' => 'nullable',
                'linkedin_url' => 'nullable',
            ]);

            try {

                DB::beginTransaction();

            $user = Auth::user();
            $validatedData['user_id'] = $user->id;
            //upload company logo
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/company-logo'), $filename);
                $validatedData['logo'] = $filename;
            }
            Company::create($validatedData);
            Plugin::create([
                'employee_status' => 0,
                'blog_status' => 0,
                'pages_status' => 0,
                'user_id' => $user->id,
            ]);

            DB::commit();

            Alert::success('Success', 'Company created successfully!');
            return redirect()->route(Auth::user()->role.'.dashboard');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            Alert::error('Error', 'Company creation failed!');
            return redirect()->back()->withInput();
        }

    }

    public function edit($id)
    {
        $company = Company::find($id);
        
        $districts = District::select('id', 'name')->get();
        $divisions = Division::all();
        return view('company.edit', compact('company', 'districts', 'divisions'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
    
            $company = Company::find($id);
            $request->validate([
                'logo' => 'image|mimes:jpeg,png|max:2048', // Adjust max size as needed
            ]);
            // // Update company logo
            // if ($request->hasFile('logo')) {
            //     $file = $request->file('logo');
            //     $filename = time() . '.' . $file->getClientOriginalExtension();
            //     $file->move(public_path('uploads/company-logo'), $filename);
    
            //     // Debugging statement
            //     Log::info('Image moved successfully. Filename: ' . $filename);
    
            //     $company->logo = $filename; // Update logo attribute with the filename
    
            //     // Debugging statement
            //     Log::info('Filename assigned to company logo: ' . $company->logo);
            // }
    
            // Update other company details
            $company->update($request->all());

            $company->fill($request->all());
                if ($request->hasFile('logo')) {
                    $file = $request->file('logo');
                    $filename = time() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('uploads/company-logo'), $filename);
                    $company->logo = $filename; // Update logo attribute with the filename
                }

                $company->save();
    
            DB::commit();
    
            Alert::success('Success', 'Company updated successfully!');
            return redirect()->route('company.index');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            Alert::error('Error', 'Company update failed!');
            return redirect()->back()->withInput();
        }
    }
    

    

    public function getApplication()
    {
        $user_id = Auth::user()->id;
        $company = Company::where('user_id', $user_id)->first();

        if (Auth::user()->role == 'company' && $company) {
            
            $applications = Application::with(['candidate.experience', 'candidate.education'])->where('company_id', $company->id)->get();
        } else {
            $applications = Application::with(['candidate.experience', 'candidate.education'])->get();
        }
    //    dd($applications->toArray());
        return view('company.application-received', compact('applications'));
    }


    public function applicationApproval($id)
    {
        $application = Application::find($id);
        return view('company.application-approval', compact('application'));
    
    }


    public function applicationApprovalUpdate(Request $request, $id)
    {
        $application = Application::find($id);

        $application->update([
            'interview_status' => $request->interview_status,
            'interview_date' => $request->interview_date
        ]);

        Alert::success('Success', 'Application updated successfully!');
        return redirect()->back();
    }
}
