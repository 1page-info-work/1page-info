<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PagePricing;
use App\Models\Page;
use App\Models\PageOrders;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class MainPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select Page Pricing data
        $pricing = PagePricing::get();
        return view('page.index',compact('pricing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // validate page 
        $validated = $request->validate([
            'page_title' => 'required|string|min:2|max:50',
            'user_page_name' => 'required|unique:users_page_details|min:2|max:20',
            'color' => 'required|max:2',
        ]);
        $order = $request->input();
        $data = [
            "users_id" => Auth::user()->id,
            "page_title" => $request->page_title,
            "user_page_name" => $request->user_page_name,
            "user_page_color" => $request->color,
            "status" => 0,
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ];
        // create 1page.info
        $pageId = Page::insertGetId($data);
        // Set Page name in user Session
        session(['page_id' => $pageId]);
        // Get Pricing details by pricing color id
        $pricing = PagePricing::where('id',$request->color)->first();
        $order['pricing'] = $pricing;
        session(['pricing' => $pricing]);
        return view('page.orderpage', compact('order'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $data = $request->input();
        if(!empty($data["razorpay_payment_id"])) {
            $page_id = session('page_id');
            $pricing = session('pricing');
            $page_id = Page::where('id', $page_id)->update(['status' => 1]);
            $order = [
                "page_id"=>$page_id,
                "amount"=>$pricing['page_color_rate'],
                "payment_gateway"=>"rozar pay",
                "currency"=>"INR",
                "payment_id"=>$data["razorpay_payment_id"],
                "payment_status"=>"success",
                "status"=>1,
                "created_at"=> Carbon::now(),
                "updated_at"=> Carbon::now()
            ];
            PageOrders::insert($order);
            return redirect('/1page')->withSuccess("Page Create successfully!!");

        } else {
            return redirect('/')->withError("Payment Process Failed!!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
