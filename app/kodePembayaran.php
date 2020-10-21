<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kodePembayaran extends Model
{
    protected $table = "kode_pembayarans";

    //
    public function data_Pemesanan(){
        return $this->hasMany('App\dataPemesanan');
    }
}
