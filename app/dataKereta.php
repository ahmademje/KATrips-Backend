<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKereta extends Model
{
    protected $table = 'data_keretas';

    //
    
    public function data_Kelas(){
        return $this->belongsToMany('App\dataKelas');
    }
}
