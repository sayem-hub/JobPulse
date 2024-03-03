@extends('layouts.frontend.app')
@section('title', 'Login')
@section('content')
<section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                    <div class="grid flex-col grid-cols-12 ">
                        <div class="col-span-12 lg:col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                            <div class="p-10">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" class="hidden mx-auto dark:block">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" class="block mx-auto dark:hidden">
                                </a>
                                <div class="mt-5">
                                    <img src="{{ asset('assets/images/auth/sign-in.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                            <div class="flex flex-col justify-center h-full p-12">
                                <div class="text-center">
                                    <h5 class="text-[18.5px] text-white">Welcome Back !</h5>
                                    <p class="mt-3 text-white/80">Sign in to continue to JobPulse.</p>
                                </div>


                                <form id="loginForm" class="mt-8" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-5">
                                        <label for="email" class="text-white">Email</label>
                                        <input type="email" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" required="" id="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-5">
                                        <label for="password" class="text-white">Password</label>
                                        <input type="password" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="password" name="password" placeholder="Enter your password">
                                    </div>
                                    <div ><input class="align-middle border-transparent rounded focus:ring-0 focus:ring-offset-0 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500" type="checkbox" id="flexCheckDefault">
                                        <a href="{{ route('forgot.password.form') }}" class="text-white ltr:float-right rtl:float-left">Forgot Password?</a>
                                        <label class="text-white align-middle" for="flexCheckDefault">Remember me</label>
                                    </div>
                                    <div class="my-8 text-center">
                                        <button type="submit" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease">Sign In
                                    </button></div>
                                </form>
                                <div class="text-center">
                                    <p class="text-white">Don't yet member? 
                                        <div class="relative dropdown">
                                            <button class="px-4 dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <span class="font-medium text-white text-13 dark:text-gray-50"><i class="uil uil-lock ltr:mr-1 rtl:ml-1"></i>Sign Up</span>
                                            </button>
                                            <ul class="absolute top-auto z-50 hidden w-48 p-3 list-none bg-white border rounded shadow-lg dropdown-menu border-gray-500/20 xl:ltr:-left-3 ltr:-left-32 rtl:-right-3 dark:bg-neutral-800" id="profile/log" aria-labelledby="navNotifications">
                                                <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                                    <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{ route('register.candidate.page') }}">As Candidate</a>
                                                </li>
                                                <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                                    <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{ route('employer.register.page') }}">As Employer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection