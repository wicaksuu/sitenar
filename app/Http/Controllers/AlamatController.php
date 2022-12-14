<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Negara;

class AlamatController extends Controller
{
    //

    public function negara()
    {
        $negara = Negara::orderBy('nama', 'ASC')->get();
        return response()->json($negara);
    }
    public function provinsi()
    {
        $provinsi = DB::table('provinces')->get();
        return response()->json($provinsi);
    }
    public function kabupaten($id)
    {
        $provinsi = DB::table('regencies')
            ->where('province_id', $id)
            ->get();
        return response()->json($provinsi);
    }
    public function kecamatan($id)
    {
        $provinsi = DB::table('districts')
            ->where('regency_id', $id)
            ->get();
        return response()->json($provinsi);
    }
    public function desa($id)
    {
        $provinsi = DB::table('villages')
            ->where('district_id', $id)
            ->get();
        return response()->json($provinsi);
    }
}
