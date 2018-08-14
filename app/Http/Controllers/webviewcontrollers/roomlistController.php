<?php
namespace App\Http\Controllers\webviewcontrollers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class roomlistController extends Controller
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
      return view('webview.roomlist');

    }
    }
