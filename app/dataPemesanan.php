<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataPemesanan extends Model
{
    protected $fillable = [
        'waktu_pesan', 'invoicecetak_no', 'total_harga', 
        'kodepembayaran_id', 'pembayaranstatus_id', 'user_id'
    ];
}
