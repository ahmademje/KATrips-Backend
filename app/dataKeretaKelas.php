<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKeretaKelas extends Model
{
    protected $fillable = [
        'kereta_id', 'kelas_id'
    ];

    public function dataKelas(){
        return $this->belongsTo(dataKelas::class, 'kelas_id', 'id');
    }

    public function dataKereta(){
        return $this->belongsTo(dataKereta::class, 'kereta_id', 'id');
    }

    public function perjalanan(){
        return $this->hasMany(Perjalanan::class, 'keretakelas_id', 'id');
    }
}
