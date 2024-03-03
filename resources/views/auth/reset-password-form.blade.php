@extends('layouts.frontend.app')

@section('title', 'Reset Password')

@section('content')

<section class="flex items-center justify-center min-h-screen py-10 group-data-[theme-color=violet]:bg-violet-500/10 group-data-[theme-color=sky]:bg-sky-500/10 group-data-[theme-color=red]:bg-red-500/10 group-data-[theme-color=green]:bg-green-500/10 group-data-[theme-color=pink]:bg-pink-500/10 group-data-[theme-color=blue]:bg-blue-500/10 dark:bg-neutral-700">
    <div class="container mx-auto">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-10 lg:col-start-2">
                <div class="flex flex-col bg-white rounded-lg dark:bg-neutral-800">
                    <div class="grid flex-col grid-cols-12">
                        <div class="col-span-12 lg:col-span-6 ltr:rounded-l-lg rtl:rounded-r-lg">
                            <div class="p-10">
                                
                                <div class="mt-5">
                                    <img src="{{ asset('assets/images/logo-dark_custom.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 rounded-b-md lg:col-span-6 group-data-[theme-color=violet]:bg-violet-700 group-data-[theme-color=sky]:bg-sky-700 group-data-[theme-color=red]:bg-red-700 group-data-[theme-color=green]:bg-green-700 group-data-[theme-color=pink]:bg-pink-700 group-data-[theme-color=blue]:bg-blue-700 lg:rounded-b-none lg:ltr:rounded-r-lg rtl:rounded-l-lg">
                            <div class="flex flex-col justify-center h-full p-12">
                                <div class="text-center">
                                    <h5 class="text-[18.5px] text-white">Reset Password</h5>
                                  
                                </div>
                               
                                <form action="{{ route('reset.password.post') }}" method="POST" class="mt-8">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="mb-5">
                                        <label for="email" class="text-white">Email</label>
                                        <input type="email" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-white/50 text-white" required="" id="email" name="email" placeholder="Enter email">
                                        @if ($errors->has('email'))
                                            <span class="text-red-500">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="mb-5">
                                        <label for="password" class="text-white">Password</label>
                                        <input type="password" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-white/50 text-white" required="" id="password" name="password" placeholder="Enter new password">
                                        @if ($errors->has('password'))
                                            <span class="text-red-500">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-5">
                                        <label for="password_confirmation" class="text-white">Confirm Password</label>
                                        <input type="password" class="w-full mt-1 group-data-[theme-color=violet]:bg-violet-400/40 group-data-[theme-color=sky]:bg-sky-400/40 group-data-[theme-color=red]:bg-red-400/40 group-data-[theme-color=green]:bg-green-400/40 group-data-[theme-color=pink]:bg-pink-400/40 group-data-[theme-color=blue]:bg-blue-400/40 py-2.5 rounded border-transparent placeholder:text-sm placeholder:text-white/50 text-white" required="" id="password_confirmation" name="password_confirmation" placeholder="Enter password again">
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-red-500">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                    <div class="my-5 text-center">
                                        <button type="submit" class="btn w-full bg-white text-gray-900 font-medium border-transparent hover:-translate-y-1.5 duration-500 ease">Reset Password</button></div>
                                </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection