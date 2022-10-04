<?php

use App\Http\Controllers\AlamatController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DataPerusahaanController;
use App\Http\Controllers\UserController;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;
use App\Http\Controllers\LokerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/provinsi', [AlamatController::class, 'provinsi']);
Route::get('/kabupaten/{id}', [AlamatController::class, 'kabupaten']);
Route::get('/kecamatan/{id}', [AlamatController::class, 'kecamatan']);
Route::get('/desa/{id}', [AlamatController::class, 'desa']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:disnaker'
])->group(function () {
    // Route::get('/dashboard', [OperatorController::class, 'index'])->name('operator');
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
    // Route::get('/perusahaan', function () {
    //     return view('perusahaan.dashboard');
    // });
    Route::get('/pages-starter', function () {
        return view('perusahaan.start');
    });

    Route::get('perusahaan', [LokerController::class, 'dashboard']);
    Route::get('perusahaan-profile', [UserController::class, 'index']);
    Route::post('update-profile-usaha', [UserController::class, 'store']);
    Route::post('perusahaan-pelaporan', [DataPerusahaanController::class, 'create']);
    Route::get('laporan-kodefikasi', [DataPerusahaanController::class, 'view_laporan_kodefiaksi']);
    Route::get('laporan-pengesahan', [DataPerusahaanController::class, 'view_laporan_pengesahan']);
    Route::get('laporan-open/{id}', [DataPerusahaanController::class, 'open_laporan_pengesahan']);

    Route::get('daftar-lowongan', [LokerController::class, 'view_lowongan']);
    Route::get('tambah-lowongan', [LokerController::class, 'tambah_lowongan']);
    Route::get('daftar-pelamar', [LokerController::class, 'daftar_pelamar']);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:user'
])->group(function () {
    Route::get('/user', function () {
        return Auth::user()->role;
    });
    // Route::get('perusahaan', [LokerController::class, 'dashboard']);
});
