@extends('layouts.frontend.app')

@section('title', 'Register as Candidate')
@section('content')

<section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                    <div class="grid flex-col grid-cols-12">
                        <div class="col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                            <div class="p-10">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo-light_e.png') }}" alt="" class="hidden mx-auto dark:block">
                                    <img src="{{ asset('assets/images/logo-dark_e.png') }}" alt="" class="block mx-auto dark:hidden">
                                </a>
                                <div class="mt-5">
                                    <img src="{{ asset('assets/images/auth/sign-up.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                            <div class="flex flex-col justify-center h-full p-12">
                                <div class="text-center">
                                    <h5 class="text-[18.5px] text-white">Let's Get Started</h5>
                                    <p class="mt-3 text-gray-50">Sign Up as a Candidate and get access to all the features of JobPulse</p>
                                </div>

                                <form action="{{ route('register.candidate') }}" method="POST" id="candidateRegister" class="mt-8">
                                    @csrf
                                    <div class="mb-5">
                                        <label for="first_name" class="text-white">First Name</label>
                                        <input type="text" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="first_name" name="first_name" required   placeholder="Enter your first name">
                                    </div>

                                    <div class="mb-5">
                                        <label for="last_name" class="text-white">Last Name</label>
                                        <input type="text" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="last_name" name="last_name" required placeholder="Enter your last name">
                                    </div>

                                    <div class="mb-5">
                                        <label for="email" class="text-white">Email</label>
                                        <input type="email" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="email" name="email" required  placeholder="Enter your email">
                                    </div>

                                    <div class="mb-5">
                                        <label for="phone" class="text-white">Phone</label>
                                        <input type="text" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="phone" name="phone" required  placeholder="Enter your phone">
                                    </div>
                                    <div class="mb-5">
                                        <label for="password" class="text-white">Password</label>
                                        <input type="password" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-gray-50 text-white" id="password" name="password" placeholder="Enter your password" required>
                                    </div>
                                    <div class="mb-4">
                                        <div><input class="align-middle border-transparent rounded focus:ring-0 focus:ring-offset-0 group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500" type="checkbox" id="flexCheckDefault">
                                            <label class="text-white align-middle" for="flexCheckDefault">I agree to the <a href="javascript:void(0)" class="pb-1 text-white underline align-middle">Terms and conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="my-5 text-center">
                                        <button type="submit" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease">Sign Up
                                    </button></div>
                                </form>
                                <div class="text-center">
                                    <p class="text-white">Already a member ? <a href="{{ route('login.page') }}" class="text-white underline fw-medium"> Sign In </a></p>
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
