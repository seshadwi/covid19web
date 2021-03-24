<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('pages.home');
    }
    public function gejala()
    {
        $gejalaDatas = DB::table('gejala')->select("*")->get();
        return view('pages.gejala', ["gejalaDatas" => $gejalaDatas]);
    }
}
