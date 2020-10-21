<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPemesanan extends Model
{
    protected $table = "data_pemesanans";
    
    //
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function kode_Pembayaran(){
        return $this->belongsTo('App\kodePembayaran');
    }
}
