 @extends('layouts.frontend.app')

 @section('title', 'Home Page')
 @section('content')
 @include('pages.application-modal')
 <!-- start home -->
 <section class="relative bg-opacity-10 py-28 dark:bg-violet-900 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20">
    <div class="container mx-auto">
        <div class="grid items-center grid-cols-12 rtl:gap-10">
            <div class="col-span-12 lg:col-span-7">
                <div class="mb-3 ltr:mr-14 rtl:ml-14">
                    <h6 class="mb-3 text-sm text-gray-900 uppercase dark:text-gray-50">We have 150,000+ live jobs</h6>
                    <h1 class="mb-3 text-5xl font-semibold leading-tight text-gray-900 dark:text-gray-50">Find your dream jobs <br> with <span class="font-bold group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Job Pulse</span></h1>
                    <p class="text-lg font-light text-gray-500 whitespace-pre-line dark:text-gray-300">Find jobs, create trackable resumes and enrich your
                            applications. Carefully crafted after analyzing the needs of different 
                            industries.</p>
                </div>
                <form action="{{ route('jobs.search') }}" method="GET">
                    <div class="registration-form">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 xl:col-span-4">
                                <div class="mt-3 rounded-l filter-search-form filter-border mt-md-0">
                                    <i class="uil uil-briefcase-alt"></i>
                                    <input type="search" name="query" id="txtSearch" value="{{ request()->input('query') }}" class="w-full filter-input-box placeholder:text-gray-100 placeholder:text-13 dark:text-gray-100" placeholder="Job title, Company name...">
                                </div>
                            </div><!--end col-->
                            <div class="col-span-12 xl:col-span-4">
                                <div class="mt-3 filter-search-form mt-md-0">
                                    <i class="fa-solid fa-list"></i>
                                    <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                        <option value="">Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    
                                    </select>
                                </div>
                            </div><!--end col-->
                            <div class="col-span-12 xl:col-span-4">
                                <div class="h-full mt-3">
                                    <button class="btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border rounded-lg border-transparent ltr:xl:rounded-l-none rtl:xl:rounded-r-none w-full py-[18px] text-white" type="submit"><i class="uil uil-search me-1"></i> Find Job</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </form>
            </div>
            <div class="col-span-5">
                <div class="mt-5">
                    <img src="{{ asset('assets/images/process-02.png') }}" alt="" class="mb-5 home-img max-w-none"> 
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('assets/images/bg-shape.png') }}" alt="" class="absolute block -bottom-5 dark:hidden">
    <img src="{{ asset('assets/images/bg-shape-dark.png') }}" alt="" class="absolute hidden -bottom-5 dark:block">
</section>
<!-- end home -->


                <!-- start category -->
                <section class="py-20 dark:bg-neutral-800">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-1 gap-5">
                            <div class="text-center">
                                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Browse Jobs Categories</h3>
                                <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Click the right category to match you.</p>
                            </div>
                        </div>


                        <div class="grid grid-cols-12 gap-5">

                        @foreach ($categories as $category)
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-layers-alt"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">{{ $category->name }}</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">{{ $category->jobs->count()}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="grid grid-cols-1">
                            <div class="mt-5 text-center">
                                <a href="{{ route('jobs.categories') }}" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Browse All Categories <i class="uil uil-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- end category -->

            <!-- start job list -->
                <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-1 gap-5">
                            <div class="mb-5 text-center">
                                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">New & Random Jobs</h3>
                                <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                            </div>
                        </div>
                        <div class="nav-tabs chart-tabpill">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                                    <div class="p-1.5 bg-white dark:bg-neutral-900 shadow-lg shadow-gray-100/30 rounded-lg dark:shadow-neutral-700">
                                        <ul class="items-center text-sm font-medium text-center text-gray-700 nav md:flex">
                                            <li class="w-full">
                                                <a href="#" data-job-type="all-job" class="job-tab inline-block w-full py-[12px] px-[18px] dark:text-gray-50 active" aria-current="page">All Jobs</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" data-job-type="recent-job" class="job-tab inline-block w-full py-[12px] px-[18px] dark:text-gray-50" aria-current="page">Recent Jobs</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" data-job-type="featured-jobs" class="job-tab inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Featured Jobs</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" data-job-type="part-time" class="job-tab inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Part Time</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="#" data-job-type="full-time" class="job-tab inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Full Time</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="job-tabs">
                               

                                <div class="tab-content">
                                    <div class="block w-full tab-pane" id="recent-job">
                                        <div class="pt-8 ">

                                @foreach ($jobs as $job)
                                <div class="space-y-8">
                                    <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                        @if ($job->is_featured == 1)
                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                        </div>
                                        @endif
                                            <div class="p-4">
                                                <div class="grid items-center grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="mb-4 text-center mb-md-0">
                                                            <a href="company-details.html"><img src="assets/images/featured-job/img-01.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 mb-md-0">
                                                            <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">{{ $job->job_title }}</a>
                                                            </h5>
                                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{ $job->company->company_name }}</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-3">
                                                        <div class="mb-2 lg:flex">
                                                            <div class="flex-shrink-0">
                                                                <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                            </div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">{{ $job->district->name }} , {{ $job->division->division_name }}</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div>
                                                            <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">৳</span>{{ $job->salary_range }}/m</p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-2">
                                                        <div class="flex flex-wrap gap-1.5">
                                                            <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">{{$job->jobType->name}}</span>
                                                            <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">{{ $job->company->organization_type }}</span>
                                                            <span class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">{{ $job->priority }}</span>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>

                                        
                                            <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 lg:col-span-4">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300">
                                                                <span class="text-gray-900 dark:text-gray-50">Experience :</span> 
                                                            {{$job->experience_level}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-span-12 lg:col-span-6">
                                                        <div>
                                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Requirement :</span>
                                                                {{ $job->requirements }} </p>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                        <div class="col-span-3 lg:col-span-2">
                                                            <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                                                <a href="#applicationModal" class="py-3 font-medium text-gray-800 dark:text-gray-50 btn-open-modal" data-tw-toggle="modal" data-tw-target="#modal-id_form" data-job-id="{{ $job->id }}" data-company-id="{{ $job->company_id }}">Apply Now<i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="grid grid-cols-1">
                                    <div class="text-center">
                                        <a href="{{ route('job.list') }}" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">View More  <i class="uil uil-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                </div>
                                
             </div>                  


                       
                    </div>
                </section>
            <!-- end job list -->

            <!-- start process -->
                <section class="py-20 dark:bg-neutral-800">
                    <div class="container mx-auto">
                        <div class="nav-tabs round-pill">
                            <div class="grid items-center grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-6">
                                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">How It Work</h3>
                                    <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the
                                        right freelancers.</p>

                                    <div class="mt-5">
                                        <ul class="text-gray-700 nav">
                                            <li class="w-full mb-[22px]">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-home-tab" class="relative inline-block w-full p-2 active group/active" aria-current="page">
                                                <div class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                                    <div class="flex">
                                                        <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:group-[.active]:bg-sky-500 group-data-[theme-color=red]:group-[.active]:bg-red-500 group-data-[theme-color=green]:group-[.active]:bg-green-500 group-data-[theme-color=pink]:group-[.active]:bg-pink-500 group-data-[theme-color=blue]:group-[.active]:bg-blue-500">
                                                            <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">1</span>
                                                        </div>
                                                        <div class="grow ltr:ml-4 rtl:mr-4">
                                                            <h5 class="fs-18 text-gray-900 group-data-[theme-color=violet]:group-[.active]:text-violet-500 group-data-[theme-color=sky]:group-[.active]:text-sky-500 dark:text-gray-50">Register an account</h5>
                                                            <p class="mt-1 mb-2 text-gray-500 dark:text-gray-300">Due to its widespread use as filler text for layouts, non-readability
                                                            is of great importance.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="w-full mb-[22px]">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-profile" class="relative inline-block w-full p-2 group" aria-current="page">
                                                <div class="after:content-[''] after:h-[65px] after:border after:border-dashed after:border-gray-100 after:absolute ltr:after:left-7 rtl:after:right-7 after:-bottom-5 after:group-[.active]:bg-violet-300 hidden md:block"></div>
                                                    <div class="flex">
                                                        <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                            <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">2</span>
                                                        </div>
                                                        <div class="grow ltr:ml-4 rtl:mr-4">
                                                            <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">Find your job</h5>
                                                            <p class="mt-1 mb-2 text-gray-500">There are many variations of passages of avaibookmark-label, but the majority
                                                            alteration in some form.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="w-full mb-[22px]">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="v-pills-messages" class="relative inline-block w-full p-2 group" aria-current="page">
                                                    <div class="flex">
                                                        <div class="shrink-0 h-10 w-10 rounded-full text-center bg-gray-500/20 group-[.active]:bg-violet-500">
                                                            <span class="text-gray-900 group-[.active]:text-white text-16 leading-[2.5] dark:text-gray-50">3</span>
                                                        </div>
                                                        <div class="grow ltr:ml-4 rtl:mr-4">
                                                            <h5 class="fs-18 text-gray-900 group-[.active]:text-violet-500 dark:text-gray-50">Apply for job</h5>
                                                            <p class="mt-1 mb-2 text-gray-500">It is a long established fact that a reader will be distracted by the
                                                            readable content of a page.</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <div class="col-span-12 lg:col-span-6">
                                    <div class="tab-content">
                                        <div class="block tab-pane" id="v-pills-home-tab">
                                            <img src="assets/images/process-01.png" alt="" class="max-w-full">
                                        </div>
                                        <div class="hidden tab-pane" id="v-pills-profile">
                                            <img src="assets/images/process-02.png" alt="" class="max-w-full">
                                        </div>
                                        <div class="hidden tab-pane" id="v-pills-messages">
                                            <img src="assets/images/process-03.png" alt="" class="max-w-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- end process -->

            <!-- start cta -->
                <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                    <div class="container mx-auto">
                        <div class="nav-tabs round-pill">
                            <div class="grid items-center grid-cols-12 gap-5">
                                <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                                    <div class="text-center">
                                        <h2 class="mb-5 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Browse Our <span class="text-yellow-500 fw-bold">5,000+</span> Latest
                                            Jobs</h2>
                                        <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with
                                            the right freelancers.</p>
                                        <div class="pt-2 mt-5">
                                            <a href="javascript:void(0)" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Started Now <i class="align-middle uil uil-rocket ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- end cta -->

            <!-- start testimonial -->
                <section class="py-20 dark:bg-neutral-800">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-1 gap-5">
                            <div class="mb-5 text-center">
                                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Happy Candidates</h3>
                                <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 mt-8">
                            <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                                <div class="pb-5 swiper testimonialSlider">
                                    <div class="mb-12 swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <img src="assets/images/logo/mailchimp.svg" class="h-12 mx-auto" alt="" />
                                                </div>
                                                <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                                    Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                    shortcuts. Even if the client is being careless. "</p>
                                                <h5 class="mb-0 dark:text-gray-50">Jeffrey Montgomery</h5>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Product Manager</p>
                                            </div>
                                        </div>
                                        <!--end swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <img src="assets/images/logo/wordpress.svg" class="h-12 mx-auto" alt="" />
                                                </div>
                                                <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                                    Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                    shortcuts. Even if the client is being careless. "</p>
                                                <h5 class="mb-0 dark:text-gray-50">Rebecca Swartz</h5>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Creative Designer</p>
                                            </div>
                                        </div>
                                        <!--end swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="text-center">
                                                <div class="mb-4">
                                                    <img src="assets/images/logo/instagram.svg" class="h-12 mx-auto" alt="" />
                                                </div>
                                                <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                                    Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                    shortcuts. Even if the client is being careless. "</p>
                                                <h5 class="mb-0 dark:text-gray-50">Charles Dickens</h5>
                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Store Assistant</p>
                                            </div>
                                        </div>
                                        <!--end swiper-slide-->
                                    </div>
                                    <!--end swiper-wrapper-->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- end testimonial -->

            <!-- start blog -->
                <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-1 gap-5">
                            <div class="mb-5 text-center">
                                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Quick Career Tips</h3>
                                <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                                <div class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                                    <div class="relative overflow-hidden">
                                        <img src="assets/images/blog/img-01.jpg" alt="" class="rounded">
                                        <div class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                        <div class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                            <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                            <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July, 2021</p>
                                        </div>
                                        <div class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                            <ul class="mb-0 list-unstyled">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <a href="blog-details.html" class="primary-link">
                                            <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">How apps is the IT world ?</h5>
                                        </a>
                                        <p class="mb-3 text-gray-500 dark:text-gray-300">The final text is not yet avaibookmark-label. Dummy texts have Internet tend
                                            been in use by typesetters.</p>
                                        <a href="blog-details.html" class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read more <i class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                                <div class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                                    <div class="relative overflow-hidden">
                                        <img src="assets/images/blog/img-02.jpg" alt="" class="rounded">
                                        <div class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                        <div class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                            <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                            <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July, 2021</p>
                                        </div>
                                        <div class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                            <ul class="mb-0 list-unstyled">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <a href="blog-details.html" class="primary-link">
                                            <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">Smartest Applications for Business ?</h5>
                                        </a>
                                        <p class="mb-3 text-gray-500 dark:text-gray-300">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception.</p>
                                        <a href="blog-details.html" class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read more <i class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                                <div class="p-2 mt-3 transition-all duration-500 bg-white rounded shadow-lg shadow-gray-100/50 card dark:bg-neutral-800 dark:shadow-neutral-600/20 group/blog">
                                    <div class="relative overflow-hidden">
                                        <img src="assets/images/blog/img-03.jpg" alt="" class="rounded">
                                        <div class="absolute inset-0 hidden transition-all duration-500 rounded-md bg-black/30 group-hover/blog:block"></div>
                                        <div class="hidden text-white transition-all duration-500 top-2 left-2 group-hover/blog:block author group-hover/blog:absolute">
                                            <p class="mb-0 "><i class="mdi mdi-account text-light"></i> <a href="javascript:void(0)" class="text-light user">Dirio Walls</a></p>
                                            <p class="mb-0 text-light date"><i class="mdi mdi-calendar-check"></i> 01 July, 2021</p>
                                        </div>
                                        <div class="hidden bottom-2 right-2 group-hover/blog:block author group-hover/blog:absolute">
                                            <ul class="mb-0 list-unstyled">
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-heart-outline me-1"></i> 33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-white"><i class="mdi mdi-comment-outline me-1"></i> 08</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <a href="blog-details.html" class="primary-link">
                                            <h5 class="mb-1 text-gray-900 fs-17 dark:text-gray-50">Design your apps in your own way ?</h5>
                                        </a>
                                        <p class="mb-3 text-gray-500 dark:text-gray-300">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
                                        <a href="blog-details.html" class="font-medium group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Read more <i class="align-middle mdi mdi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- end blog -->

            <!-- start client -->
                <section class="py-10 dark:bg-neutral-800">
                    <div class="container mx-auto">
                        <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50 text-center">Trusted by companies</h3>
                        <div class="grid grid-cols-12 gap-5">
                            @foreach ($featuredClients as $client)
                            <div class="col-span-12 lg:col-span-2">
                                <img src="{{ asset('uploads/company-logo/'. $client->logo) }}" alt="" class="mx-auto cursor-pointer h-9 lg:h-6 xl:h-9" data-tooltip-target="tooltip-default">
                                <p class="text-center">{{ $client->company_name }}</p>
                           </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            <!-- end client -->

        <script>
            $(document).ready(function() {
                $('.job-tab').on('click', function(e) {
                    e.preventDefault();
            
                    var jobType = $(this).data('job-type');
                    $('.job-tab').removeClass('active');
                    $(this).addClass('active');
            
                    $.ajax({
                        url: '/jobs/' + jobType,
                        type: 'GET',
                        success: function(response) {
                            $('#job-tabs').html(response);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
            });
            
        </script>
@endsection