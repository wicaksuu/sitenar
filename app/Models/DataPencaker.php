<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPencaker extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'lowongan_id',
        'status',
    ];
}
