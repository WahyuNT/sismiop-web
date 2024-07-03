<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spop extends Model
{
    use HasFactory;
    protected $table = 'spop';
    protected $guarded = ['id'];
}
