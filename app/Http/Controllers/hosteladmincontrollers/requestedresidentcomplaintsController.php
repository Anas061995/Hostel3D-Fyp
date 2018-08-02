<?php

namespace App\Http\Controllers\hosteladmincontrollers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;
class requestedresidentcomplaintsController extends Controller
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
                $residentcomplaints = \App\Models\Hostel::all();
                    return view('hosteladmin.requestedresidentcomplaints',['residentcomplaints'=>$residentcomplaints]);
            }
        else
        {
            return redirect()->route('welcome')->with(['message' => 'You are not super admin']);
        }
    }

    public function resident_details(Request $request)
    {
      return view('hosteladmin.requestedresidentcomplaints',['residentcomplaints'=>$residentcomplaints]);

    }

}
