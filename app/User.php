<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
