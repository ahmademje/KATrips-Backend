<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $fillable = [
        'waktu_tiba', 'waktu_berangkat', 'keretakelas_id',
        'lokasi_berangkat_id', 'lokasi_tiba_id', 'penumpang_tersedia', 'harga'
    ];

    public function getPerjalananForUser(){
        $perjalanan = array (
            "id" => $this->id,
            "waktu_berangkat" => $this->waktu_berangkat,
            "waktu_tiba" => $this->waktu_tiba,
            "kelas" => $this->dataKeretaKelas->dataKelas->kelas_nama,
            "kereta" => $this->dataKeretaKelas->dataKereta->kereta_nama,
            "harga" => $this->harga,
            "lokasi_berangkat" => $this->lokasiBerangkat->nama,
            "lokasi_tiba" => $this->lokasiTiba->nama,
            "penumpang_tersedia" => $this->penumpang_tersedia
        );
        return $perjalanan;
    }

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
