<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $fillable = [
        'waktu_tiba', 'waktu_berangkat', 'keretakelas_id',
        'lokasi_berangkat_id', 'lokasi_tiba_id',
    ];

    public function lokasiBerangkat(){
        return $this->belongsTo(dataStasiun::class, 'lokasi_berangkat_id');
    }

    public function lokasiTiba(){
        return $this->belongsTo(dataStasiun::class, 'lokasi_tiba_id');
    }

    public function dataKeretaKelas(){
        return $this->belongsTo(dataKeretaKelas::class, 'keretakelas_id');
    }

    public function dataTiket(){
        return $this->hasMany(dataTiket::class, 'perjalanan_id');
    }
}
