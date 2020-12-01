<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataBayi extends Model
{
    protected $fillable = [
        'nama', 'no_nik', 'tgl_lahir'
    ];

    public function dataPenumpang(){
        return $this->hasOne(dataPenumpang::class, 'bayi_id', 'id');
    }
}
