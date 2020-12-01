<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statusTiket extends Model
{
    protected $fillable = [
        'status_jenis'
    ];

    public function dataTiket(){
        return $this->hasMany(dataTiket::class);
    }
}
