<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $uid=Auth::id();
        $user=Auth::user();
        $uname=$user['email'];

       // $session(['name'=> $uname]);
 
       // $data=task::where('uid','=',$uid)->get();

     //  $data=task::where('uid','=',$uid)->where('title','dashboard')->get();

     $data=task::orderby('title','asc')->get();
 
        return view('home',compact("data"));
 

        return view('home');

      // $value =$r->session()->get('name');
       //echo $value;
    }
}
