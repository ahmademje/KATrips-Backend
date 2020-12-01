<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKelas extends Model
{
    protected $fillable = [
        'kelas_nama'
    ];

    public function dataKeretaKelas(){
        return $this->hasMany(dataKeretaKelas::class);
    }
}
