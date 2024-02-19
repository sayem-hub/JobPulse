<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
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
