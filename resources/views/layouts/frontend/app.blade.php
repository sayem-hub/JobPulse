<!DOCTYPE html>
<html lang="en" dir="ltr" data-mode="light" class="scroll-smooths group" data-theme-color="violet">
    <head>
        <meta charset="utf-8" />
        <title>JobPulse - @yield('title')</title>
        <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta
          content="Tailwind Multipurpose Admin & Dashboard Template"
          name="description"/>
        <meta content="" name="Themesbrand" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
        <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">
         <!-- Swiper Css -->
        <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}" />
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        

    </head>
    
    <body class="bg-white dark:bg-neutral-800">
        
            @include('layouts.frontend.header')
        
            @include('layouts.frontend.navbar')

        <div class="main-content">
            <div class="page-content">



               @yield('content')


                
            </div>
        </div>
        
      
        @include('layouts.frontend.footer')

     <script src="https://unicons.iconscout.com/release/v4.0.0/script/monochrome/bundle.js"></script>
     <script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
     <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

        <script src="{{ asset('assets/js/pages/switcher.js') }}"></script>
    
        <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

        <script src="{{ asset('assets/js/pages/job-list.init.js') }}"></script>
    
        <script src="{{ asset('assets/js/pages/dropdown&modal.init.js') }}"></script>

        <!-- Swiper Js -->
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/swiper.init.js') }}"></script>

        <script src="{{ asset('assets/js/pages/nav&tabs.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script> 

        
        <script src="{{asset('assets/js/axios.min.js')}}"></script>
</body>
</html>
