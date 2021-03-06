<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
/* use App\Models\Form;
use App\Models\Organization;
use App\Models\Department;
use App\Models\Formdetail;
 */
class HomeController extends Controller
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
            return redirect()->route('superadmin.dashboard');
        }
        elseif($user->hasRole('hosteladmin')){
            if($user->hasPermission('none'))
            {
                return redirect()->route('user.logout');

            }
            elseif($user->hasPermission('hostels'))
            {
              return redirect()->route('hosteladmin.hosteladmindashboard');
            }
        }


    }

}
