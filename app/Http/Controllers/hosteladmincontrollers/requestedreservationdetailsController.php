<?php

namespace App\Http\Controllers\hosteladmincontrollers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
class requestedreservationdetailsController extends Controller
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
        if ($user->hasRole('hosteladmin'))
        {
                $reservationdetails = \App\Models\Hostel::all();
                    return view('hosteladmin.requestedreservationdetails',['reservationdetails'=>$reservationdetails]);
            }
        else
        {
            return redirect()->route('welcome')->with(['message' => 'You are not super admin']);
        }
    }

    public function reservation_details(Request $request)
    {
    return view('hosteladmin.requestedreservationdetails',['reservationdetails'=>$reservationdetails]);

    }

}
