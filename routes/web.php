<?php

use App\Http\Controllers\AlamatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataPerusahaanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LokerController;
use App\Http\Controllers\PelatihanNakerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LokerController::class, 'welcome']);
Route::get('/negara', [AlamatController::class, 'negara']);
Route::get('/provinsi', [AlamatController::class, 'provinsi']);
Route::get('/kabupaten/{id}', [AlamatController::class, 'kabupaten']);
Route::get('/kecamatan/{id}', [AlamatController::class, 'kecamatan']);
Route::get('/desa/{id}', [AlamatController::class, 'desa']);
Route::get('daftar-lowongan', [LokerController::class, 'view_lowongan']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:disnaker'
])->group(function () {
    Route::get('/disnaker', function () {
        return view('disnaker.dashboard');
    });
    Route::get('/daftar-perusahaan-list', function () {
        return view('disnaker.daftar_perusahaan_list');
    });
    Route::get('/pages-starter', function () {
        return view('disnaker.start');
    });
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:perusahaan'
])->group(function () {
    Route::get('/pages-starter', function () {
        return view('perusahaan.start');
    });


    Route::get('user-data', [DataPerusahaanController::class, 'view_user']);
    Route::get('hapus-user/{id}', [DataPerusahaanController::class, 'dell_user']);
// hapus-user
    Route::get('perusahaan', [LokerController::class, 'dashboard']);
    Route::get('perusahaan-profile', [UserController::class, 'index']);
    Route::post('perusahaan-update-profile', [UserController::class, 'update_profile']);
    Route::post('update-profile-usaha', [UserController::class, 'store']);
    Route::post('perusahaan-pelaporan', [DataPerusahaanController::class, 'create']);
    Route::get('laporan-kodefikasi', [DataPerusahaanController::class, 'view_laporan_kodefiaksi']);
    Route::get('laporan-pengesahan', [DataPerusahaanController::class, 'view_laporan_pengesahan']);
    Route::get('laporan-open/{id}', [DataPerusahaanController::class, 'open_laporan_pengesahan']);

    Route::get('perusahaan-hapus-lowongan/{id}', [LokerController::class, 'hapus_lowongan']);
    Route::get('tambah-lowongan', [LokerController::class, 'tambah_lowongan']);
    Route::get('daftar-pelamar', [LokerController::class, 'daftar_pelamar_diterima']);
    Route::get('daftar-pelamar/{id}', [LokerController::class, 'daftar_pelamar']);
    Route::get('penerimaan-lowongan/{query}/{id}', [LokerController::class, 'penerimaan_lowongan']);

    Route::post('upload-lowongan', [LokerController::class, 'upload_lowongan']);


    Route::get('perusahaan/berita-pelatihan/{query}', [PelatihanNakerController::class, 'berita_pelatihan']);
    Route::get('perusahaan/tambah-berita-pelatihan', [PelatihanNakerController::class, 'tambah_berita_pelatihan']);
    Route::post('perusahaan/tambah-berita-pelatihan-add', [PelatihanNakerController::class, 'tambah_berita_pelatihan_add']);
    Route::get('perusahaan/hapus-berita/{id}', [PelatihanNakerController::class, 'hapus_berita']);
    Route::get('perusahaan/daftar-peserta/pelatihan', [PelatihanNakerController::class, 'daftar_peserta_pelatihan']);
    Route::get('perusahaan/penerimaan-pelatihan/{query}/{id}', [PelatihanNakerController::class, 'update_pelatihan']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:user'
])->group(function () {
    Route::get('user', [LokerController::class, 'dashboard']);
    Route::get('user-lamar/{id}/{name}', [LokerController::class, 'lamar']);
    Route::get('user-profile', [UserController::class, 'index']);
    Route::post('update-profile-user', [UserController::class, 'store']);
    Route::post('user-update-profile', [UserController::class, 'update_profile']);
    Route::get('user/berita-pelatihan/{query}', [PelatihanNakerController::class, 'berita_pelatihan']);
    Route::get('user/daftar-pelatihan/{id}/{nama}', [PelatihanNakerController::class, 'daftar_pelatihan']);
});
