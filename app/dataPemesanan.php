<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPemesanan extends Model
{
    protected $fillable = [
        'waktu_pesan', 'invoicecetak_no', 'total_harga', 
        'kodepembayaran_id', 'pembayaranstatus_id', 'user_id'
    ];

    public function detailPemesanan(){
        return $this->hasMany(detailPemesanan::class, 'pemesanan_id');
    }

    public function dataUser(){
        return $this->belongsTo(dataUser::class, 'user_id');
    }

    public function statusPembayaran(){
        return $this->belongsTo(statusPembayaran::class, 'pembayaranstatus_id');
    }

    public function kodePembayaran(){
        return $this->belongsTo(kodePembayaran::class, 'kodepembayaran_id');
    }
}
