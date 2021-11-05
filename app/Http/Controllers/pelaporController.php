<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\pelapor;
use App\laporan;
use App\province;
use App\regency;
use App\district;
use App\village;
use DB;



use Illuminate\Foundation\Auth\AuthenticatesUsers;


class pelaporController extends Controller
{
    use AuthenticatesUsers;
        
   public function index()
    {
                $tampil = pelapor::all();
  $provinces = DB::table('provinces')->orderBy('provinces.name')->pluck("name","id")->all();   
      
        return view('indexs',compact('provinces','tampil'));
    }
public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $regencies = DB::table('regencies')->where('province_id',$request->id_province)->pluck("name","id")->all();
            $districts = DB::table('districts')->where('regency_id',$request->id_regency)->pluck("name","id")->all();
            $villages = DB::table('villages')->where('district_id',$request->id_district)->pluck("name","id")->all();
            $data = view('ajax-select',compact('regencies','districts','villages'))->render();
            return response()->json(['options'=>$data]);
        }
    }

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

    	
   		
   		// $path = $request->file->store('file');
   		// $fileName   = $file->getClientOriginalName();
        // $request->file('file')->move("upload/", $fileName);
    	
    	
        /*$ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->file = $newName;    	*/

        if($request->hasFile('file')){
        	
        	$filename = $request->file->getClientOriginalName();
        	$request->file->storeAs('public/upload',$filename);
            

        }	

        $pelapor = new pelapor;

        $filename = $request->file->getClientOriginalName();
       	$pelapor -> file = $filename;
       	
       	$pelapor -> status = $request -> status;
        $pelapor -> namabencana = $request -> namabencana;
        $pelapor -> lokasi = $request -> id_province;
        $pelapor -> lokasikabupaten = $request -> id_regency;
        $pelapor -> kecamatan = $request -> id_district;
        $pelapor -> desa = $request -> id_villages;
        $pelapor -> nama = $request -> nama;
        $pelapor -> email = $request -> email ;
        $pelapor -> nohp = $request -> nohp ;
        $pelapor -> korbanmati = $request -> korbanmati ;
        $pelapor -> korbanberat = $request -> korbanberat ;
        $pelapor -> korbansedang = $request -> korbansedang ;
        $pelapor -> korbanringan = $request -> korbanringan ;
        $pelapor -> save();


        return redirect()->back()->with('alert-succes','Terima Kasih,laporan anda akan segera diverifikasi');
        
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
        $pelapor -> lokasi = $request -> lokasi;
        $pelapor -> nama = $request -> nama;
        $pelapor -> email = $request -> email ;
        $pelapor -> nohp = $request -> nohp ;
        $update -> save();
 
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
