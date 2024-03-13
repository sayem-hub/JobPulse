<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Jobs\JobsController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Back\PluginController;
use App\Http\Controllers\Jobs\DegreeController;
use App\Http\Controllers\Back\CompanyController;
use App\Http\Controllers\Jobs\JobTypeController;
use App\Http\Controllers\Back\CandidateController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Jobs\JobsCategoryController;





Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('jobs/search', [PageController::class, 'jobSearch'])->name('jobs.search');
Route::get('/jobs/categories', [PageController::class, 'jobsByCategory'])->name('jobs.categories');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');

//Admin login
Route::get('/admin/login', [AuthController::class, 'adminLoginPage'])->name('admin.login.page'); 
Route::post('/admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');
//Auth Routes
Route::get('/register/employer', [AuthController::class, 'employerRegisterPage'])->name('employer.register.page');
Route::post('/register/employer', [AuthController::class, 'employerRegister'])->name('employer.register');

Route::get('/register/candidate', [AuthController::class, 'candidateRegisterPage'])->name('register.candidate.page');
Route::post('/register/candidate', [AuthController::class, 'candidateRegister'])->name('register.candidate');

Route::get('/login', [AuthController::class, 'loginPage'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('forgot-password', [AuthController::class, 'forgotPasswordForm'])->name('forgot.password.form');
Route::post('forgot-password', [AuthController::class, 'submitForgotPasswordForm'])->name('forgot.password.submit');

Route::get('reset-password/{token}', [AuthController::class, 'resetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');





Route::group(['middleware' => 'auth'], function () {
        //Candidate Dashboard
        Route::prefix('candidate')->middleware(['role:candidate'])->group(function () {
                Route::get('/dashboard', [DashboardController::class, 'candidateDashboard'])->name('candidate.dashboard'); 
                Route::get('/profile-create', [CandidateController::class, 'createProfile'])->name('candidate.profile.create');
                Route::post('/profile-store', [CandidateController::class, 'storeProfile'])->name('candidate.profile.store');
                Route::get('/profile/view/{id}', [CandidateController::class, 'candidateProfileView'])->name('candidate.profile.view');
                Route::get('/profile/edit', [CandidateController::class, 'candidateProfileEdit'])->name('candidate.profile.edit');
                Route::post('/profile/update', [CandidateController::class, 'candidateProfileUpdate'])->name('candidate.profile.update');

                Route::post('/apply-job/{jobId}', [PageController::class, 'applyJob'])->name('job.apply');
                Route::get('/application-list', [CandidateController::class, 'jobApplicationList'])->name('application.index');
        });

        Route::prefix('admin')->middleware(['role:admin'])->group(function () {
                //Admin dashboard
                Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
               
                //Company Unapproved
                Route::get('company-list/unapproved-company', [CompanyController::class, 'unapprovedCompany'])->name('unapproved.company');
                Route::get('company-list/featured-company', [CompanyController::class, 'featuredCompany'])->name('featured.company');

                  //Jobs Category
                Route::get('/jobs-category', [JobsCategoryController::class, 'jobsCategory'])->name('category.index');
                Route::get('jobs-category/create', [JobsCategoryController::class, 'createCategory'])->name('category.create');
                Route::post('jobs-category/store', [JobsCategoryController::class, 'storeCategory'])->name('category.store');
                Route::get('jobs-category/edit/{id}', [JobsCategoryController::class, 'editCategory'])->name('category.edit');
                Route::post('jobs-category/update/{id}', [JobsCategoryController::class, 'updateCategory'])->name('category.update');
                Route::post('jobs-category/delete/{id}', [JobsCategoryController::class, 'deleteCategory'])->name('category.delete');

                //Job Type Route
                Route::get('/job-type', [JobTypeController::class, 'jobType'])->name('type.index');
                Route::get('job-type/create', [JobTypeController::class, 'createType'])->name('type.create');
                Route::post('job-type/store', [JobTypeController::class, 'storeType'])->name('type.store');
                Route::get('job-type/edit/{id}', [JobTypeController::class, 'editType'])->name('type.edit');
                Route::post('job-type/update/{id}', [JobTypeController::class, 'updateType'])->name('type.update');
                Route::post('job-type/delete/{id}', [JobTypeController::class, 'deleteType'])->name('type.delete');

                //Degree Route
                Route::get('/degree', [DegreeController::class, 'degreeIndex'])->name('degree.index');
                Route::get('degree/create', [DegreeController::class, 'createDegree'])->name('degree.create');
                Route::post('degree/store', [DegreeController::class, 'storeDegree'])->name('degree.store');
                Route::get('degree/edit/{id}', [DegreeController::class, 'editDegree'])->name('degree.edit');
                Route::post('degree/update/{id}', [DegreeController::class, 'updateDegree'])->name('degree.update');
                Route::post('degree/delete/{id}', [DegreeController::class, 'deleteDegree'])->name('degree.delete');

               
        });

        
        Route::prefix('company')->middleware(['role:company'])->group(function () {
                
                //Company Dashboard Route
                Route::get('/dashboard', [DashboardController::class, 'companyDashboard'])->name('company.dashboard');
               
               
                Route::get('/dashboard/company-profile/{id}', [DashboardController::class, 'companyProfile'])->name('company.profile');
                Route::get('/application-approval/{id}', [CompanyController::class, 'applicationApproval'])->name('application.approval');
                Route::post('/application-approval/update/{id}', [CompanyController::class, 'applicationApprovalUpdate'])->name('application.approval.update');

                //Jobs Route
                Route::get('jobs/create', [JobsController::class, 'createJob'])->name('jobs.create');
                Route::post('jobs/store', [JobsController::class, 'storeJob'])->name('jobs.store');
                Route::get('jobs/edit/{id}', [JobsController::class, 'editJob'])->name('jobs.edit');
                Route::post('jobs/update/{id}', [JobsController::class, 'updateJob'])->name('jobs.update');

        });
        
        Route::middleware(['role:admin,company'])->group(function () {
                Route::get('/application-received', [CompanyController::class, 'getApplication'])->name('get.application.index');
                Route::get('/company-list', [CompanyController::class, 'index'])->name('company.index');
                Route::get('/dashboard/company/create', [CompanyController::class, 'create'])->name('company.create');
                Route::get('/dashboard/company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
                Route::post('/dashboard/company/store', [CompanyController::class, 'store'])->name('company.store');
                Route::post('/dashboard/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');

                
                
                Route::get('/jobs', [JobsController::class, 'jobsIndex'])->name('jobs.index');
                Route::get('/plugins', [PluginController::class, 'index'])->name('plugin.index');
                Route::post('toggle-status', [PluginController::class, 'toggleStatus'])->name('toggleStatus');
        
        });

        Route::get('/accounts-settings/{id}', [UserController::class, 'accountSettings'])->name('account.setting');
        Route::post('/accounts-settings/{id}/update', [UserController::class, 'accountUpdate'])->name('account.update'); 
        
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});










