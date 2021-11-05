<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelapor;

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
        return view('indexBNPB');
    }
    public function store(Request $request)

    {
        $pelapor = new pelapor;
        $pelapor -> lokasi = $request -> lokasi;
        $pelapor -> nama = $request -> nama;
        $pelapor -> email = $request -> email ;
        $pelapor -> nohp = $request -> nohp ;
        $pelapor -> save();
        return redirect()->back();
        
    }
}
