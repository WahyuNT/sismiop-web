<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dati2 extends Model
{
    use HasFactory;
    protected $table = 'dati2';
    protected $guarded = ['id'];

    public function kecamatan()
    {
        return $this->hasMany(Kecamatan::class, 'KD_DATI2');
    }
}
