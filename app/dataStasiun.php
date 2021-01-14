<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataStasiun extends Model
{
    protected $fillable = [
        'nama', 'kode'
    ];

    public function perjalanan(){
        return $this->hasMany(Perjalanan::class);
    }
}
