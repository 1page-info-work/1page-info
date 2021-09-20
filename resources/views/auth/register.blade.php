<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
      <link href="{{url('public/user/favicon/favicon.png') }}" rel="icon" type="image/png">
      <!-- Basic Page Needs
         ================================================== -->
      <title>Create - 1page.info</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Instello - Sharing Photos platform HTML Template">
      <!-- icons
         ================================================== -->
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/icon.css') }}">
      <!-- CSS 
         ================================================== -->
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/tailwind-dark.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/uikit.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/custom_style.css') }}">
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
      <link href="{{url('public/user/favicon/favicon.png') }}" rel="icon" type="image/png">
      <!-- Basic Page Needs 
         ================================================== -->
      <title>1Page.info | Place for express your things.</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Instello - Sharing Photos platform HTML Template">
      <title>1Page.info - @yield('title')</title>
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/icon.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/tailwind-dark.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ url('public/assets/css/uikit.css') }}">
      <style>
         .error{
         color: #ec4899;
         }
      </style>
   </head>
   <body class="bg-gray-100">
      <div id="wrapper" class="flex flex-col justify-between h-screen">
         <!-- header-->
         <div class="bg-white py-4 shadow dark:bg-gray-800">
            <div class="max-w-6xl mx-auto">
               <div class="flex items-center lg:justify-between justify-around">
                  <a href="trending.html">
                  <img src="{{ url('public/user/images/logo.png') }}" alt="" class="w-32">
                  </a>
                  <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                     <a href="{{route('user.login')}}" class="py-3 px-4">Login</a>
                     <a href="{{route('user.register')}}" class="bg-pink-500 pink-500 px-6 py-3 rounded-md shadow text-white">Register</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Content-->
         <div>
            <div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
               <h1 class="lg:text-3xl text-xl font-semibold mb-6"> Register to manage your account.
               </h1>
               <!-- Error Message Show Here -->
               @if ($errors->any())
                     <div class="">
                        <ul>
                           @foreach ($errors->all() as $error)
                                 <li class="my-1.5">
                                    <div class="alert-danger inset-y-1">
                                       <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                       {{ $error }}
                                    </div>
                                 </li>
                           @endforeach
                        </ul>
                     </div>
               @endif
               <p class="mb-2 text-black text-lg"> Your Name </p>
               <form action="{{route('user.register.create')}}" method="post" id="register_form">
                  @csrf
                  <div class="flex lg:flex-row flex-col lg:space-x-2">
                     <input name="first_name" id="first_name" type="text" placeholder="First Name" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required value="{{old('first_name')}}">
                     <input name="last_name" id="last_name" type="text" placeholder="Last Name" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required value="{{old('last_name')}}">
                  </div>
                  <p class="mb-2 text-black text-lg">Username <span style="color:green;" id="availability"></span> </p>
                  <input name="username" id="username" type="text" placeholder="Set username" id="username" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required value="{{ old('username')}}">
                  <p class="mb-2 text-black text-lg"> Email Id</p>
                  <input name="email" id="email" type="email" placeholder="Your Email Id" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required value="{{ old('email')}}">
                  <p class="mb-2 text-black text-lg"> Password </p>
                  <input name="password" id="password" type="password" placeholder="Set 8 Characters Password." class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required>
                  <input name="confirmed" id="confirmed" type="text" placeholder="Confirm Password" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required > 
                  <div class="flex justify-start my-4 space-x-1">
                     <div class="checkbox">
                        <input type="checkbox" name="remember_me" id="chekcbox1" checked>
                        <label for="chekcbox1">
                        <span class="checkbox-icon"></span> 
                        By clicking Agree & Join, you agree to the 1page.info.  <a href="/">User Agreement, Privacy Policy, and Cookie Policy. You may receive email for varification your account.</a></label>
                     </div>
                  </div>
                  <button type="submit" name="register" id="register" class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">Create 1page.info</button>
                  <div class="text-left mt-5 space-x-2">
                     <p class="text-base"> If you have already account? Please<a href="{{url('login')}}"> Login</a></p>
                  </div>
               </form>
            </div>
         </div>
         <!-- Footer -->
         <div class="lg:mb-5 py-3 uk-link-reset">
            <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
               <div class="flex space-x-2 text-gray-700 uppercase">
                  <a href="#"> About</a>
                  <a href="#"> Help</a>
                  <a href="#"> Terms</a>
                  <a href="#"> Privacy</a>
               </div>
               <p class="capitalize"> © copyright {{date('Y')}} by 1page.info</p>
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
      <script src="{{url('public/assets/js/validation.js')}}"></script>
      <script src="{{url('public/assets/js/simplebar.js')}}"></script>
      <script src="{{url('public/assets/js/tippy.all.min.js')}}"></script>
      <script src="{{url('public/assets/js/uikit.js')}}"></script>
      <script> 
        $(document).ready(function(){ 
            $('#username').keyup(function(){
            
                var username = $(this).val();
                if(username ==""){
                    $('#availability').html('');
                } else {
                        $.ajax({
                        url:'funcns/checkdata.php',
                        method:"POST",
                        data:{user_username:username},
                        success:function(data)
                        {
                            if(data != '0'){
                                $('#availability').html('<span class="text-danger">Username not available. Plz set another</span>');
                            }
                            else{
                                $('#availability').html('<span class="text-success">Username Available</span>');
                            }
                        }
                    })
                }
            });
        
        }); 
      </script>
      <script>
         $("#register_form").validate({
            rules: {
               username:{
                  required: true,
                  minlength: 6,
                  maxlength : 20,
                  noSpace: true
               },
               email: {
                  required: true,
                  email: true,
                  maxlength : 50
               },
               password: {
                  required: true,
                  minlength: 6,
                  maxlength : 15
               },
               confirmed: {
                  required: true,
                  minlength: 6,
                  maxlength : 15,
                  equalTo: "#password"
               }
         },
         messages: {
            username:{
               required: "Username required",
               minlength: "Minimum 6 letter",
               maxlength : "Maximum 20 letter",
               noSpace:"Space not allowed"
            },
            email: {
               required: "email required",
               email: "Please Enter Correct Email",
               maxlength : "Maximum 50 letter"
            },
            password: {
               required: "Password required",
               minlength: "Minimum 6 letter",
               maxlength : "Maximum 15 letter",
            },
            confirmed: {
               required: "Password required",
               minlength: "Minimum 6 letter",
               maxlength : "Maximum 15 letter",
               equalTo : "Password Mismatch"
            }
         }
         })
         
      </script>
   </body>
</html>
