<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('meta_title', 'Allianze Infosoft UK')</title>
    <meta name="description" content="@yield('meta_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ')">
    <meta name="keywords" content="@yield('meta_keyword', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ')">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Yantramanav:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @yield('css')
    @stack('css')
    <style>
        
    </style>
</head>

<body>
    <!--********************************
   		Code Start From Here 
	******************************** -->




    <!--==============================
     Preloader
    ==============================-->   
    @include('layout.partials.preloader')

    <!--==============================
    Mobile Menu
    ============================== -->
    @include('layout.partials.mobile-menu')

    <!--==============================
	Header Area
    ==============================-->
    @include('layout.partials.header') 

     <!--==============================
          Main Content Area
     ==============================-->

     @yield('content')

    <!--==============================
        Footer Area
    ==============================-->
    @include('layout.partials.footer')

    <!--********************************
			Code End  Here 
	******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

    <!--==============================
    All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!-- Range Slider -->
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter Up -->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!-- Marquee -->
    <script src="{{asset('assets/js/jquery.marquee.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    
    <!-- Main Js File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    @yield('scripts')
    @stack('scripts')
</body>

</html>