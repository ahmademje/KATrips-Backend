<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataUser extends Model
{
    protected $fillable = [
        'nama', 'email', 'password', 'alamat', 'tgl_lahir'
    ];

    public function dataPenumpang(){
        return $this->hasMany(dataPenumpang::class, 'user_id', 'id');
    }
}
