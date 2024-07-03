<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lspop extends Model
{
    use HasFactory;

    protected $table = 'lspop';
    protected $guarded = ['id'];
}
