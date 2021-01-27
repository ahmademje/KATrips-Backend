<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statusPembayaran extends Model
{
    protected $fillable = [
        'status_pembayaran'
    ];

    public function dataPemesanan(){
        return $this->hasMany(dataPemesanan::class, 'pembayaranstatus_id');
    }
}
