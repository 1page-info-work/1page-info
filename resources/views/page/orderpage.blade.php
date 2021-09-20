@extends('layouts.app')

@section('meta-data')<meta name="description" content="1page.info - place for express your things">@endsection
@section('title', 'Order Your Page')
@section('content')
<p class='text-xl font-medium capitalize mt-4 uk-link-reset'>Payment Page</p>
Please don't refresh your page while processing your paymnet...
@if(isset($order))
<table class="" border="1">
    <tr>
        <th>Page Details | Payment</th>
    </tr>
    <tr colspan="2">
        <td>Page Title Name</td>
        <td>
            {!! $order['page_title'] !!}
        </td>
    </tr>
    <tr>
        <td>Page Name</td>
        <td>
            {!! $order['user_page_name'] !!}
        </td>
    </tr>
    <tr>
        <td>
            Payment
        </td>
        <td>
            {!! $order['pricing']['page_color_rate'] !!}
        </td>
    </tr>
</table>
@endif
<form action="{{ route('1page.store') }}" method="POST">
    @csrf
    <script src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="{{ env('RAZORPAY_KEY') }}"
        data-amount="{{ $order['pricing']['page_color_rate']*100 }}"
        data-currency="INR"
        data-buttontext="Pay {{$order['pricing']['page_color_rate']}} INR"
        data-name="1page.info"
        data-description="Place for express your things."
        data-image="{{url('public/user/favicon/favicon.png') }}"
        data-prefill.name="{{Auth::user()->first_name}} {{Auth::user()->last_name}}"
        data-prefill.email="{{Auth::user()->email}}"
        data-theme.color="#CCCCCC">
    </script>
</form>
@endsection
@section('scripts')
@endsection