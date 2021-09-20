<?php
    use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">           
    <!-- Favicon -->
    <link href="{{url('public/user/favicon/favicon.png') }}" rel="icon" type="image/png">
	
    <!-- Basic Page Needs 
        ================================================== -->
    <title>1Page.info | Place for express your things.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta-data')
    <title>1Page.info - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/tailwind-dark.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/uikit.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/custom_style.css') }}">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar_header border-b border-gray-200 from-gray-100 to-gray-50 bg-gradient-to-t  uk-visible@s">
            <a href="#">
                <img src="{{ url('public/user/images/logo.png') }}">
                <img src="{{ url('public/user/images/logo-light.png') }}" class="logo_inverse">
            </a>
            <!-- btn night mode -->
            <a href="#" id="night-mode" class="btn-night-mode" data-tippy-placement="left" title="Switch to dark mode"></a>
        </div>
        <div class="border-b border-gray-20 flex justify-between items-center p-3 pl-5 relative uk-hidden@s">
            <h3 class="text-xl"> Navigation </h3>
            <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: sidebar-active"></span>
        </div>
        @if(Auth::check())
            <div class='sidebar_inner' data-simplebar>
                <div class='flex flex-col items-center my-6 uk-visible@s'>
                    <div class='bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transition m-0.5 mr-2  w-24 h-24'>
                        <img src='../user_page_username/user_page_profilerimg' class='bg-gray-200 border-4 border-white rounded-full w-full h-full'>
                    </div>
                    <P class='text-xl font-medium capitalize mt-4 uk-link-reset'> {{Auth::user()->first_name}} {{Auth::user()->last_name}} </P>
                </div>
                <hr class='-mx-4 -mt-1 uk-visible@s'>
                <ul>
                    <li>
                        <a href='things/index.php'>
                        <i class='uil-document-layout-left'></i>
                        <span> Things </span>
                        </a>
                    </li>
                    <li>
                        <a href='mypages.php'>
                        <i class='uil-web-grid-alt'></i>
                        <span> My Pages </span>
                        </a>
                    </li>
                    <li>
                        <a href='pages/index.php'>
                        <i class='uil-file-alt'></i>
                        <span> All Pages </span>
                        </a>
                    </li>
                    <li>
                        <a href='settings.php'>
                        <i class='uil-bright'></i>
                        <span> Settings </span>
                        </a>
                    </li>
                    <li>
                        <a href='pricing/index.php'>
                        <i class='uil-book-medical'></i>
                        <span> Create </span>
                        </a>
                    </li>
                    <li>
                        <a href='payments.php'>
                        <i class='uil-archive'></i>
                        <span> Payments </span>
                        </a>
                    </li>
                    <li>
                        <a href='company/index.php#help'>
                        <i class='uil-envelope'></i>
                        <span> Help </span>
                        </a>
                    </li>
                    <li>
                        <hr class='my-2'>
                    </li>
                    <li>
                        <a href="{{route('user.logout')}}">
                        <i class='uil-arrow-from-right'></i>
                        <span> Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        @else
            <div class="sidebar_inner" data-simplebar>
                <div class="bg-grey dark:bg-gray-900 shadow-md rounded-md overflow-hidden">
                    <div class="bg-gray-50 dark:bg-gray-800 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:border-gray-800">
                        <h2 class="font-semibold text-lg">World Things</h2>
                    </div>
                    <div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100">
                        
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{url('public/user/images/icons/technology.png')}}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'> <a href='#'>Technology</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{url('public/user/images/icons/finance.png')}}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'> <a href='#'>Finance</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{url('public/user/images/icons/education.png')}}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'> <a href='#'>Education</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{url('public/user/images/icons/lifestyle.png')}}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'><a href='#'>Lifestyle</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{url('public/user/images/icons/printing.png')}}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'> <a href='#'>Print & Media</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{url('public/user/images/icons/popular.png')}}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'> <a href='#'>Popular</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{url('public/user/images/icons/science.png')}}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'> <a href='#'>Science</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{ url('public/user/images/icons/tourism.png') }}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'> <a href='#'>Tourism</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class='flex items-center justify-between py-3' >
                            <div class='flex flex-1 items-center space-x-4'>
                                <a href='#'>
                                    <img src="{{url('public/user/images/icons/famouspeople.png')}}" class='bg-gray-200 rounded-full w-10 h-10'>
                                </a>
                                <div class='flex flex-col'>
                                    <span class='block capitalize font-semibold'> <a href='#'>People</a></span>
                                    
                                </div>
                            </div>
                            
                            
                        </div>   
                    </div>
                </div>
                </br>
                <span>
                <a href="https://www.1page.info" class="text-black">Home</a> .
                <a href="https://www.1page.info/of/register.php" class="text-black">Create 1page.info</a> . 
                <a href="https://www.1page.info/of/company/index.php#about" class="text-grey">About</a> .
                <a href="https://www.1page.info/of/company/index.php#help" class="text-grey">Help</a> .
                <a href="https://www.1page.info/of/company/index.php#terms" class="text-black">Terms & Policy</a> .
                <a href="https://www.1page.info/of/company/index.php#investors" class="text-black">Investors</a>
                </span></br><span>1page.info © 2021. All Rights Reserved.</span>
                </br>
            </div>
        @endif
    </div>
    <div class="main_content">
        <header>
            <div class="header_inner">
                <div class="left-side">
                    <!-- Logo -->
                    <div id="logo" class="uk-hidden@s">
                        <a href="home.html">
                        <img src="{{ url('public/user/images/logo-mobile.png') }}" alt="">
                        <img src="{{ url('public/user/images/logo-mobile-light.png') }}" class="logo_inverse">
                        </a>
                    </div>
                    <div class="triger" uk-toggle="target: #wrapper ; cls: sidebar-active">
                        <i class="uil-bars"></i>
                    </div>
                    <div class="header_search">
                        <input type="text" placeholder="Search..">
                        <div class="icon-search">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="right-side lg:pr-4">
                    <!-- upload -->
                    <a href="{{route('1page')}}"
                        class="bg-pink-500 flex font-bold hidden hover:bg-pink-600 hover:text-white inline-block items-center lg:block max-h-10 mr-4 px-4 py-2 rounded shado text-white">
                        <ion-icon name="add-circle" class="-mb-1
                        mr-1 opacity-90 text-xl uilus-circle"></ion-icon>
                        1page.info
                    </a>
                    <!-- upload dropdown box -->
                    <!-- profile -->
                    <a href="/">
                    <img src="{{url('public/user/images/avatars/tenor.gif')}}" class="header-avatar" alt="">
                    </a>
                </div>
            </div>
        </header>
        <!-- All Alert Message -->
        <!-- success Message -->
        @if ($message = Session::get('success'))
            <div class="alert-success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <!-- Danger Message or error Message -->
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="my-1.5">
                            <div class="alert-danger inset-y-1">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                {{ $error }}
                            </div>
                        </li>
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Body Content Come Here -->
        @if(Auth::check())
        @else
        <div class="bg-white dark:bg-gray-900">
        <div class="lg:p-8 max-w-md max-w-xl lg:my-0 pt-24 mx-auto p-6 space-y-0">
            <h1 class="lg:text-3xl text-xl font-semibold  mb-6"> Search 1Pages.info & Things.</h1>
            <form method="get" action="of/search.php" enctype="multipart/form-data">
                <input name="user_query" type="text" placeholder="Search here...." class="bg-gray-200 mb-2 shadow-none dark:bg-gray-800" style="border: 1px solid #000000 !important;">
                <input style="display:none" type="submit" name="search" value="Search">
            </form>
        </div>
        </div>
        @endif
        <div class="container m-auto">
            @yield('content')
        </div>
    </div>
    

</body>
<script src="{{url('public/assets/js/custom.js')}}"></script>
<script src="{{url('public/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('public/assets/js/jqvalidator.js')}}"></script>
<script src="{{url('public/assets/js/validation.js')}}"></script>
<script src="{{url('public/assets/js/simplebar.js')}}"></script>
<script src="{{url('public/assets/js/tippy.all.min.js')}}"></script>
<script src="{{url('public/assets/js/uikit.js')}}"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
<script>
   (function (window, document, undefined) {
       'use strict';
       if (!('localStorage' in window)) return;
       var nightMode = localStorage.getItem('gmtNightMode');
       if (nightMode) {
           document.documentElement.className += ' dark';
       }
   })(window, document);
   
   
   (function (window, document, undefined) {
   
       'use strict';
   
       // Feature test
       if (!('localStorage' in window)) return;
   
       // Get our newly insert toggle
       var nightMode = document.querySelector('#night-mode');
       if (!nightMode) return;
   
       // When clicked, toggle night mode on or off
       nightMode.addEventListener('click', function (event) {
           event.preventDefault();
           document.documentElement.classList.toggle('dark');
           if (document.documentElement.classList.contains('dark')) {
               localStorage.setItem('gmtNightMode', true);
               return;
           }
           localStorage.removeItem('gmtNightMode');
       }, false);
   
   })(window, document);
</script>
@yield('scripts')
</html>