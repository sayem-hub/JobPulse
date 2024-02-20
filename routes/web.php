<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Back\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;





Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');

Route::get('/register/candidate', [AuthController::class, 'registerCandidate'])->name('register.candidate');
Route::get('/register/employer', [AuthController::class, 'registerEmployer'])->name('register.employer');


Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
