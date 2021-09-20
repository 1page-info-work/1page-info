<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ThingsDetailsMaster;
use App\Models\ThingsMaster;
use App\Models\FamousPeople;
use DB;
class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Things Details
        $thingsDetail = DB::table('things as th')->leftJoin('things_details as td', 'td.thing_id', '=', 'th.id')->orderBy('td.id','desc')->offset(0)
        ->limit(10)->get();
        // Top Famous People Details
        $famousPeople = FamousPeople::orderBy('id','desc')->offset(0)
        ->limit(6)->get();
        return view('user.index', compact('thingsDetail','famousPeople'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thingsDetails(Request $request)
    {
        // dd($request->input());
        $start = $request->start;
        $end = $request->limit;
        $thingsDetail = DB::table('things as th')->leftJoin('things_details as td', 'td.thing_id', '=', 'th.id')->orderBy('td.id','desc')->offset($start)
        ->limit($end)->get();
        // Send Things Data on 
        $html = '';
        foreach($thingsDetail as $row){
           $html.='<div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">
           <!-- post header-->
           <div class="flex justify-between items-center px-4 py-3">
              <div class="flex flex-1 items-center space-x-4">
                 <a>
                    <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">  
                       <img src="'.url('public/user/images/icons/').'/'.$row->image.'" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                    </div>
                 </a>
                 <span class="block capitalize font-semibold dark:text-gray-100"> '.$row->topic.' | Posted: '.$row->thing_detail_date.'</span>
              </div>
           </div>
           <div uk-lightbox>
              <a href="'.url('public/admin/things_images/').'/'.$row->thing_detail_img.'">  
              <img src="'.url('public/admin/things_images/').'/'.$row->thing_detail_img.'" alt="">
              </a>
           </div>
           <div class="py-3 px-4 space-y-3">
              <div class="p-3 dark:border-gray-700">
                 <span>
                    <h1><b>'.$row->thing_detail_title.'</b></h1>
                 </span>
                 <span>'.substr($row->thing_detail_shortinfo,0,200).' <a href="#" class="font-semibold text-pink-600">Know More..</a></span>
              </div>
           </div>
        </div>
        </br>'; 
        
        }
        return response()->json([$html]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
