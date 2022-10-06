<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PelatihanNaker extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'type',
        'judul',
        'nomor_wa_pendaftaran',
        'lokasi_pelatihan',
        'link_pendaftaran',
        'image',
        'deskripsi',
    ];
}
