<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function update_profile(Request $request)
    {
        $data = $request->all();
        $random = Str::random(40);
        $file = $request->file('avatar');
        $tujuan_upload = 'profile';
        try {
            $file->move($tujuan_upload, $random . '.' . $file->getClientOriginalExtension());
            User::where('id', Auth::user()->id)->update(['profile_photo_path' => url('profile/' . $random . '.' . $file->getClientOriginalExtension())]);
            return back()->with('success', 'Foto Profile Berhasil Terupload');
        } catch (\Throwable $th) {
            return back()->with('error', 'Foto Profile Gagal Terupload');
        }
    }

    public function index()
    {
        //
        $user = User::where('id', Auth::user()->id)->first();
        if (Auth::user()->role == 'perusahaan') {
            // perusahaan
            try {
                $back['province']  = DB::table('provinces')->where('id', $user->province_id)->first();
            } catch (\Throwable $e) {
                $back['province'] = '';
            }
            try {
                $back['regencie'] = DB::table('regencies')->where('id', $user->regencie_id)->first();
            } catch (\Throwable $e) {
                $back['regencie'] = '';
            }
            try {
                $back['district'] = DB::table('districts')->where('id', $user->district_id)->first();
            } catch (\Throwable $e) {
                $back['district'] = '';
            }
            try {
                $back['village'] = DB::table('villages')->where('id', $user->village_id)->first();
            } catch (\Throwable $e) {
                $back['village'] = '';
            }

            // pemilik
            try {
                $back['province_pemilik_usaha']  = DB::table('provinces')->where('id', $user->province_id_pemilik_usaha)->first();
            } catch (\Throwable $e) {
                $back['province_pemilik_usaha'] = '';
            }
            try {
                $back['regencie_pemilik_usaha'] = DB::table('regencies')->where('id', $user->regencie_id_pemilik_usaha)->first();
            } catch (\Throwable $e) {
                $back['regencie_pemilik_usaha'] = '';
            }
            try {
                $back['district_pemilik_usaha'] = DB::table('districts')->where('id', $user->district_id_pemilik_usaha)->first();
            } catch (\Throwable $e) {
                $back['district_pemilik_usaha'] = '';
            }
            try {
                $back['village_pemilik_usaha'] = DB::table('villages')->where('id', $user->village_id_pemilik_usaha)->first();
            } catch (\Throwable $e) {
                $back['village_pemilik_usaha'] = '';
            }
            $back = json_decode(json_encode($back));
            return view('perusahaan.profile', ["data" => $back]);
        } elseif (Auth::user()->role == 'user') {
            try {
                $back['province']  = DB::table('provinces')->where('id', $user->province_id)->first();
            } catch (\Throwable $e) {
                $back['province'] = '';
            }
            try {
                $back['regencie'] = DB::table('regencies')->where('id', $user->regencie_id)->first();
            } catch (\Throwable $e) {
                $back['regencie'] = '';
            }
            try {
                $back['district'] = DB::table('districts')->where('id', $user->district_id)->first();
            } catch (\Throwable $e) {
                $back['district'] = '';
            }
            try {
                $back['village'] = DB::table('villages')->where('id', $user->village_id)->first();
            } catch (\Throwable $e) {
                $back['village'] = '';
            }

            try {
                $back['province_dalam_negeri']  = DB::table('provinces')->where('id', $user->province_id_dalam_negeri)->first();
            } catch (\Throwable $e) {
                $back['province_dalam_negeri'] = '';
            }
            try {
                $back['regencie_dalam_negeri'] = DB::table('regencies')->where('id', $user->regencie_id_dalam_negeri)->first();
            } catch (\Throwable $e) {
                $back['regencie_dalam_negeri'] = '';
            }
            try {
                $back['district_dalam_negeri'] = DB::table('districts')->where('id', $user->district_id_dalam_negeri)->first();
            } catch (\Throwable $e) {
                $back['district_dalam_negeri'] = '';
            }
            try {
                $back['village_dalam_negeri'] = DB::table('villages')->where('id', $user->village_id_dalam_negeri)->first();
            } catch (\Throwable $e) {
                $back['village_dalam_negeri'] = '';
            }
            $back = json_decode(json_encode($back));
            return view('user.profile', ["data" => $back]);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request = $request->all();

        unset($request['_token']);
        try {
            User::where('id', Auth::user()->id)->update($request);
            $message = 'success';
            return back()->with('success', $message);
        } catch (\Throwable $th) {
            $message = $th->getMessage();
            return back()->with('error', $message);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
