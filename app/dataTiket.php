<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataTiket extends Model
{
    protected $table = "data_tikets";

    //
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function status_Tiket(){
        return $this->belongsTo('App\statusTiket');
    }

    public function data_Stasiun(){
        return $this->belongsTo('App\dataStasiun');
    }
}
