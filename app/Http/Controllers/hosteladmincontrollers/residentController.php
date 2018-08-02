<?php

namespace App\Http\Controllers\hosteladmincontrollers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class residentController extends Controller
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
              $residentdetails = \App\Models\Hostel::all();
                  return view('hosteladmin.hostelresidents',['residentdetails'=>$residentdetails]);
          }
      else
      {
          return redirect()->route('welcome')->with(['message' => 'You are not hostel admin']);
      }
}
}
