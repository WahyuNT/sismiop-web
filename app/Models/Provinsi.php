<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';
    protected $guarded = ['id'];

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'KD_PROPINSI');
    }
    public function dati2()
    {
        return $this->hasMany(Dati2::class, 'KD_PROPINSI');
    }
}
