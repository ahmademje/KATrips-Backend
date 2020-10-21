<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataBayi extends Model
{
    protected $table = 'data_bayis';
    
    //

    public function data_Penumpang(){
        return $this->hasOne('App\dataPenumpang');
    }
}
