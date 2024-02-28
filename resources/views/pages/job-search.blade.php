@extends('layouts.frontend.app')
@section('title', 'Job Search')
@section('content')

    <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
        <div class="container mx-auto">
            <div class="grid">
                <div class="col-span-12">
                    <div class="text-center text-white">
                        <h3 class="mb-4 text-[26px]">Job List</h3>
                        <div class="page-next">
                            <nav class="inline-block" aria-label="breadcrumb text-center">
                                <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Company</a></li>
                                    <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i> Job List </li>
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
    
     <!-- Start team -->
     <section class="py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                <div class="col-span-12 xl:col-span-9">
                    <div class="job-list-header">
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
                                    <a href="javascript:void(0)" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30"><i class="uil uil-filter"></i> Fliter</a>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end grid-->
                        </form>
                    </div>
                    <div class="mt-8">
                        <h6 class="mb-4 text-gray-900 dark:text-gray-50">Popular</h6>
                        <ul class="flex flex-wrap gap-3">
                            <li class="border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 text-center group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 leading-[2.4] rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 text-sm font-medium">
                                        20
                                    </div>
                                    <a href="javascript:void(0)" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                        <h6 class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">UI/UX designer</h6>
                                    </a>
                                </div>
                            </li>
                            <li class="border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 text-center group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 leading-[2.4] rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 text-sm font-medium">
                                        18
                                    </div>
                                    <a href="javascript:void(0)" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                        <h6 class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">HR manager</h6>
                                    </a>
                                </div>
                            </li>
                            <li class="border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 text-center group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 leading-[2.4] rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 text-sm font-medium">
                                        10
                                    </div>
                                    <a href="javascript:void(0)" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                        <h6 class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">Product manager</h6>
                                    </a>
                                </div>
                            </li>
                            <li class="border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 text-center group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 leading-[2.4] rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 text-sm font-medium">
                                        15
                                    </div>
                                    <a href="javascript:void(0)" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                        <h6 class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">Sales manager</h6>
                                    </a>
                                </div>
                            </li>
                            <li class="border p-[6px] border-gray-100/50 rounded group/joblist dark:border-gray-100/20">
                                <div class="flex items-center">
                                    <div class="h-8 w-8 text-center group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 leading-[2.4] rounded group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 text-sm font-medium">
                                        28
                                    </div>
                                    <a href="javascript:void(0)" class="text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-50">
                                        <h6 class="mb-0 transition-all duration-300 fs-14 group-data-[theme-color=violet]:group-hover/joblist:text-violet-500 group-data-[theme-color=sky]:group-hover/joblist:text-sky-500 group-data-[theme-color=red]:group-hover/joblist:text-red-500 group-data-[theme-color=green]:group-hover/joblist:text-green-500 group-data-[theme-color=pink]:group-hover/joblist:text-pink-500 group-data-[theme-color=blue]:group-hover/joblist:text-blue-500">Developer</h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="mt-14">

                    @include('pages.application-modal')

                    @foreach ($jobResults as $results)
                        <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/job group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600">

                            @if ($results->is_featured == 1)
                            <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 p-[6px] text-center">
                                <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                            </div>
                            @endif
                      
                            <div class="p-4">
                                <div class="grid items-center grid-cols-12">
                                    <div class="col-span-12 lg:col-span-2">
                                        <div class="mb-4 text-center mb-md-0">
                                            <a href="company-details.html"><img src="{{ asset('assets/images/featured-job/img-01.png') }}" alt="" class="mx-auto img-fluid rounded-3"></a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                  
                                    <div class="col-span-12 lg:col-span-3">
                                        <div class="mb-2 mb-md-0">
                                            <h5 class="mb-1 fs-18"><a href="job-details.html" class="text-gray-900 dark:text-gray-50">{{ $results->job_title }}</a>
                                            </h5>
                                            <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{ $results->company->company_name }}</p>
                                        </div>
                                    </div>
                                  
                                   
                                    <!--end col-->
                                    <div class="col-span-12 lg:col-span-3">
                                        <div class="mb-2 lg:flex">
                                            <div class="flex-shrink-0">
                                                <i class="mr-1 mdi mdi-map-marker group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i>
                                            </div>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300">{{ $results->district->name }}, {{ $results->division->division_name }}</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-span-12 lg:col-span-2">
                                        <div>
                                           <p class="mb-0 text-gray-500 dark:text-gray-300"> <i class="mr-1 uil uil-clock-three group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500"></i> {{ date('d-M-Y', strtotime($results->published_at)) }}</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-span-12 lg:col-span-2">
                                        <div class="flex flex-wrap gap-1.5">
                                            <span class="bg-green-500/20 text-green-500 text-13 px-2 py-0.5 font-medium rounded">{{ $results->jobType->name }}</span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>

                           
                            <div class="px-4 py-3 bg-gray-50 dark:bg-neutral-700">
                                <div class="grid grid-cols-12">
                                    <div class="col-span-12 lg:col-span-5">
                                        <div>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="font-medium text-gray-900 dark:text-gray-50">Experience :</span> 
                                            {{$results->experience_level}}</p>
                                        </div>
                                    </div>

                                    <div class="col-span-12 lg:col-span-4">
                                        <div>
                                            <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="font-medium text-gray-900 dark:text-gray-50">Deadline :</span> 
                                                {{date('d-M-Y', strtotime($results->deadline))}}</p>
                                        </div>
                                    </div>
                                   

                                    <div class="col-span-12 mt-2 lg:col-span-3 lg:mt-0">
                                       

                                        <div class="ltr:lg:text-right rtl:lg:text-left dark:text-gray-50">
                                            <a href="#applicationModal" class="py-3 font-medium text-gray-800 dark:text-gray-50 btn-open-modal" data-tw-toggle="modal" data-tw-target="#modal-id_form" data-job-id="{{ $results->id }}">Apply Now<i class="mdi mdi-chevron-double-right"></i></a>
                                        </div>
                                    </div>


                                    
                                            

                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    @endforeach
                    
                </div>

                {{-- Start pagination --}}
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
                                    <a href="javascript:void(0)" tabindex="-1">
                                        <i class="mdi mdi-chevron-double-right text-16 leading-[2.8]"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--end col-->
                    </div>
                </div>
                <div class="col-span-12 space-y-5 lg:col-span-3">
                    <div data-tw-accordion="collapse">
                        <div class="text-gray-700 accordion-item">
                            <h6>
                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 active">
                                    <span class="text-gray-900 dark:text-gray-50">Location</span>
                                    <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                </button>
                            </h6>

                            <div class="block accordion-body">
                                <div class="p-5">
                                    <div class="mb-3">
                                        <form class="relative">
                                            <input class="border rounded-md border-gray-100/50 placeholder:text-13 placeholder:text-gray-300 dark:bg-neutral-700 dark:border-gray-100/20 dark:text-gray-300" type="search" placeholder="Search...">
                                            <button class="absolute bg-transparent border-0 top-3 ltr:right-0 rtl:left-0 ltr:mr-2 rtl:ml-2" type="submit"><span class="text-gray-500 mdi mdi-magnify"></span></button>
                                        </form>
                                    </div>
                                    <div class="area-range">
                                        <div class="mb-3 form-label dark:text-gray-300">Area Range: <span class="mt-2 example-val" id="slider1-span">9.00</span> miles</div>
                                        <div id="slider1" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tw-accordion="collapse">
                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                            <h6>
                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                    <span class="text-gray-900 text-15 dark:text-gray-50"> Work experience</span>
                                    <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                </button>
                            </h6>
                            <div class="block accordion-body">
                                <div class="p-5">
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">No experience</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20" checked type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">0-3 years</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">3-6 years</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">More than 6 years</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tw-accordion="collapse">
                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                            <h6>
                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                    <span class="text-gray-900 text-15 dark:text-gray-50">Type of employment</span>
                                    <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                </button>
                            </h6>
                            <div class="block accordion-body">
                                <div class="p-5">
                                    <div class="mt-2">
                                        <input class="cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20" type="radio" checked value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">No experience</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20" type="radio" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">0-3 years</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20" type="radio" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">3-6 years</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-neutral-600 dark:checked:bg-violet-500/20" type="radio" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">More than 6 years</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tw-accordion="collapse">
                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                            <h6>
                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                    <span class="text-gray-900 text-15 dark:text-gray-50">Date Posted</span>
                                    <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                </button>
                            </h6>
                            <div class="block accordion-body">
                                <div class="p-5">
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500/20" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">All</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500/20" checked type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Last Hour</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500/20" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Last 24 hours</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500/20" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Last 7 days</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500/20" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Last 14 days</label>
                                    </div>
                                    <div class="mt-2">
                                        <input class="rounded cursor-pointer group-data-[theme-color=violet]:checked:bg-violet-500 group-data-[theme-color=sky]:checked:bg-sky-500 group-data-[theme-color=red]:checked:bg-red-500 group-data-[theme-color=green]:checked:bg-green-500 group-data-[theme-color=pink]:checked:bg-pink-500 group-data-[theme-color=blue]:checked:bg-blue-500 focus:ring-0 focus:ring-offset-0 dark:bg-zinc-600 dark:checked:bg-violet-500/20" type="checkbox" value="" id="flexCheckChecked1">
                                        <label class="text-gray-500 cursor-pointer ltr:ml-2 rtl:mr-2 dark:text-gray-300">Last 30 days</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tw-accordion="collapse">
                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                            <h6>
                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group active">
                                    <span class="text-gray-900 text-15 dark:text-gray-50">Tags Cloud</span>
                                    <i class="mdi mdi-chevron-down text-xl group-[.active]:rotate-180 text-gray-900 dark:text-gray-50"></i>
                                </button>
                            </h6>
                            <div class="block accordion-body">
                                <div class="flex flex-wrap gap-2 p-5">
                                    <a href="javascript:void(0)" class="bg-gray-50 text-13 rounded px-2 py-0.5 font-medium text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-300 ease-in-out dark:text-gray-50 dark:bg-neutral-600/40">design</a>
                                    <a href="javascript:void(0)" class="bg-gray-50 text-13 rounded px-2 py-0.5 font-medium text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-300 ease-in-out dark:text-gray-50 dark:bg-neutral-600/40">marketing</a>
                                    <a href="javascript:void(0)" class="bg-gray-50 text-13 rounded px-2 py-0.5 font-medium text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-300 ease-in-out dark:text-gray-50 dark:bg-neutral-600/40">business</a>
                                    <a href="javascript:void(0)" class="bg-gray-50 text-13 rounded px-2 py-0.5 font-medium text-gray-500 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=blue]:hover:bg-blue-500 hover:text-white transition-all duration-300 ease-in-out dark:text-gray-50 dark:bg-neutral-600/40">developer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End team -->



@endsection