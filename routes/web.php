<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\JobsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;





Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');

Route::get('/register/candidate', [AuthController::class, 'candidateRegisterPage'])->name('register.candidate.index');
Route::get('/register/employer', [AuthController::class, 'employerRegisterPage'])->name('register.employer.index');

Route::post('/register/employer', [AuthController::class, 'employerRegister'])->name('register.employer');
Route::get('/login', [AuthController::class, 'loginPage'])->name('login.page');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


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


//Jobs Route
Route::get('/jobs', [JobsController::class, 'jobsIndex'])->name('jobs.index');
Route::get('jobs/create', [JobsController::class, 'createJob'])->name('jobs.create');
Route::post('jobs/store', [JobsController::class, 'storeJob'])->name('jobs.store');
Route::get('jobs/edit/{id}', [JobsController::class, 'editJob'])->name('jobs.edit');
Route::get('jobs/store', [JobsController::class, 'updateJob'])->name('jobs.update');
