<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\DataPerusahaan;


class DataPerusahaanController extends Controller
{
    public function open_laporan_pengesahan($id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        // perusahaan
        try {
            $back['province']  = DB::table('provinces')->where('id', $user->province_id)->first();
        } catch (\Throwable $e) {
            $back['province'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['regencie'] = DB::table('regencies')->where('id', $user->regencie_id)->first();
        } catch (\Throwable $e) {
            $back['regencie'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['district'] = DB::table('districts')->where('id', $user->district_id)->first();
        } catch (\Throwable $e) {
            $back['district'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['village'] = DB::table('villages')->where('id', $user->village_id)->first();
        } catch (\Throwable $e) {
            $back['village'] = '';
            return redirect('perusahaan-profile');
        }

        // pemilik
        try {
            $back['province_pemilik_usaha']  = DB::table('provinces')->where('id', $user->province_id_pemilik_usaha)->first();
        } catch (\Throwable $e) {
            $back['province_pemilik_usaha'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['regencie_pemilik_usaha'] = DB::table('regencies')->where('id', $user->regencie_id_pemilik_usaha)->first();
        } catch (\Throwable $e) {
            $back['regencie_pemilik_usaha'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['district_pemilik_usaha'] = DB::table('districts')->where('id', $user->district_id_pemilik_usaha)->first();
        } catch (\Throwable $e) {
            $back['district_pemilik_usaha'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['village_pemilik_usaha'] = DB::table('villages')->where('id', $user->village_id_pemilik_usaha)->first();
        } catch (\Throwable $e) {
            $back['village_pemilik_usaha'] = '';
            return redirect('perusahaan-profile');
        }
        foreach ($back as $cek => $ck) {
            if ($ck == '') {
                return redirect('perusahaan-profile');
            }
        }
        $back = json_decode(json_encode($back));
        $DataPerusahaan = DataPerusahaan::where('user_id', Auth::user()->id)->first();
        return view('perusahaan.open_laporan_kodefiaksi', ["data" => $back, "perusahaan" => $DataPerusahaan]);
    }
    // view pelaporan
    public function view_laporan_kodefiaksi()
    {

        $user = User::where('id', Auth::user()->id)->first();

        if ($user->kode_pos == '') {
            return redirect('perusahaan-profile');
        }

        if ($user->alamat == '') {
            return redirect('perusahaan-profile');
        }


        // perusahaan
        try {
            $back['province']  = DB::table('provinces')->where('id', $user->province_id)->first();
        } catch (\Throwable $e) {
            $back['province'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['regencie'] = DB::table('regencies')->where('id', $user->regencie_id)->first();
        } catch (\Throwable $e) {
            $back['regencie'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['district'] = DB::table('districts')->where('id', $user->district_id)->first();
        } catch (\Throwable $e) {
            $back['district'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['village'] = DB::table('villages')->where('id', $user->village_id)->first();
        } catch (\Throwable $e) {
            $back['village'] = '';
            return redirect('perusahaan-profile');
        }

        // pemilik
        try {
            $back['province_pemilik_usaha']  = DB::table('provinces')->where('id', $user->province_id_pemilik_usaha)->first();
        } catch (\Throwable $e) {
            $back['province_pemilik_usaha'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['regencie_pemilik_usaha'] = DB::table('regencies')->where('id', $user->regencie_id_pemilik_usaha)->first();
        } catch (\Throwable $e) {
            $back['regencie_pemilik_usaha'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['district_pemilik_usaha'] = DB::table('districts')->where('id', $user->district_id_pemilik_usaha)->first();
        } catch (\Throwable $e) {
            $back['district_pemilik_usaha'] = '';
            return redirect('perusahaan-profile');
        }
        try {
            $back['village_pemilik_usaha'] = DB::table('villages')->where('id', $user->village_id_pemilik_usaha)->first();
        } catch (\Throwable $e) {
            $back['village_pemilik_usaha'] = '';
            return redirect('perusahaan-profile');
        }
        foreach ($back as $cek => $ck) {
            if ($ck == '') {
                return redirect('perusahaan-profile');
            }
        }
        $back = json_decode(json_encode($back));
        return view('perusahaan.laporan_kodefiaksi', ["data" => $back]);
    }
    // end view pelaporan


    public function create(Request $request)
    {
        $request = $request->all();
        unset($request['_token']);

        $request['user_id'] = Auth::user()->id;

        foreach ($request as $key => $value) {
            if ($encode = json_encode($value)) {
                $save[$key] = $encode;
            } else {
                $save[$key] = $value;
            }
        }
        try {
            DataPerusahaan::create($save);

            $message = 'success';
        } catch (\Throwable $th) {
            $message = $th->getMessage();
        }

        return redirect('laporan-pengesahan');
    }

    public function view_laporan_pengesahan()
    {
        $data = DataPerusahaan::where('user_id', Auth::user()->id)
            ->get();

        return view('perusahaan.waiting_valid', ["data" => $data]);
    }
}
