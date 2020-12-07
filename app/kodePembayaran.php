<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kodePembayaran extends Model
{
    protected $fillable = [
        'pembayarankode_no'
    ];

    public function dataPemesanan(){
        return $this->hasOne(dataPemesanan::class, 'kodepembayaran_id');
    }
}
