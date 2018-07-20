<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated(Request $request, $user)
    {

            return redirect()->intended('/home');

    }
    public function logout(Request $request)
    {
      if (\Session::has('Error'))
      {
        $mymsg = \Session::get('Error');
      }
        $this->guard()->logout();
        $request->session()->invalidate();
        if(isset($mymsg))
        {
return redirect()->route('login')->with(['message'=>$mymsg]);
        }
        else {
          return redirect()->route('login');
        }

        //return redirect('/wherever');

    }
}
