<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spop extends Model
{
    use HasFactory;
    protected $table = 'spop';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, '31_nama_jelas_petugas');
    }
}
