<?php

namespace App\Http\Controllers\webcontrollers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class webregisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('webview.webregistration');
    }


}
