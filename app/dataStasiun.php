<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataStasiun extends Model
{
    protected $fillable = [
      'stasiun_nama'  
    ];

    public function dataTiket(){
        return $this->hasMany(dataTiket::class);
    }
}
