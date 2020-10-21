<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataStasiun extends Model
{
    protected $table = "data_stasiuns";

    //
    
    public function data_Tiket(){
        return $this->hasOne('App\dataTiket');
    }
}
