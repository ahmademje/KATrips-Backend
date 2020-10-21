<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPenumpang extends Model
{
    protected $table = "data_penumpangs";
    //

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function data_Bayi(){
        return $this->belongsTo('App\dataBayi');
    }
}
