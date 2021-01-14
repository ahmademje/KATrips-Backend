<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataTiket extends Model
{
    protected $fillable = [
        'gerbong_kode', 'no_kursi',
        'harga', 'status_id',
        'admin_id', 'perjalanan_id'
    ];

    public function getTiket(){
        $tiket = array(
            "tiket_id" => $this->id,
            "waktu_berangkat" => $this->perjalanan->waktu_berangkat,
            "waktu_tiba" => $this->perjalanan->waktu_tiba,
            "harga" => $this->harga,
            "status_tiket" => $this->statusTiketId->status_jenis,
            "lokasi_berangkat" => $this->perjalanan->lokasiBerangkat->stasiun_nama,
            "lokasi_tiba" => $this->perjalanan->lokasiTiba->stasiun_nama,
            "kereta" => $this->dataKeretaKelas->dataKereta->kereta_nama,
            "kelas" => $this->dataKeretaKelas->dataKelas->kelas_nama,
            "gerbong_kode" => $this->gerbong_kode,
            "no_kursi" => $this->no_kursi
        );
        return $tiket;
    }

    public function statusTiketId(){
        return $this->belongsTo(statusTiket::class, 'status_id');
    }

    public function detailPemesanan(){
        return $this->hasOne(detailPemesanan::class, 'tiket_id');
    }

    public function admin(){
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function perjalanan(){
        return $this->belongsTo(Perjalanan::class);
    }
}
