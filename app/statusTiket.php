<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statusTiket extends Model
{
    protected $table = "status_tikets";

    //
    
    public function data_Tiket(){
        return $this->hasOne('App\dataTiket');
    }
}
