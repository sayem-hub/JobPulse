@extends('layouts.frontend.app')
@section('title', 'Job List-All')
@section('content')
@include('pages.application-modal')
<section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
    <div class="container mx-auto">
        <div class="grid">
            <div class="col-span-12">
                <div class="text-center text-white">
                    <h3 class="mb-4 text-[26px]">Job List</h3>
                    <div class="page-next">
                        <nav class="inline-block" aria-label="breadcrumb text-center">
                            <ol class="flex justify-center text-sm font-medium uppercase">
                                <li><a href="index.html">Home</a></li>
                                <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i> JOB LIST </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="assets/images/about/shape.png" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
    <img src="assets/images/about/shape-dark.png" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
</section>


 <!-- Start team -->
 <section class="py-16">
    <div class="container mx-auto">
        <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
            <div class="col-span-12">
                <div class="job-list-header mb-8">
                    <form action="{{ route('jobs.search') }}" method="GET">
                        <div class="grid grid-cols-12 gap-3">
                            <div class="col-span-12 xl:col-span-3">
                                <div class="relative filler-job-form">
                                    <i class="uil uil-briefcase-alt"></i>
                                    <input type="search" name="query" id="txtSearch" value="{{ request()->input('query') }}" class="w-full filter-job-input-box dark:text-gray-100" id="exampleFormControlInput1" placeholder="Job, company... ">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-span-12 xl:col-span-3">
                                <div class="relative filler-job-form">
                                    <i class="uil uil-clipboard-notes"></i>
                                   
                                    <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                        <option value="">--Select--</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-span-12 xl:col-span-3">
                                <div class="relative filler-job-form">
                                    <i class="uil uil-location-point"></i>
                                    <select class="form-select " data-trigger name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                        <option value="">--Select--</option>
                                        @foreach ($locations as $location )
                                           <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-span-12 xl:col-span-3">
                                <button class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30"><i class="uil uil-filter"></i> Filter</button>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end grid-->
                    </form>
                </div>
                
                <div class="grid grid-cols-12 gap-y-8 lg:gap-8">
                    @foreach ($jobs as $job)
                    <div class="col-span-12 space-y-8 lg:col-span-6">
                        <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                            <div class="p-6">

                                    
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12 lg:col-span-2">
                                        <div class="mb-4 text-center mb-md-0">
                                            <a href="company-details.html"><img src="{{ asset('assets/images/featured-job/img-01.png') }}" alt="" class="md:mx-auto img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-span-12 lg:col-span-10">
                                        <h5 class="mb-1 fs-17"><a href="{{ route('jobs-details', $job->id) }}" class="dark:text-gray-50">{{ $job->job_title }}</a> 
                                            <small class="font-normal text-gray-500 dark:text-gray-300">({{ $job->experience_level }})</small>
                                        </h5>
                                        <ul class="flex flex-wrap mb-0 gap-y-3 lg:gap-3">
                                            <li>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">{{ $job->company->company_name }}</p>
                                            </li>
                                            <li>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i>{{ $job->district->name }} , {{ $job->division->division_name }}</p>
                                            </li>
                                            <li>
                                                <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> ৳{{ $job->salary_range }} / month</p>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <div class="flex flex-wrap gap-1.5">
                                                <span class="bg-green-500/20 text-green-500 text-11 px-2 py-0.5 font-medium rounded">{{ $job->jobType->name }}</span>
                                                <span class="bg-yellow-500/20 text-yellow-500 text-11 px-2 py-0.5 font-medium rounded">{{ $job->priority }}</span>
                                                <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">{{ $job->company->organization_type }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end grid-->
                            </div>
                            <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-6">
                                        <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                            <li><i class="uil uil-tag"></i> Keywords :</li>
                                            <li><a href="javascript:void(0)" class="primary-link text-muted">Ui designer</a>,</li>
                                            <li><a href="javascript:void(0)" class="primary-link text-muted">developer</a></li>
                                        </ul>
                                    </div>
                                    <!--end col-->
                                    <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                        <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                            <a href="#applicationModal" class="py-3 font-medium text-gray-800 dark:text-gray-50 btn-open-modal" data-tw-toggle="modal" data-tw-target="#modal-id_form" data-job-id="{{ $job->id }}" data-company-id="{{ $job->company_id }}">Apply Now<i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                            <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                <div class="w-8 h-8 text-center text-white bg-red-600 rounded">
                                    <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.9]"></i></a>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                    @endforeach
            </div>

                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <ul class="flex justify-center gap-2 mt-8">
                            <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                <a class="cursor-auto" href="javascript:void(0)" tabindex="-1">
                                    <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-white"></i>
                                </a>
                            </li>
                            <li class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                <a class="text-16 leading-[2.8]" href="javascript:void(0)">1</a>
                            </li>
                            <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a class="text-16 leading-[2.8]" href="javascript:void(0)">2</a>
                            </li>
                            <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a class="text-16 leading-[2.8]" href="javascript:void(0)">3</a>
                            </li>
                            <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a class="text-16 leading-[2.8]" href="javascript:void(0)">4</a>
                            </li>
                            <li class="w-12 h-12 text-center text-gray-900 transition-all duration-300 border rounded-full cursor-pointer border-gray-100/50 hover:bg-gray-100/30 focus:bg-gray-100/30 dark:border-gray-100/20 dark:text-gray-50 dark:hover:bg-gray-500/20">
                                <a href="javascript:void(0)" tabindex="-1">
                                    <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End team -->        
@endSection