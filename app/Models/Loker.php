<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_lowongan',
        'email',
        'nomor_wa_pendaftaran',
        'lokasi_kerja',
        'link_pendaftaran',
        'deskripsi',
        'image',
        'user_id',
    ];
}
