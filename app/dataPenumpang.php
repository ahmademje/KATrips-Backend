<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPenumpang extends Model
{
    protected $fillable = [
        'nama_ktp', 'no_ktp', 'bayi_id', 'user_id'
    ];

    public function dataBayi(){
        return $this->belongsTo(dataBayi::class, 'bayi_id');
    }

    public function dataUser(){
        return $this->belongTo(dataUser::class, 'user_id');
    }
}
