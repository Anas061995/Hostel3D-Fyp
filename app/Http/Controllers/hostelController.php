<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Models\Hostel;

 
class HostelController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        if ($user->hasRole('superadmin')) { 
            $hosteldetails = \App\Models\Hostel::all();
            
            return view('superadmin.hostels',['hosteldetails'=>$hosteldetails]); 
        }
        else{
            return redirect()->route('welcome')->with(['message' => 'You are not super admin']);
        }
               

    }

}
