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
      return view('hosteladmin.hostelresidents');

    }
    public function residentdetails()
    {
        return view('hosteladmin.requestedresidentdetails');
    }
  }
