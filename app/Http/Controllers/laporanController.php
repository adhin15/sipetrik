<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelapor;
use App\laporan;

class laporanController extends Controller
{
     public function index()
    {
                
        $tampil = pelapor::all();
        // $detail = pelapor::all();
        

        return view('reportnews',compact('tampil'));
        
    
        
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
        $pelapor = new pelapor;

        // $laporan -> korbanmati1 = $request -> korbanmati ;
 
 
        $pelapor -> korbanberat = $request -> korbanberat ;
        $pelapor -> korbansedang = $request -> korbansedang ;
        $pelapor -> korbanringan = $request -> korbanringan ;
        $pelapor -> prioritas = $request -> prioritas ;
        $pelapor -> save();
        return redirect()->back()->with('success','Berhasil!'); 

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
        
        $edit = pelapor::find($id);
        
        return view('reportDetail',compact('edit'));
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
        $update -> korbanmati = $request -> korbanmati ;
        $update -> korbanberat = $request -> korbanberat ;
        $update -> korbansedang = $request -> korbansedang ;
        $update -> korbanringan = $request -> korbanringan ;
        $update -> prioritas = $request -> prioritas ;

        $update -> save();

        

        
        // $update1 -> korbanmati1 = $request -> korbanmati ;
        // $update1 -> save();
        return redirect('laporan');
         
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
