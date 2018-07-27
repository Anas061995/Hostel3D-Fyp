<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
/* use App\Models\Form;
use App\Models\Organization;
use App\Models\Department;
use App\Models\Formdetail;
 */
class requestedhosteldetailsController extends Controller
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

    public function requested_details(Request $request)
    {
    $var_id= $request->requestdetails;
    $hostel = \App\Models\Hostel::where('id', $var_id)->first();
    return view('superadmin.requestedhosteldetails',['requestdetails'=>$hostel]);
    }

}
