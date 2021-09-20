<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Mail\UserRegister;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function __construct() {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->input());
        $validated = $request->validate([
            'first_name' => 'required|string|min:2|max:20',
            'last_name' => 'required|string|min:2|max:20',
            'username' => 'required|regex:/^\S*$/u|unique:users|max:20',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|min:6|max:15',
        ]);
        $user = [
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'status'=>1,
            'remember_token'=>$request->_token,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ];
        // Insert Records In Data base
        User::insertGetId($user);
        // welcome Email Send To User
        Mail::to($request->email)->send(new UserRegister($url="{{url('/')}}"));
        // Login User 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
            ->withSuccess('You can create now 1page. Please verify your email.');
        }
        return redirect("login")->withSuccess('Credentials are wrong.');


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
