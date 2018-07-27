<?php

namespace App\Http\Controllers\superadmincontrollers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
/* use App\Models\Form;
use App\Models\Organization;
use App\Models\Department;
use App\Models\Formdetail;
 */
class hostelspaymentController extends Controller
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
            return view('superadmin.hostelspayment');
        }
        else{
            return redirect()->route('welcome')->with(['message' => 'You are not super admin']);
        }


    }

}
