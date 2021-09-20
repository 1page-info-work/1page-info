@extends('layouts.app')
@section('meta-data')<meta name="description" content="1page.info - Sharing Photos platform HTML Template">@endsection
@section('title', 'Home Page')
@section('content')

<h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-6"> Things </h1>
<!-- Search Box -->
@if(Auth::check())
<div class="lg:m-0 -mx-5 flex justify-between py-4 relative space-x-3 uk-sticky dark-tabs" uk-sticky="cls-active: bg-gray-100 bg-opacity-95" style="">
   <div class="flex overflow-x-scroll lg:overflow-hidden lg:pl-0 pl-5 space-x-3">
      <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Shop</a>
      <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> headphones  </a>
      <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Parfums </a>
      <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Fruits </a>
      <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Mobiles  </a>
      <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Laptops </a>
   </div>
</div>
@endif

<!-- Search Box -->
   <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">
      <!-- left sidebar-->
      <div class="space-y-5 flex-shrink-0 lg:w-7/12">
         <div id="load_data"></div>
         <div class="flex justify-center mt-6" id="toggle" uk-toggle="target: #toggle ;animation: uk-animation-fade">
            <div id="load_data_message"></div>
         </div>
      </div>
      <!-- right sidebar-->
      <div class="lg:w-5/12">
         <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden">
            <div class="bg-white-50 dark:bg-gray-800 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:border-gray-800">
               <h2 class="font-semibold text-lg">Place for express your things</h2>
            </div>
            <div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100">
               <div class="bg-red-500 max-w-full h-40 rounded-lg relative overflow-hidden uk-transition-toggle"> 
                  <a href="#story-modal" uk-toggle>
                  <img src="{{url('public/user/images/post/intro.png')}}" class="w-full h-full absolute object-cover inset-0">
                  </a>
               </div>
            </div>
            <div class="bg-white-50 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:bg-gray-800 dark:border-gray-800">
               <a href="{{route('user.register')}}" class="bg-pink-500 flex font-bold hidden hover:bg-pink-600 hover:text-white inline-block items-center lg:block max-h-10 mr-4 px-4 py-2 rounded shado text-white">
                  <ion-icon name="add-circle" class="-mb-1 mr-1 opacity-90 text-xl uilus-circle"></ion-icon>
                  Create 1page.info 
               </a>
            </div>
         </div>
         <div class="mt-5" uk-sticky="offset:28; bottom:true ; media @m">
            <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden">
               <div class="bg-gray-50 dark:bg-gray-800 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:border-gray-800">
                  <h2 class="font-semibold text-lg">World Famous People</h2>
                  <a href="of/pages/index.php"> See all</a>
               </div>
               <div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100">
                  @if(isset($famousPeople))
                  <div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100">
                  @foreach($famousPeople as $people)
                     <div class='flex items-center justify-between py-3' >
                           <div class='flex flex-1 items-center space-x-4'>
                              <a href="{{route('1page.famous.people', '$people->user_page_title')}}">
                              <img src="{{url('public/admin/images/famouspeople/').'/'.$people->user_page_profilerimg}}" class='bg-gray-200 rounded w-10 h-10'>
                              </a>
                              <div class='flex flex-col'>
                                 <span class='block capitalize font-semibold'>{{@$people->user_page_title}}</span>
                                 <span class='block capitalize text-sm'>@famouspeople</span>
                              </div>
                           </div>
                           <a href="{{route('1page.famous.people', '@$people->user_page_title')}}" class='border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800'> View </a>
                        </div>
                     @endforeach
                  </div>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>

<!-- Story modal -->
<div id="story-modal" class="uk-modal-container" uk-modal>
   <div class="uk-modal-dialog story-content p-6 bg-white dark:bg-gray-900 dark:text-gray-100">
      <button class="uk-modal-close-default lg:-mt-9 lg:-mr-9 -mt-5 -mr-5 shadow-lg bg-white rounded-full p-4 transition dark:bg-gray-600 dark:text-white" type="button" uk-close></button>
      <div class="story-modal-media bg-white dark:bg-gray-900 dark:text-gray-100">
         <video controls class="inset-0 w-full object-cover">
            <source src="{{url('public/user/images/post/intro.mp4')}}" type="video/mp4">
         </video>
         </br>
         <h1 style="font-size:20px;"><b>About 1page.info</b></h1>
         <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
         <hr class="-mx-4 my-3">
         <a href="{{route('1page')}}" class="bg-pink-500 flex font-bold hidden hover:bg-pink-600 hover:text-white inline-block items-center lg:block max-h-10 mr-4 px-4 py-2 rounded shado text-white">
            <ion-icon name="add-circle" class="-mb-1 mr-1 opacity-90 text-xl uilus-circle"></ion-icon>
            Create 1page.info 
         </a>
      </div>
   </div>
</div>

@stop
@section('scripts')
<script>
    $(document).ready(function(){
        
        var limit = 4;
        var start = 0;
        var action = 'inactive';
        function load_country_data(limit, start)
        {
        $.ajax({
        url:"{{route('1page.things.details')}}",
        method:"POST",
        data:{limit:limit, start:start},
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        cache:false,
        success:function(data)
        {
         //   console.log(data);
        $('#load_data').append(data);
        if(data == '')
        {
        $('#load_data_message').html("<a class='bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white'>No more things.</a>");
            action = 'active';
            }
        else
        {
        $('#load_data_message').html("<a class='bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white'>Loading...</a>");
            action = "inactive";
        }
        }
        });
        }

        if(action == 'inactive')
        {
        action = 'active';
        load_country_data(limit, start);
        }
        $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
        {
        action = 'active';
        start = start + limit;
        setTimeout(function(){
        load_country_data(limit, start);
        }, 1000);
        }
        });
        
    });
</script>
@stop