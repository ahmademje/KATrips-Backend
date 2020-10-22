<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKereta extends Model
{
    protected $fillable = [
        'kereta_nama'
    ];

    public function dataKeretaKelas(){
        return $this->hasMany(dataKeretaKelas::class);
    }
}
