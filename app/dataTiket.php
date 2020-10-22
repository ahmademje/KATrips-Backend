<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataTiket extends Model
{
    protected $fillable = [
        'waktu_berangkat', 'waktu_tiba',
        'gerbong_kode', 'no_kursi', 'harga',
        'data_kereta_kelas_id', 'status_id',
        'lokasi_berangkat', 'lokasi_tiba'
    ];

    public function getTiket(){
        $tiket = array(
            "tiket_id" => $this->id,
            "waktu_berangkat" => $this->waktu_berangkat,
            "waktu_tiba" => $this->waktu_tiba,
            "harga" => $this->harga,
            "status_tiket" => $this->statusTiketId->status_jenis,
            "lokasi_berangkat" => $this->lokasiBerangkat->stasiun_nama,
            "lokasi_tiba" => $this->lokasiTiba->stasiun_nama,
            "kereta" => $this->dataKeretaKelas->dataKereta->kereta_nama,
            "kelas" => $this->dataKeretaKelas->dataKelas->kelas_nama,
            "gerbong_kode" => $this->gerbong_kode,
            "no_kursi" => $this->no_kursi
        );
        return $tiket;
    }

    public function dataKeretaKelas(){
        return $this->belongsTo(dataKeretaKelas::class);
    }

    public function lokasiBerangkat(){
        return $this->belongsTo(dataStasiun::class, 'lokasi_berangkat');
    }
    
    public function lokasiTiba(){
        return $this->belongsTo(dataStasiun::class, 'lokasi_tiba');
    }

    public function statusTiketId(){
        return $this->belongsTo(statusTiket::class, 'status_tiket_id');
    }
}
