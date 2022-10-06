<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'wa',
        'ktp',
        'kk',
        'npwp',
        'alamat',
        'no_tlp',
        'kode_pos',
        'nama_pemilik_usaha',
        'alamat_pemilik_usaha',
        'jenis_usaha',
        'village_id_pemilik_usaha',
        'regencie_id_pemilik_usaha',
        'province_id_pemilik_usaha',
        'district_id_pemilik_usaha',
        'village_id',
        'regencie_id',
        'province_id',
        'district_id',
        'nomor_bpjs',
        'omset',
        'jumlah_tenaga_kerja',
        'agama',
        'pendidikan_terakhir',
        'jurusan',
        'tahun_kelulusan',
        'nama_sekolah',
        'jabatan_dalam_negeri',
        'wilayah_kerja_dalam_negeri',
        'province_id_dalam_negeri',
        'regencie_id_dalam_negeri',
        'district_id_dalam_negeri',
        'village_id_dalam_negeri',
        'jabatan_luar_negeri',
        'wilayah_kerja_luar_negeri',
        'negara_tujuan_luar_negeri',
    ];

    /**
     * 
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
