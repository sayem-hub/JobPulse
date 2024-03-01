<div class="hidden px-5 mx-auto border-gray-200 container-fluid lg:px-24 bg-gray-50 md:block dark:bg-neutral-600">
    <div class="grid items-center grid-cols-12">
        <div class="col-span-6">
            <ul class="flex items-center py-3">
                <p class="text-gray-800 mr-2">Contact</p>
                <li>
                    <ul class="flex flex-wrap gap-4 text-gray-800 ">
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-whatsapp"></i></a></li>
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-facebook-messenger-alt"></i></a></li>
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-instagram"></i></a></li>
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-envelope"></i></a></li>
                        <li class="transition-all duration-200 ease-in hover:text-green-500 dark:text-gray-50 dark:hover:text-green-500"><a href="javascript:void(0)" class="social-link"><i class="uil uil-twitter-alt"></i></a></li>
                    </ul>
                </li>
            </ul>
        </div>

       @if (!Auth::check())
        <div class="col-span-6 flex justify-end items-center"> <!-- Updated this div -->
            <div class="relative dropdown">
                <button class="px-4 dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="font-medium text-gray-800 text-13 dark:text-gray-50"><i class="uil uil-lock ltr:mr-1 rtl:ml-1"></i>Sign Up</span>
                </button>
                <ul class="absolute top-auto z-50 hidden w-48 p-3 list-none bg-white border rounded shadow-lg dropdown-menu border-gray-500/20 xl:ltr:-left-3 ltr:-left-32 rtl:-right-3 dark:bg-neutral-800" id="profile/log" aria-labelledby="navNotifications">
                    <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                        <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{ route('register.candidate.page') }}">As Candidate</a>
                    </li>
                    <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                        <a class="text-15 font-medium text-gray-800 group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{ route('employer.register.page') }}">As Employer</a>
                    </li>
                </ul>
            </div>
        
            <div class="relative dropdown ml-4">
                <button class="px-4 dropdown-toggle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="font-medium text-gray-800 text-13 dark:text-gray-50"><i class="uil uil-sign-in-alt ltr:mr-1 rtl:ml-1"></i>Log In</span>
                </button>
                <ul class="absolute top-auto z-50 hidden w-48 p-3 list-none bg-white border rounded shadow-lg dropdown-menu border-gray-500/20 xl:ltr:-left-3 ltr:-left-32 rtl:-right-3 dark:bg-neutral-800" id="profile/log" aria-labelledby="navNotifications">
                    <li class="p-2 dropdown-item group/dropdown dark:text-gray-300">
                        <a class="text-15 font-medium text-gray-800  group-data-[theme-color=violet]:group-hover/dropdown:text-violet-500 group-data-[theme-color=sky]:group-hover/dropdown:text-sky-500 group-data-[theme-color=red]:group-hover/dropdown:text-red-500 group-data-[theme-color=green]:group-hover/dropdown:text-green-500 group-data-[theme-color=pink]:group-hover/dropdown:text-pink-500 group-data-[theme-color=blue]:group-hover/dropdown:text-blue-500 group-hover:pl-1.5 transition-all duration-300 ease-in dark:text-gray-50" href="{{ route('login.page') }}">As Candidate or Employer</a>
                    </li>
                   
                </ul>
            </div> 
        </div>
        @endif
    </div>
</div>
