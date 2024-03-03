@extends('layouts.frontend.app')

@section('title', 'Forget Password')

@section('content')

<section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                    <div class="grid flex-col grid-cols-12">
                        <div class="col-span-12 lg:col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                            <div class="p-10">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/images/logo-dark_custom.png') }}" alt="" class="block mx-auto" style="width: 150px; height= 60px">
                                    {{-- <img src="{{ asset('assets/images/logo-dark_custom.png') }}" alt="" class="block mx-auto dark:hidden"> --}}
                                </a>
                                <div class="mt-5">
                                    <img src="{{ asset('assets/images/auth/reset-password.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                            <div class="flex flex-col justify-center h-full p-12">
                                <div class="text-center">
                                    <h5 class="text-[18.5px] text-white">Reset Password</h5>
                                    <p class="mt-3 text-white/80">Reset your password in JobPulse.</p>
                                </div>
                                <div class="px-3 py-5 mt-8 mb-5 text-center text-yellow-800 rounded-md bg-yellow-50" role="alert">  Enter your Email and instructions will be sent to you!  </div>
                                <form action="{{ route('forgot.password.submit') }}" method="POST" class="mt-8">
                                    @csrf
                                    <div class="mb-5">
                                        <label for="email" class="text-white">Your registered Email</label>
                                        <input type="email" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-white/50 text-white" required="" id="email" name="email" placeholder="Enter your email">
                                    </div>
                                    
                                    <div class="my-5 text-center">
                                        <button type="submit" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease">Send Request</button></div>
                                </form>
                                <div class="mt-8 text-center">
                                    <p class="text-white/50">Remembered It ? <a href="{{ route('login.page') }}" class="text-white underline fw-medium"> Go to Login </a></p>
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