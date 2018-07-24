<?php

namespace App\Http\Controllers\superadmincontrollers;

use App\Http\Controllers\Controller;
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
    public function selected_details(Request $request)
    {
    $var_id= $request->id;

    $hostel = \App\Models\Hostel::where('id', $var_id)->first();
    return view('superadmin.hosteldetails',['hostel'=>$hostel]);

    }

}
