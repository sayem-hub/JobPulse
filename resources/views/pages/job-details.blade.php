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
                            <div class="mt-10 space-y-8">
                                <h5 class="text-gray-900 dark:text-gray-50">Related Jobs</h5>

                                <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                    <div class="p-6">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-12 lg:col-span-1">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 lg:col-span-10">
                                                <h5 class="mb-1 text-gray-900 fs-17"><a href="job-details.html" class="dark:text-gray-50">HTML Developer</a> 
                                                    <small class="font-normal text-gray-500 dark:text-gray-300">(0-2 Yrs Exp.)</small>
                                                </h5>
                                                <ul class="flex flex-wrap gap-3 mb-0">
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Creative Agency</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> New York</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="bg-green-500/20 text-green-500 text-11 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                        <span class="bg-yellow-500/20 text-yellow-500 text-11 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                        <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Private</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-6">
                                                <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                    <li><i class="uil uil-tag"></i> Keywords :</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">Ui designer</a>,</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">developer</a></li>
                                                </ul>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                <div class="ltr:lg:text-end rtl:lg:text-start dark:text-gray-50">
                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                        <div class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                    <div class="p-6">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-12 lg:col-span-1">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-10">
                                                <h5 class="mb-1 text-gray-900 fs-17"><a href="job-details.html" class="dark:text-gray-50">Marketing Director</a> 
                                                    <small class="font-normal text-gray-500 dark:text-gray-300">(2-4 Yrs Exp.)</small>
                                                </h5>
                                                <ul class="flex flex-wrap gap-3 mb-0">
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="bg-red-500/20 text-red-500 text-11 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                        <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Private</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-6">
                                                <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                    <li><i class="uil uil-tag"></i> Keywords :</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">Ui designer</a>,</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">developer</a></li>
                                                </ul>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                <div class="ltr:lg:text-end rtl:lg:text-start dark:text-gray-50">
                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                        <div class="w-8 h-8 text-center text-white bg-red-600 rounded">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.9]"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                    <div class="p-6">
                                        <div class="grid grid-cols-12 gap-5">
                                            <div class="col-span-12 lg:col-span-1">
                                                <div class="mb-4 text-center mb-md-0">
                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-10">
                                                <h5 class="mb-1 text-gray-900 fs-17"><a href="job-details.html" class="dark:text-gray-50">HTML Developer</a> 
                                                    <small class="font-normal text-gray-500 dark:text-gray-300">(2-4 Yrs Exp.)</small>
                                                </h5>
                                                <ul class="flex flex-wrap gap-3 mb-0">
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="mdi mdi-map-marker"></i> California</p>
                                                    </li>
                                                    <li>
                                                        <p class="mb-0 text-sm text-gray-500 dark:text-gray-300"><i class="uil uil-wallet"></i> $250 - $800 / month</p>
                                                    </li>
                                                </ul>
                                                <div class="mt-4">
                                                    <div class="flex flex-wrap gap-1.5">
                                                        <span class="bg-violet-500/20 text-violet-500 text-11 px-2 py-0.5 font-medium rounded">Freelance</span>
                                                        <span class="bg-sky-500/20 text-sky-500 text-11 px-2 py-0.5 font-medium rounded">Internship</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12 lg:col-span-6">
                                                <ul class="flex flex-wrap gap-2 text-gray-700 dark:text-gray-50">
                                                    <li><i class="uil uil-tag"></i> Keywords :</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">Ui designer</a>,</li>
                                                    <li><a href="javascript:void(0)" class="text-gray-500 dark:text-gray-50">developer</a></li>
                                                </ul>
                                            </div>
                                            <!--end col-->
                                            <div class="col-span-12 mt-2 lg:col-span-6 lg:mt-0">
                                                <div class="ltr:lg:text-end rtl:lg:text-start dark:text-gray-50">
                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <div class="absolute top-4 ltr:right-4 rtl:left-4">
                                        <div class="w-8 h-8 text-center text-gray-100 transition-all duration-300 bg-transparent border rounded border-gray-100/50 hover:bg-red-600 hover:text-white hover:border-transparent dark:border-zinc-700">
                                            <a href="javascript:void(0)"><i class="uil uil-heart-alt text-lg leading-[1.8]"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="job-list.html" class="font-medium text-gray-900 dark:text-gray-50">View More <i class="mdi mdi-arrow-right"></i></a>
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
                                                    <p class="text-gray-500 dark:text-gray-300">Product Designer</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-star-half-alt icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Experience</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> 0-3 Years</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-location-point icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                    <p class="text-gray-500 dark:text-gray-300"> New york</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-usd-circle icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Offered Salary</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">$35k - $45k</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-graduation-cap icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Qualification</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Bachelor Degree</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-building icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Industry</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Private</p> 
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex mt-6">
                                                <i class="uil uil-history icon group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 h-12 w-12 text-center leading-[2.4] text-xl group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 rounded-full"></i>
                                                <div class="ltr:ml-4 rtl:mr-4">
                                                    <h6 class="mb-2 text-sm text-gray-900 dark:text-gray-50">Date Posted</h6>
                                                    <p class="text-gray-500 dark:text-gray-300">Posted 2 hrs ago</p> 
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="mt-8 space-y-2">
                                        <a href="#applyNow" data-bs-toggle="modal" class="btn w-full group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5">Apply Now <i class="uil uil-arrow-right"></i></a>
                                        <a href="bookmark-jobs.html" class="btn w-full bg-yellow-500/20 border-transparent text-yellow-500 hover:-translate-y-1.5 dark:bg-yellow-500/30"><i class="uil uil-bookmark"></i> Add Bookmark</a>
                                    </div>
                                </div>
                            </div>
                            <div class="border rounded border-gray-100/30 dark:border-neutral-600/80">
                                <div class="p-6">
                                    <div>
                                        <img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid">

                                        <div class="mt-4 text-center">
                                            <h6 class="text-gray-900 text-17 dark:text-gray-50">Jobcy Technology Pvt.Ltd</h6>
                                            <p class="text-gray-500 dark:text-gray-300">Since July 2017</p>
                                        </div>

                                        <ul class="mt-4 space-y-4">
                                            <li>
                                                <div class="flex">
                                                    <i class="text-xl uil uil-phone-volume group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Phone</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">+589 560 56555</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-envelope group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Email</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">pixltechnology@info.com</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-globe group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Website</h6>
                                                        <p class="mb-0 text-gray-500 dark:text-gray-300 fs-14 text-break">www.Jobcytechnology.pvt.ltd.com</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mt-3">
                                                <div class="flex">
                                                    <i class="text-xl uil uil-map-marker group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                                    <div class="ltr:ml-3 rtl:mr-3">
                                                        <h6 class="mb-1 text-sm text-gray-900 dark:text-gray-50">Location</h6>
                                                        <p class="text-sm text-gray-500 dark:text-gray-300">Oakridge Lane Richardson.</p>
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