<nav class="navbar fixed right-0 left-0 top-0 lg:top-[44.5px] px-5 lg:px-24 transition-all duration-500 ease shadow-lg shadow-gray-200/20 bg-white border-gray-200 dark:bg-neutral-800 z-40 dark:shadow-neutral-900" id="navbar">
    <div class="mx-auto container-fluid">
        <div class="flex flex-wrap items-center justify-between mx-auto">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('assets/images/logo-dark_custom.png') }}" alt="logo" style="height: 60px">
                
            </a>
            <button data-collapse-toggle="navbar-collapse" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg navbar-toggler group lg:hidden hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="flex items-center lg:order-2">
                <div>

                 
                    @if (Auth::check())
                    <div class="relative dropdown">
                        <div class="relative">
                            <button type="button" class="btn border-0 h-[70px] dropdown-toggle px-4 text-gray-500 dark:text-gray-300" aria-expanded="false" data-dropdown-toggle="notification">
                                <i class="text-2xl mdi mdi-bell"></i>
                            </button>
                                <span class="absolute text-xs px-1.5 bg-red-500 text-white font-medium rounded-full left-6 top-3 ring-2 ring-white dark:ring-neutral-800">0</span>
                        </div>
                        <div class="absolute right-0 top-auto left-auto z-50 hidden list-none bg-white rounded shadow dropdown-menu w-72 dark:bg-neutral-800 " id="notification">
                            <div class="border rounded border-gray-50 dark:border-neutral-600" aria-labelledby="notification">
                                <div class="grid grid-cols-1 ">
                                    <div class="p-4 bg-gray-50 dark:bg-neutral-700">
                                        <h6 class="mb-1 text-gray-800 dark:text-gray-50"> Notification </h6>
                                        <p class="mb-0 text-gray-500 text-13 dark:text-gray-300">You have 4 unread Notification</p>
                                    </div>
                                </div>
                                <div class="h-60" data-simplebar>
                                  
                                </div>
                                <div class="grid p-1 border-t border-gray-50 dark:border-zinc-600 justify-items-center bg-gray-50 dark:bg-neutral-700">
                                    <a class="border-0 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 btn dark:text-gray-50" href="javascript:void(0)">
                                        <i class="mr-1 mdi mdi-arrow-right-circle"></i> <span>View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    
                        
                    
                    <div class="relative dropdown ltr:mr-4 rtl:ml-4">
                        <button type="button" class="flex items-center px-4 py-5 dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img class="w-8 h-8 rounded-full ltr:xl:mr-2 rtl:xl:ml-2" src="{{ asset(Auth::user()->profile_pic) }}" alt="Header Avatar">
                            <span class="hidden fw-medium xl:block dark:text-gray-50">{{ Auth::user()->first_name }}</span>
                            
                        </button>
                        <ul class="absolute top-auto z-50 hidden w-48 p-3 list-none bg-white border rounded shadow-lg dropdown-menu border-gray-500/20 xl:ltr:-left-3 ltr:-left-32 rtl:-right-3 dark:bg-neutral-800" id="profile/log" aria-labelledby="navNotifications">
                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="#l"><small>My role is: {{ Auth::user()->role }}</small></a>
                            </li>
                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                @if(Auth::user()->role == 'admin')
                                <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{route('admin.dashboard')}}">Dashboard</a>
                                @elseif (Auth::user()->role == 'company')
                                <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{route('company.dashboard')}}">Dashboard</a>
                                @else
                                <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{route('candidate.dashboard')}}">Dashboard</a>
                                @endif
                            </li>
                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{route('candidate.profile.view', Auth::id())}}">My Profile</a>
                            </li>
                            <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                                <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{ route('logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                    @endif
                </div>
            </div>

            <div id="navbar-collapse" class="navbar-res items-center justify-between w-full text-sm lg:flex lg:w-auto lg:order-1 group-focus:[.navbar-toggler]:block hidden">
                <ul class="flex flex-col items-start mt-5 mb-10 font-medium lg:mt-0 lg:mb-0 lg:items-center lg:flex-row" id="navigation-menu">
                    <li class="py-5 lg:px-4">
                        <a href="{{ route('home') }}" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="contact" data-bs-toggle="dropdown">Home</a>
                    </li>

                    <li class="py-5 lg:px-4">
                        <a href="{{ route('about-us') }}" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="contact" data-bs-toggle="dropdown">About Us</a>
                    </li>

                   
                    <li class="relative dropdown lg:mt-0">
                        <button href="#" class="py-5 text-gray-800 lg:px-4 dropdown-toggle dark:text-gray-50 lg:h-[70px]"id="pages" data-bs-toggle="dropdown">Pages <i class='align-middle bx bxs-chevron-down ltr:ml-1 rtl:mr-1'></i></button>
                        <div class="relative top-auto z-50 py-2 list-none bg-white border-0 rounded dropdown-menu lg:border border-gray-500/20 lg:absolute  lg:w-[40rem] lg:shadow-lg dark:bg-neutral-800">
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-4">
                                    <ul class="relative top-auto z-50 py-2 list-none dark:bg-neutral-800" aria-labelledby="pages">
                                        <span class="block px-4 py-3 font-normal text-gray-500 uppercase text-13">Jobs</span>
                                        <li><a
                                            class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50"
                                            href="{{ route('job.list') }}">Job List</a>
                                        </li>
                                      
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="{{ route('jobs.categories') }}">Jobs Categories</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                    <ul class="relative top-auto z-50 py-2 list-none dark:bg-neutral-800" aria-labelledby="pages">
                                        <span class="block px-4 py-3 font-normal text-gray-500 uppercase text-13">Candidates / Companys</span>
                                        <li><a
                                            class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50"
                                            href="candidate-list.html">Candidate List</a>
                                        </li>
                                      
                                        <li><a class="block w-full px-4 py-2 text-13 font-medium text-gray-900 duration-300 bg-transparent dropdown-item whitespace-nowrap hover:translate-x-1.5 group-data-[theme-color=violet]:hover:text-violet-500 group-data-[theme-color=sky]:hover:text-sky-500 group-data-[theme-color=red]:hover:text-red-500 group-data-[theme-color=green]:hover:text-green-500 group-data-[theme-color=pink]:hover:text-pink-500 group-data-[theme-color=blue]:hover:text-blue-500 uppercase group-data-[mode=dark]:text-gray-50" href="company-list.html">Company List</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="py-5 lg:px-4">
                        <a href="{{ route('contact-us') }}" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="contact" data-bs-toggle="dropdown">Blog</a>
                    </li>

                    <li class="py-5 lg:px-4">
                        <a href="{{ route('contact-us') }}" class="py-2.5 text-gray-800 font-medium leading-tight dark:text-gray-50" id="contact" data-bs-toggle="dropdown">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>