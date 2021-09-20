<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
      <link href="{{url('public/user/favicon/favicon.png') }}" rel="icon" type="image/png">
      <!-- Basic Page Needs
         ================================================== -->
      <title>1Page.info | Log In</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="1page.info - Place for express your things.">
      <!-- icons
         ================================================== -->
         <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/icon.css') }}">
      <!-- CSS 
         ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/tailwind-dark.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/uikit.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/custom_style.css') }}">
   </head>
   <body class="bg-gray-100">
      <div id="wrapper" class="flex flex-col justify-between h-screen">
         <!-- header-->
         <div class="bg-white py-4 shadow dark:bg-gray-800">
            <div class="max-w-6xl mx-auto">
               <div class="flex items-center lg:justify-between justify-around">
                  <a href="{{url('/')}}">
                  <img src="{{url('public/user/images/logo.png')}}" alt="" class="w-32">
                  </a>
                  <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                     <a href="{{url('/')}}" class="bg-pink-500 pink-500 px-6 py-3 rounded-md shadow text-white">+ 1page.info</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Content-->
         <div>
            <div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
               <h1 class="lg:text-3xl text-xl font-semibold  mb-6"> User | Log in</h1>
               <!-- Error Message Show Here -->
               @if ($errors->any())
                     <div class="">
                        <ul>
                           @foreach ($errors->all() as $error)
                                 <li class="my-1.5">
                                    <div class="alert-danger">
                                       <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                       {{ $error }}
                                    </div>
                                 </li>
                           @endforeach
                        </ul>
                     </div>
               @endif
               <p class="mb-2 text-black text-lg"> Email Id</p>
               <form action="{{route('user.login.create')}}" method="POST">
                  @csrf
                  <input type="text" name="email" placeholder="example@mydomain.com" class="bg-gray-200 mb-2 shadow-none dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;">
                  <p class="mb-2 text-black text-lg"> Password</p>
                  <input type="text"name="password" placeholder="***********" class="bg-gray-200 mb-2 shadow-none dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;">
                  <div class="flex justify-between my-4">
                     <div class="checkbox">
                        <input type="checkbox" name="remeber_me" id="chekcbox1" checked>
                        <label for="chekcbox1"><span class="checkbox-icon"></span>Remember Me</label>
                     </div>
                     <a href="#"> Forgot Your Password? </a>
                  </div>
                  <button type="submit" name="log_in" class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">Login</button>
                  <div class="text-center mt-5 space-x-2">
                     <p class="text-base"> Not registered? <a href="{{url('register')}}" class=""> Create a account </a></p>
                  </div>
               </form>
            </div>
         </div>
         <!-- Footer -->
         <div class="lg:mb-5 py-3 uk-link-reset">
            <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
               <div class="flex space-x-2 text-gray-700 ">
                  <a href="https://www.1page.info" class="text-black">Home</a>
                  <a href="pricing/index.php" class="text-black">Create 1page.info</a>
                  <a href="company/index.php#about" class="text-grey">About</a>
                  <a href="company/index.php#help" class="text-grey">Help</a>
                  <a href="company/index.php#terms" class="text-black">Terms & Policy</a>
                  <a href="company/index.php#investors" class="text-black">Investors</a>
               </div>
               <p class="capitalize"> 1page.info © 2021. All Rights Reserved.</p>
            </div>
         </div>
      </div>
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
      <!-- Scripts
         ================================================== -->
      <script src="{{url('public/assets/js/custom.js')}}"></script>
      <script src="{{url('public/assets/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{url('public/assets/js/jqvalidator.js')}}"></script>
      <script src="{{url('public/assets/js/simplebar.js')}}"></script>
      <script src="{{url('public/assets/js/tippy.all.min.js')}}"></script>
      <script src="{{url('public/assets/js/uikit.js')}}"></script>
      <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
   </body>
</html>