@extends('layouts.frontend.app')
@section('title', 'About Us')
@section('content')

<section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500  bg-[url('../images/home/page-title.png')] bg-center bg-cover relative group-data-[theme-color=violet]:dark:bg-neutral-900" >
    <div class="container mx-auto">
        <div class="grid">
            <div class="col-span-12">
                <div class="text-center text-white">
                    <h3 class="mb-4 text-[26px]">About Us</h3>
                    <div class="page-next">
                        <nav class="inline-block" aria-label="breadcrumb text-center">
                            <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                <li><a href="index.html">Home</a></li>
                                <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Company</a></li>
                                <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i> About Us </li>
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

 <!-- Start About us -->
 <section class="py-16 overflow-hidden dark:bg-neutral-800">
    <div class="container mx-auto">
        <div class="grid items-center grid-cols-12 gap-5">
            <div class="col-span-12 lg:col-span-6">
                <h6 class="text-sm text-gray-900 uppercase dark:text-gray-50/80">About Us</h6>
                <h2 class="mt-1 mb-4 text-gray-900 dark:text-gray-50/80">Why <span class="font-bold text-yellow-500">35,000+</span> People Trust On <br> Jobcy?</h2>
                <p class="font-light text-gray-500 dark:text-gray-300">Start working with Jobcy that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content.</p>
            
                <div class="grid grid-cols-12 gap-5 mt-8">
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative">
                            <ul class="space-y-4 text-gray-700 about-list dark:text-gray-300">
                                <li class="ltr:pl-8 rtl:pr-8"> Digital Marketing Solutions</li>
                                <li class="ltr:pl-8 rtl:pr-8"> Our Talented &amp; Experienced Marketing Agency</li>
                                <li class="ltr:pl-8 rtl:pr-8"> Creative Design</li>
                                <li class="ltr:pl-8 rtl:pr-8"> New jobs Innovation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6">
                        <div class="relative">
                            <ul class="space-y-4 text-gray-700 about-list dark:text-gray-300">
                                <li class="ltr:pl-8 rtl:pr-8"> Digital Marketing Solutions</li>
                                <li class="ltr:pl-8 rtl:pr-8"> Our Talented &amp; Experienced Marketing Agency</li>
                                <li class="ltr:pl-8 rtl:pr-8"> Creative Design</li>
                                <li class="ltr:pl-8 rtl:pr-8"> New jobs Innovation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <button class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30" type="button" id="subscribebtn">Learn More <i class="align-middle uil uil-angle-right-b"></i> </button>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-6">
                <div class="lg:w-[180%]">
                    <img src="{{ asset('assets/images/about/img-01.jpg') }}" alt="" class="h-auto rounded">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us -->

                <!-- Start Counter -->
                <section class="py-16 bg-gray-50 dark:bg-neutral-700">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-3">
                                <div class="mt-5 lg:mt-3">
                                    <div class="text-center text-gray-800 counters dark:text-gray-50">
                                        <h5 class="mb-0 counter">10,000+</h5>
                                        <h6 class="mt-3 fs-16">Available Jobs</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="mt-5 lg:mt-3">
                                    <div class="text-center text-gray-800 counters dark:text-gray-50">
                                        <h5 class="mb-0 counter">7500+</h5>
                                        <h6 class="mt-3 fs-16">Applications</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="mt-5 lg:mt-3">
                                    <div class="text-center text-gray-800 counters dark:text-gray-50">
                                        <h5 class="mb-0 counter">8.85K</h5>
                                        <h6 class="mt-3 fs-16">Positive Feedback</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3">
                                <div class="mt-5 lg:mt-3">
                                    <div class="text-center text-gray-800 counters dark:text-gray-50">
                                        <h5 class="mb-0 counter">9875</h5>
                                        <h6 class="mt-3 fs-16">Members</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- End Counter -->

             <!-- start Key Features -->
                <section class="py-20 dark:bg-neutral-800">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-1 gap-8">
                            <div class="mb-10 text-center">
                                <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Key Features</h3>
                                <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Start working with Jobcy that can provide everything you need to generate <br> awareness, drive traffic, connect.</p>
                            </div>
                        </div>
                       <div class="grid grid-cols-12 gap-5">
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900 ">
                                        <i class="uim uim-object-ungroup"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">Manage Job Ads</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900">
                                        <i class="uim uim-telegram-alt"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">Create CV</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900">
                                        <i class="uim uim-lock-access"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">Privacy Policy</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900">
                                        <i class="uim uim-user-md"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">Recruiter Profiles</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900">
                                        <i class="uim uim-airplay"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">Display Jobs</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900">
                                        <i class="uim uim-rocket"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">For Agencies</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900">
                                        <i class="uim uim-history"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">Quick Support</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900">
                                        <i class="uim uim-bookmark"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">Bookmark Jobs</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 mg:col-span-12 lg:col-span-4">
                                <div class="flex items-center p-4 transition-all duration-500 ease-in-out rounded-lg shadow-lg shadow-gray-100/20 hover:scale-105 hover:shadow-gray-100/40 dark:shadow-none dark:border dark:border-gray-50/5">
                                    <div class="key-features text-center shrink-0 h-[45px] w-[45px] bg-black leading-[2.5] rounded-lg bg-gradient-to-r group-data-[theme-color=violet]:from-violet-100 group-data-[theme-color=violet]:to-white group-data-[theme-color=sky]:from-sky-100 group-data-[theme-color=sky]:to-white group-data-[theme-color=red]:from-red-100 group-data-[theme-color=red]:to-white group-data-[theme-color=green]:from-green-100 group-data-[theme-color=green]:to-white group-data-[theme-color=pink]:from-pink-100 group-data-[theme-color=pink]:to-white group-data-[theme-color=blue]:from-blue-100 group-data-[theme-color=blue]:to-white group-data-[mode=dark]:to-neutral-900 group-data-[mode=dark]:from-neutral-900">
                                        <i class="uim uim-graph-bar"></i>
                                    </div>
                                    <div class="grow ltr:ml-3 rtl:mr-3">
                                        <h6 class="mb-0 text-lg text-gray-900 dark:text-gray-50">Real-time Analytics</h6>
                                    </div>
                                </div>
                            </div>
                       </div>
                       
                    </div>
                </section>
            <!-- end Key Features -->

            <!-- Start CTA -->
                <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                    <div class="container mx-auto">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12">
                                <div class="text-center">
                                    <h3 class="pb-2 mb-6 text-3xl text-gray-900 dark:text-gray-50">See everything about your employee at one place.</h3>
                                    <p class="mx-auto text-gray-500 dark:text-gray-300">Start working with Jobcy that can provide everything you need to generate <br> awareness, drive traffic, connect.</p>
                                    <div class="mt-6 space-x-2">
                                        <a href="javascript:void(0)" class="btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white mt-2 hover:-translate-y-1.5 transition-all duration-500 ease-in-out focus:ring focus:ring-custom-500/20"><i class="mr-1 uil uil-rocket"></i> Get Started Now</a>
                                        <a href="javascript:void(0)" class="btn group-data-[theme-color=violet]:border-violet-500 group-data-[theme-color=sky]:border-sky-500 group-data-[theme-color=red]:border-red-500 group-data-[theme-color=green]:border-green-500 group-data-[theme-color=pink]:border-pink-500 group-data-[theme-color=blue]:border-blue-500 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 font-medium mt-2 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500 group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:-translate-y-1.5 transition-all duration-500 ease-in-out focus:ring focus:ring-custom-500/20"><i class="mr-1 uil uil-capsule"></i> Free Trial</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <!-- End CTA -->

@endsection