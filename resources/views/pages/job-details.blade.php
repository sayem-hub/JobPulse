@extends('layouts.frontend.app')
@section('title', 'Job Details')
@section('content')
@include('pages.application-modal')



        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">Job Details</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                        <li><a href="index.html">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">JOB LIST</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Job Details </li>
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

        <!-- Start grid -->
            <section class="py-16">
                <div class="container mx-auto">
                    <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                        <div class="col-span-12 lg:col-span-8">
                            <div class="border rounded-md border-gray-100/30 dark:border-neutral-600/80">
                                <div class="relative">
                                    <img src="{{ asset('assets/images/job-detail.jpg') }}" alt="" class="rounded-md img-fluid mb-7">
                                    <div class="absolute z-20 -bottom-7 left-7">
                                        <img src="{{ asset('assets/images/featured-job/img-10.png') }}" alt="" class="rounded-md img-fluid">
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12 lg:col-span-8">
                                            <div class="relative">
                                                <h5 class="mb-1 text-gray-900 dark:text-gray-50">{{ $job->job_title }}</h5>
                                                <ul class="flex gap-4 text-gray-500 dark:text-gray-300">
                                                    <li>
                                                        <i class="mdi mdi-account"></i> {{ $job->vacancy }} Vacancy
                                                    </li>
                                                    <li class="text-yellow-500">
                                                        <span class="px-2 py-1 text-white bg-yellow-500 rounded text-13">4.8</span> <i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star"></i><i class="align-middle mdi mdi-star-half-full"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-4">
                                            <div class="flex gap-3 md:justify-end">
                                                <div class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded cursor-pointer border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                                    <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                                </div>
                                                <div class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded cursor-pointer border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                                    <a href="javascript:void(0)"><i class="uil uil-setting text-lg leading-[1.8]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-12 mt-8 gap-y-3 lg:gap-3">
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Experience</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">{{ $job->experience_level }}</p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Employee type</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">{{ $job->jobType->name }}</p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Position</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">{{ $job->job_title }}</p>
                                            </div>
                                        </div>
                                        <div class="col-span-12 lg:col-span-3">
                                            <div class="p-4 border rounded border-gray-100/50 dark:border-neutral-600/80">
                                                <p class="mb-1 text-gray-500 dark:text-gray-300 text-13">Offer Salary</p>
                                                <p class="font-medium text-gray-900 dark:text-gray-50">৳{{ $job->salary_range }}/ Month</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Job Description</h5>
                                        <div>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300">{{ $job->responsibilities }}</p>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Responsibilities</h5>
                                        <div>
                                            <p class="mb-3 text-gray-500 dark:text-gray-300">{{ $job->responsibilities }}</p>

                                            <ul class="mb-0 text-gray-500 dark:text-gray-300">
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Have sound knowledge of commercial activities.</li>
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Build next-generation web applications with a focus on the client side</li> 
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Work on multiple projects at once, and consistently meet draft deadlines</li> 
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> have already graduated or are currently in any year of study</li> 
                                                <li class="text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Revise the work of previous designers to create a unified aesthetic for our brand materials</li> 
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Qualification</h5>
                                        <div>
                                            <ul class="mb-0 text-gray-500 dark:text-gray-300">
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i>{{$job->degrees->name}}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <h5 class="mb-3 text-gray-900 dark:text-gray-50">Skill & Experience</h5>
                                        <div>
                                            <ul class="mb-0 text-gray-500 dark:text-gray-300">
                                                <li class="mb-2 text-gray-500 dark:text-gray-300"><i class="mr-2 uil uil-circle"></i> Understanding of key Design Principal</li>
                                               
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">PHP</span>
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">JS</span>
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">Marketing</span>
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">REACT</span>
                                        <span class="px-2 py-1 text-white rounded text-11 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">PHOTOSHOP</span>
                                    </div>

                                    <div class="pt-3 mt-4">
                                        <ul class="flex flex-wrap items-center gap-3 mb-0">
                                            <li class="mt-1 dark:text-gray-50">
                                                Share this job:
                                            </li>
                                            <li class="mt-1">
                                                <a href="javascript:void(0)" class="btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-facebook-f"></i> Facebook</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="javascript:void(0)" class="btn bg-red-600 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-google"></i> Google+</a>
                                            </li>
                                            <li class="mt-1">
                                                <a href="javascript:void(0)" class="btn bg-green-500 border-transparent text-white hover:-translate-y-1.5"><i class="uil uil-linkedin-alt"></i> linkedin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                        <div class="col-span-12 space-y-6 lg:col-span-4">
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <h6 class="text-gray-900 text-17 dark:text-gray-50">Job Overview</h6>

                                    <ul>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-user icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Job Title</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ $job->job_title }}r</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-star-half-alt icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Experience</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> {{ $job->experience_level }}</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-location-point icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ $job->district->name }}, {{ $job->division->division_name }}</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-usd-circle icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Offered Salary</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">৳ {{ $job->salary_range }}</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-graduation-cap icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Qualification</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ $job->requirements }}</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-building icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Industry</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ $job->company->organization_type }}</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-history icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Date Posted</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">{{ \Carbon\Carbon::parse($job->published_at)->diffForHumans() }}</p> 
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="mt-8 space-y-2">
                                        <a href="#applicationModal" class="btn w-full group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5" data-tw-toggle="modal" data-tw-target="#modal-id_form" data-job-id="{{ $job->id }}" data-company-id="{{ $job->company_id }}">Apply Now <i class="uil uil-arrow-right"></i></a>
                                        <a href="bookmark-jobs.html" class="btn w-full bg-yellow-500/20 border-transparent text-yellow-500 hover:-translate-y-1.5 dark:bg-yellow-500/30"><i class="uil uil-bookmark"></i> Add Bookmark</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <div>
                                        <img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid">

                                        <div class="mt-4 text-center">
                                            <h6 class="text-gray-900 text-17 dark:text-gray-50">{{ $job->company->company_name }}</h6>
                                            <p class="text-gray-500 dark:text-gray-300">Since July 2017</p>
                                        </div>

                                        <ul class="mt-4 space-y-4">
                                            <li>
                                                <div class="flex">
                                                    <i class="text-xl uil uil-phone-volume group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Phone</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">{{ $job->company->company_phone }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-envelope group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Email</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">{{ $job->company->company_email }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-globe group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Website</h6>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300 fs-14 text-break">{{ $job->company->website }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-map-marker group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">{{ $job->company->company_address }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="mt-6">
                                            <a href="company-details.html" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500"><i class="mdi mdi-eye"></i> View Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h6 class="mb-3 text-16 dark:text-gray-50">Job location</h6>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.119763973046!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1628067715234!5m2!1sen!2sin" style="width:100%" height="250" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- End grid -->
    
   
@endSection