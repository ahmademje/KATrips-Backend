<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataStasiun extends Model
{
    protected $fillable = [
        'stasiun_nama'
    ];

    public function perjalanan(){
        return $this->hasMany(Perjalanan::class);
    }
}
