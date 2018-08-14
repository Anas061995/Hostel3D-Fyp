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
      return view('hosteladmin.hostelreports');

    }
    public function foodreport()
    {
        return view('hosteladmin.requestedfoodreport');
    }
    public function financereport()
    {
        return view('hosteladmin.requestedfinancereport');
    }
    }
