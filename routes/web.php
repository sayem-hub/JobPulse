<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Back\CandidateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Back\CompanyController;
use App\Http\Controllers\Jobs\JobsController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Jobs\DegreeController;
use App\Http\Controllers\Jobs\JobTypeController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Jobs\JobsCategoryController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;





Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('jobs/search', [PageController::class, 'jobSearch'])->name('jobs.search');
Route::get('/jobs/categories', [PageController::class, 'jobsByCategory'])->name('jobs.categories');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');

//Auth Routes

Route::get('/register/employer', [AuthController::class, 'employerRegisterPage'])->name('employer.register.page');
Route::post('/register/employer', [AuthController::class, 'employerRegister'])->name('employer.register');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login.page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register/candidate', [AuthController::class, 'candidateRegisterPage'])->name('register.candidate.page');
Route::post('/register/candidate', [AuthController::class, 'candidateRegister'])->name('register.candidate');




Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/profile/{id}', [UserController::class, 'profile'])->name('user.profile');
Route::get('/dashboard/profile/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/dashboard/profile/{id}/update', [UserController::class, 'update'])->name('profile.update');

Route::get('/dashboard/my-company', [CompanyController::class, 'index'])->name('company.index');
Route::get('/dashboard/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::get('/dashboard/company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
Route::post('/dashboard/company/store', [CompanyController::class, 'store'])->name('company.store');

Route::post('/dashboard/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');
Route::get('/dashboard/company-profile/{id}', [DashboardController::class, 'companyProfile'])->name('company.profile');

// Route::group(['middleware' => 'role:candidate'], function () {
Route::get('/candidate/dashboard', [DashboardController::class, 'candidateDashboard'])->name('candidate.dashboard');
Route::get('/candidate/resume-create', [CandidateController::class, 'createResume'])->name('candidate.resume.create');
Route::post('/candidate/resume-store', [CandidateController::class, 'storeResume'])->name('candidate.resume.store');
Route::get('/candidate/resume/view/{id}', [CandidateController::class, 'candidateResumeView'])->name('candidate.resume.view');
Route::get('/candidate/resume/edit', [CandidateController::class, 'candidateResumeEdit'])->name('candidate.resume.edit');
Route::post('/candidate/resume/update', [CandidateController::class, 'candidateResumeUpdate'])->name('candidate.resume.update');

Route::post('apply-job/{jobId}', [PageController::class, 'applyJob'])->name('job.apply');

Route::get('/candidate/application-list', [CandidateController::class, 'jobApplicationList'])->name('application.index');

// });


//Jobs Route
Route::get('/jobs', [JobsController::class, 'jobsIndex'])->name('jobs.index');
Route::get('jobs/create', [JobsController::class, 'createJob'])->name('jobs.create');
Route::post('jobs/store', [JobsController::class, 'storeJob'])->name('jobs.store');
Route::get('jobs/edit/{id}', [JobsController::class, 'editJob'])->name('jobs.edit');
Route::post('jobs/update/{id}', [JobsController::class, 'updateJob'])->name('jobs.update');

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