<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
/* use App\Models\Form;
use App\Models\Organization;
use App\Models\Department;
use App\Models\Formdetail;
 */
class registrationrequestsController extends Controller
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
        if ($user->hasRole('superadmin'))
        {
                $hosteldetails = \App\Models\Hostel::all();
                    return view('superadmin.registrationrequests',['hosteldetails'=>$hosteldetails]);
            }      
        else
        {
            return redirect()->route('welcome')->with(['message' => 'You are not super admin']);
        }          
    }

    public function accept_req(Request $request)
    {
    $var_id= $request->id;
    $user = \App\User::where('id', $var_id)->first();
    $user->syncPermissions('hostels');
    return redirect()->back()->with(['message'=> 'Request has been successfully accepted']);
    }

    public function reject_req(Request $request)
    {
    $var_id= $request->id;
    dd($var_id);
    }

}

