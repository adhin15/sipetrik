<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelapor;
use App\laporan;
use App\province;
class verifikasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
        $tampil = pelapor::all();

        return view('verifikasiLaporan',compact('tampil'));
        
    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $datas = DB::table('pelapor ')->get();

        //                     $data = pelapor::find($id);
        //                     foreach($datas as $data){
        //                     DB::table('laporan')->insert(['id' => $data->id ,'korbanmati1' => $data->korbanmat]);
        //                       }
        //                       @endforeach
   //        DB::setFetchMode(PDO::FETCH_ASSOC);
   // $table_records = DB::connection('pelapor')->select("SELECT * from table");     
   // DB::setFetchMode(PDO::FETCH_CLASS); 

   // DB::connection('laporan')->table("table")->insert($table_records);
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        

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
        $update = pelapor::find($id);
        $update -> status = $request -> status;

        $update -> save();

        

        
        // $update1 -> korbanmati1 = $request -> korbanmati ;
        // $update1 -> save();

         return redirect('verif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = pelapor::find($id);
        $hapus -> delete();
        return redirect()->back()->with('message', 'Data Berhasil Dihapus');


    }
}
