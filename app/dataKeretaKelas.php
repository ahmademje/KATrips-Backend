<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKeretaKelas extends Model
{
    protected $fillable = [
        'data_kereta_id', 'data_kelas_id'
    ];

    public function dataKelas(){
        return $this->belongsTo(dataKelas::class);
    }

    public function dataKereta(){
        return $this->belongsTo(dataKereta::class);
    }

    public function dataTiket(){
        return $this->hasMany(dataTiket::class);
    }
}
