<?php

namespace App\Http\Controllers\hosteladmincontrollers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reportsController extends Controller
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
              $reportdetails = \App\Models\Hostel::all();
                  return view('hosteladmin.hostelreports',['reportdetails'=>$reportdetails]);
          }
      else
      {
          return redirect()->route('welcome')->with(['message' => 'You are not hostel admin']);
      }
}
}
