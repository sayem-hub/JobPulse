 @extends('layouts.frontend.app')

 @section('content')
 
 <!-- start home -->
 <section class="relative bg-opacity-10 py-28 dark:bg-violet-900 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20">
    <div class="container mx-auto">
        <div class="grid items-center grid-cols-12 rtl:gap-10">
            <div class="col-span-12 lg:col-span-7">
                <div class="mb-3 ltr:mr-14 rtl:ml-14">
                    <h6 class="mb-3 text-sm text-gray-900 uppercase dark:text-gray-50">We have 150,000+ live jobs</h6>
                    <h1 class="mb-3 text-5xl font-semibold leading-tight text-gray-900 dark:text-gray-50">Find your dream jobs <br> with <span class="font-bold group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Jobcy</span></h1>
                    <p class="text-lg font-light text-gray-500 whitespace-pre-line dark:text-gray-300">Find jobs, create trackable resumes and enrich your
                            applications.Carefully crafted after analyzing the needs of different 
                            industries.</p>
                </div>
                <form action="#">
                    <div class="registration-form">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 xl:col-span-4">
                                <div class="mt-3 rounded-l filter-search-form filter-border mt-md-0">
                                    <i class="uil uil-briefcase-alt"></i>
                                    <input type="search" id="job-title" class="w-full filter-input-box placeholder:text-gray-100 placeholder:text-13 dark:text-gray-100" placeholder="Job, Company name...">
                                </div>
                            </div><!--end col-->
                            <div class="col-span-12 xl:col-span-4">
                                <div class="mt-3 filter-search-form mt-md-0">
                                    <i class="uil uil-map-marker"></i>
                                    <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">&Aring;land Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                    
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
                    <img src="assets/images/process-02.png" alt="" class="mb-5 home-img max-w-none"> 
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
                                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Browser Jobs Categories</h3>
                                <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the
                                        right freelancers.</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-layers-alt"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">IT &amp; Software</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">2024 Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-airplay"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">Technology</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1250 Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-bag"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">Government</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">802 Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.2] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-user-md"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">Accounting / Finance</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">577 Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-hospital"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">Construction / Facilities</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">285 Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-telegram-alt"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">Tele-communications</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">495 Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.4] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-scenery"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">Design & Multimedia</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1045 Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                <div class="mt-4">
                                    <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                        <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 rounded-lg text-center leading-[4.2] mx-auto dark:bg-violet-900">
                                            <i class="uim uim-android-alt"></i>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <a href="job-categories.html" class="text-gray-900">
                                                <h5 class="text-lg dark:text-gray-50">Human Resource</h5>
                                            </a>
                                            <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">1516 Jobs</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1">
                            <div class="mt-5 text-center">
                                <a href="job-categories.html" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn hover:-translate-y-2">Browse All Categories <i class="uil uil-arrow-right ms-1"></i></a>
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
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="recent-job" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50 active" aria-current="page">Recent Jobs</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="featured-jobs-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Featured Jobs</a>
                                            </li>
                                            <li class="w-full">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="freelancer-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Freelancer</a>
                                            </li>
                                             <li class="w-full">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="part-time-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Part Time</a>
                                            </li>
                                             <li class="w-full">
                                                <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="full-time-tab" class="inline-block w-full py-[12px] px-[18px] dark:text-gray-50">Full Time</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="block w-full tab-pane" id="recent-job">
                                    <div class="pt-8 ">
                                        <div class="space-y-8">
                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                                    <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                        <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                    </div>
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
                                                                    <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                                    </h5>
                                                                    <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-3">
                                                                <div class="mb-2 lg:flex">
                                                                    <div class="flex-shrink-0">
                                                                        <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                    </div>
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane ssRichardson</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div>
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div class="flex flex-wrap gap-1.5">
                                                                    <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                                    <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
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
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                                        - 2 years</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-6">
                                                                <div>
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                        languages only differ in their grammar. </p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-3 lg:col-span-2">
                                                                <div class="text-start text-md-end dark:text-gray-50">
                                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                                <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                                <span class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
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
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-3 lg:col-span-2">
                                                            <div class="text-start text-md-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                                <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                                <span class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden w-full tab-pane" id="featured-jobs-tab">
                                    <div class="pt-8 ">
                                        <div class="space-y-8">
                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
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
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-2">
                                                                <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                                <span class="badge bg-sky-500/20 text-sky-500 text-13 px-2 py-0.5 font-medium rounded">Private</span>
                                                                <span class="badge bg-yellow-500/20 text-yellow-500 text-13 px-2 py-0.5 font-medium rounded">Urgent</span>
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
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-3 lg:col-span-2">
                                                            <div class="text-start text-md-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                    <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                        <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                    </div>
                                                    <div class="p-4">
                                                        <div class="grid items-center grid-cols-12">
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div class="mb-4 text-center mb-md-0">
                                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-3">
                                                                <div class="mb-2 mb-md-0">
                                                                    <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                                    </h5>
                                                                    <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-3">
                                                                <div class="mb-2 lg:flex">
                                                                    <div class="flex-shrink-0">
                                                                        <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                    </div>
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div>
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div class="flex flex-wrap gap-1.5">
                                                                    <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
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
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                                        - 2 years</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-6">
                                                                <div>
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                        languages only differ in their grammar. </p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-3 lg:col-span-2">
                                                                <div class="text-start text-md-end dark:text-gray-50">
                                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-300">Experience :</span> 4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden w-full tab-pane" id="freelancer-tab">
                                    <div class="pt-8 ">
                                        <div class="space-y-8">
                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                    <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                        <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                    </div>
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
                                                                    <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                                    </h5>
                                                                    <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-3">
                                                                <div class="mb-2 lg:flex">
                                                                    <div class="flex-shrink-0">
                                                                        <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                    </div>
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div>
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div class="flex flex-wrap gap-1.5">
                                                                    <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
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
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                                        - 2 years</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-6">
                                                                <div>
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                        languages only differ in their grammar. </p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-3 lg:col-span-2">
                                                                <div class="text-start text-md-end dark:text-gray-50">
                                                                    <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
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
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 2
                                                                    - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-3 lg:col-span-2">
                                                            <div class="text-start text-md-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-2">
                                                                <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>                           

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-violet-500/20 text-violet-500 text-13 px-2 py-0.5 font-medium rounded">Freelancer</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden w-full tab-pane" id="part-time-tab">
                                    <div class="pt-8 ">
                                        <div class="space-y-8">
                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
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
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-2">
                                                                <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
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
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                                    - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-3 lg:col-span-2">
                                                            <div class="text-start text-md-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                    <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                        <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                    </div>
                                                    <div class="p-4">
                                                        <div class="grid items-center grid-cols-12">
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div class="mb-4 text-center mb-md-0">
                                                                    <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-3">
                                                                <div class="mb-2 mb-md-0">
                                                                    <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                                    </h5>
                                                                    <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-3">
                                                                <div class="mb-2 lg:flex">
                                                                    <div class="flex-shrink-0">
                                                                        <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                    </div>
                                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div>
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-span-12 lg:col-span-2">
                                                                <div class="flex flex-wrap gap-1.5">
                                                                    <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
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
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-50"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-3 lg:col-span-2">
                                                            <div class="text-start text-md-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                             <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-red-500/20 text-red-500 text-13 px-2 py-0.5 font-medium rounded">Part Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                   
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden w-full tab-pane" id="full-time-tab">
                                    <div class="pt-8 ">
                                        <div class="space-y-8">
                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
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
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Web Developer</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Web Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Oakridge Lane Richardson</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-2">
                                                                <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
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
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                                    - 2 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-3 lg:col-span-2">
                                                            <div class="text-start text-md-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                           <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-02.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Business Associate</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Pixel Technology pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Dodge City, Louisiana</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>800-1800/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
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
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 0
                                                                    - 1 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Notes :</span>
                                                                    languages only differ in their grammar. </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-3 lg:col-span-2">
                                                            <div class="text-start text-md-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-03.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Digital Marketing Manager</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Jobcy Technology Pvt.Ltd</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Phoenix, Arizona</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1500-2400/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 4+ years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>

                                            <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 dark:hover:bg-violet-500">
                                                <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                    <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                </div>
                                                <div class="p-4">
                                                    <div class="grid items-center grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="mb-4 text-center mb-md-0">
                                                                <a href="company-details.html"><img src="assets/images/featured-job/img-04.png" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">Product Director</a>
                                                                </h5>
                                                                <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">Creative Agency</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-3">
                                                            <div class="mb-2 lg:flex">
                                                                <div class="flex-shrink-0">
                                                                    <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                </div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300">Escondido, California</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div>
                                                                <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-span-12 lg:col-span-2">
                                                            <div class="flex flex-wrap gap-1.5">
                                                                <span class="badge bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">Full Time</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                   
                                                <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                    <div class="grid grid-cols-12">
                                                        <div class="col-span-12 lg:col-span-6">
                                                            <div>
                                                                <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 2 - 3 years</p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                        <div class="col-span-12 lg:col-span-5">
                                                            <div class="text-start lg:text-end dark:text-gray-50">
                                                                <a href="#applyNow" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8">
                            <div class="grid grid-cols-1">
                                <div class="text-center">
                                    <a href="job-categories.html" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">View More  <i class="uil uil-arrow-right ms-1"></i></a>
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
                        <div class="grid grid-cols-12 gap-5">
                           <div class="col-span-12 lg:col-span-2">
                                <img src="assets/images/logo/logo-01.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-6 xl:h-9" data-tooltip-target="tooltip-default">
                                <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                    Tooltip content
                                    <div class="tooltip-arrow" data-popper-arrow></div>
                                </div>
                           </div>
                           <div class="col-span-12 lg:col-span-2">
                                <img src="assets/images/logo/logo-02.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                           </div>
                           <div class="col-span-12 lg:col-span-2">
                                <img src="assets/images/logo/logo-03.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                           </div>
                           <div class="col-span-12 lg:col-span-2">
                                <img src="assets/images/logo/logo-04.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                           </div>
                           <div class="col-span-12 lg:col-span-2">
                                <img src="assets/images/logo/logo-05.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                           </div>
                           <div class="col-span-12 lg:col-span-2">
                                <img src="assets/images/logo/logo-06.png" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                           </div>
                        </div>
                    </div>
                </section>
            <!-- end client -->

            @endsection