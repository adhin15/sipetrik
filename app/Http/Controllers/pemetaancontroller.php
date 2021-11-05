<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelapor;
use App\province;
use DB;

class pemetaancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   // public function index()
  //  {
  //      $tampil = pelapor::all();
  //      return view('pemetaan',compact('tampil'));
        // if (lokasi = "Yogyakarta") {
        //     get
        // }
        
  //  }

     public function tampil(Request $request)
    {
        $provinces = province::all();   
        if(is_null($request->lokasi)){
            $tampil = pelapor::all(); 

        }
        elseif ($request->lokasi=="semua") {
             $tampil = pelapor::all();
        }
        else{
     $tampil = pelapor::where('lokasi',$request->lokasi)->get();
        }
         
      
        
     
      return view('pemetaan',compact('tampil','provinces'));
    }
        // if (lokasi = "Yogyakarta") {
        //     get
        // }
        
  //  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
