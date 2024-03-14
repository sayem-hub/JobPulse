@include('pages.application-modal')
<div class="tab-content">
    <div class="block w-full tab-pane" id="recent-job">
        <div class="pt-8 ">
           

            @if ($jobs->count() == 0)

                <div class="text-center">
                    <h3>No Job Found!</h3>
                </div>
                
            @endif

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
    </div>

    <div class="mt-8">
        <div class="grid grid-cols-1">
            <div class="text-center">
                <a href="{{ route('all-jobs') }}" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">View More  <i class="uil uil-arrow-right ms-1"></i></a>
            </div>
        </div>
    </div>