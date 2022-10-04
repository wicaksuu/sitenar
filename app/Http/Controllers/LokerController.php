<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPerusahaan;
use Illuminate\Support\Facades\Auth;

class LokerController extends Controller
{
    //
    public function view_lowongan()
    {

        return view('lowongan');
    }
    public function tambah_lowongan()
    {

        return view('tambah_lowongan');
    }
    public function daftar_pelamar()
    {
        return view('perusahaan.daftar_pelamar');
    }

    public function dashboard()
    {

        $laporan = DataPerusahaan::where('user_id', Auth::user()->id)
            ->paginate(6);

        return view('perusahaan.dashboard', ['laporan' => $laporan]);
    }
}
