<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class pelapor extends Model
{



 public function prov(){
        return $this->belongsTo('App\province','lokasi','id');
    }
 public function kot(){
     return $this->belongsTo('App\regency','lokasikabupaten','id');
    }

     public function kec(){
     return $this->belongsTo('App\district','kecamatan','id');
    }

     public function kel(){
     return  $this->belongsTo('App\village','desa','id');
    }
}


    
