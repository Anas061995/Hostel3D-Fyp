<?php

namespace App\Http\Controllers\hosteladmincontrollers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class complaintsController extends Controller
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
      {
        $user = \Auth::user();
        if ($user->hasRole('hosteladmin'))
        {
                $residentcomplaints = \App\Models\Hostel::all();
                    return view('hosteladmin.hostelcomplaints',['residentcomplaints'=>$residentcomplaints]);
            }
        else
        {
            return redirect()->route('welcome')->with(['message' => 'You are not hostel admin']);
        }
  }
}
public function completed(Request $request)
{
$var_id= $request->id;
$user = \App\User::where('id', $var_id)->first();
$user->syncPermissions('hostels');
return redirect()->back()->with(['message'=> 'Status has been successfully changed']);
}
  public function pending(Request $request)
  {
  $var_id= $request->id;
  dd($var_id);
  }
  }
