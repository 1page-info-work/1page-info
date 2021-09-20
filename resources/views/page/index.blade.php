@extends('layouts.app')

@section('meta-data')<meta name="description" content="1page.info - place for express your things">@endsection
@section('title', 'Create 1Page')
@section('content')
<div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
    <h1 class="lg:text-3xl text-xl font-semibold mb-6"> Create 1Page.info
    </h1>
    <form action="{{route('1page.create')}}" method="POST" id="page_form">
        @csrf
        <p class="mb-2 text-black text-lg">1Page.info Title</p>
        <input name="page_title" id="page_title" type="text" placeholder="set User Page Title" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required>
        <p class="mb-2 text-black text-lg">User 1Page.info Name</p>
        <input name="user_page_name" id="user_page_name" type="text" placeholder="Enter Your User page name" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;" required>
        <p class="mb-2 text-black text-lg">User 1Page.info Name</p>
        <select name="color" id="color" class="mb-2 text-black text-lg">
        <option value="">select 1page.info color</option>
        @foreach($pricing as $prices)
        <option value="{{$prices->id}}">{{$prices->page_color_type}} ₹{{$prices->page_color_rate}}</option>
        @endforeach
        </select>
        <button type="submit" name="page_create" id="page_create" class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">Create 1page.info</button>
    </form>
</div>
@stop
@section('scripts')
<script>
    $("#page_form").validate({
        rules: {
            page_title:{
                required: true,
                minlength: 6,
                maxlength : 50
            },
            user_page_name: {
                required: true,
                maxlength : 20
                noSpace: true,
            },
            color:{
                required: true,
                maxlength : 50  
            }
        },
        messages: {
            page_title:{
                required: "Page Title required",
                minlength: "Minimum 6 letter",
                maxlength : "Maximum 20 letter"
            },
            user_page_name: {
                required: "user name required",
                maxlength : "Maximum 20 letter"
            },
            color: {
                required: "1page.info color required",
                maxlength : "Maximum 50 letter"
            },
        }
    })
	
</script>


@stop