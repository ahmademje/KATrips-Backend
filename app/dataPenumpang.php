<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPenumpang extends Model
{
    protected $fillable = [
        'nama_ktp', 'no_ktp', 'bayi_id', 'user_id'
    ];

    public function dataBayi(){
        return $this->belongsTo(dataBayi::class);
    }

    public function dataUser(){
        return $this->belongsTo(dataUser::class);
    }

    public function detailPemesanan(){
        return $this->hasOne(detailPemesanan::class, 'penumpang_id');
    }
}
