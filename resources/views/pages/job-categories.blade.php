@extends('layouts.frontend.app')
@section('title', 'Job Search')
@section('content')


<section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
    <div class="container mx-auto">
        <div class="grid">
            <div class="col-span-12">
                <div class="text-center text-white">
                    <h3 class="mb-4 text-[26px]">Jobs Categories</h3>
                    <div class="page-next">
                        <nav class="inline-block" aria-label="breadcrumb text-center">
                            <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                <li><a href="index.html">Home</a></li>
                                <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Company</a></li>
                                <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Jobs Categories </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/about/shape.png') }}" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
    <img src="{{ asset('assets/images/about/shape-dark.png') }}" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
</section>


<section class="py-20">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
            <div class="col-span-12 lg:col-span-6 lg:col-start-4">
               <div class="mb-5 text-center">
                    <p class="inline px-2 py-1 text-sm font-medium text-white bg-yellow-500 rounded">Jobs Live Today</p>
                    <h4 class="mt-2 text-gray-900 text-22 dark:text-white">Browse Job By Categories</h4>
                    <p class="mt-2 text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-y-5 md:gap-8">
            <div class="col-span-12 md:col-span-6 xl:col-span-4">
                <div class="mt-10 rounded bg-gray-50 dark:bg-neutral-700">

                    <div class="p-6">
                        <ul class="space-y-4">
                            @foreach ($categories as $catogory)  
                            <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                <a href="job-list.html" class="text-gray-900 dark:text-white">{{ $catogory->name }} <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">{{ $catogory->jobs->count() }}</span></a>
                            </li>
                            @endforeach
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 xl:col-span-4">
                <div class="mt-10 rounded bg-gray-50 dark:bg-neutral-700">
                    <div class="p-6">
                        <ul class="space-y-4">
                            @foreach ($categories as $catogory)  
                            <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                <a href="job-list.html" class="text-gray-900 dark:text-white">{{ $catogory->name }} <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">{{ $catogory->jobs->count() }}</span></a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-span-12 md:col-span-6 xl:col-span-4">
                <div class="mt-10 rounded bg-gray-50 dark:bg-neutral-700">
                    <div class="p-6">
                        <ul class="space-y-4">
                            @foreach ($categories as $catogory)  
                            <li class="px-4 py-2 bg-white rounded dark:bg-neutral-600">
                                <a href="job-list.html" class="text-gray-900 dark:text-white">{{ $catogory->name }} <span class="px-2 py-1 rounded bg-sky-500/20 text-11 text-sky-500 ltr:float-right rtl:float-left">{{ $catogory->jobs->count() }}</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection