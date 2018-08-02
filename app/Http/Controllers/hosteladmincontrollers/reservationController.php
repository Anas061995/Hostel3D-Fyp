<?php

namespace App\Http\Controllers\hosteladmincontrollers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reservationController extends Controller
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
                  return view('hosteladmin.hostelreservations',['reservationdetails'=>$reservationdetails]);
          }
      else
      {
          return redirect()->route('welcome')->with(['message' => 'You are not hostel admin']);
      }
}
public function reject_req(Request $request)
{
$var_id= $request->id;
dd($var_id);
}
}
