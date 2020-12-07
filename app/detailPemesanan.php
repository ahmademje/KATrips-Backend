<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailPemesanan extends Model
{
    protected $fillable = [
        'penumpang_id', 'tiket_id', 'pemesanan_id'
    ];

    public function dataPenumpang(){
        return $this->belongsTo(dataPenumpang::class, 'penumpang_id', 'id');
    }

    public function dataTiket(){
        return $this->belongsTo(dataTiket::class, 'tiket_id');
    }

    public function dataPemesanan(){
        return $this->belongsTo(dataPemesanan::class, 'pemesanan_id');
    }
}
