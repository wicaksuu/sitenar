<?php

namespace App\Http\Controllers;

use App\Models\PelatihanNaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\PesertaPelatihanNaker;

class PelatihanNakerController extends Controller
{
    //  
    public function update_pelatihan($query, $id)
    {
        if ($query == 'terima') {
            $status = 'Diterima';
        } else {
            $status = 'Ditolak';
        }
        try {
            PesertaPelatihanNaker::where('id', $id)->update(['status' => $status]);
            return back()->with('success', 'User Berhasil ' . $status);
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage);
        }
    }
    public function daftar_pelatihan($id, $name)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'lowongan_id' => $id,
            'status' => 'Menunggu'
        ];

        try {
            PesertaPelatihanNaker::create($data);
            return back()->with('success', 'Berhasil Mendaftar Pelatihan ' . $name);
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage);
        }
    }
    public function daftar_peserta_pelatihan()
    {

        if (Auth::user()->role == 'perusahaan') {
            $daftar_peserta = PelatihanNaker::orderBy('created_at', 'DESC')
                ->where('type', 'Pelatihan')
                ->where('user_id', Auth::user()->id)
                ->get();
            foreach ($daftar_peserta as $peserta) {
                $PesertaPelatihanNaker = PesertaPelatihanNaker::orderBy('created_at', 'DESC')
                    ->where('lowongan_id', $peserta->id)
                    ->get();

                foreach ($PesertaPelatihanNaker as $value) {
                    $data_peserta = User::where('id', $value->user_id)->first();
                    if ($data_peserta->name != '') {
                        $data = [
                            'id_peserta' => $data_peserta->id,
                            'id_pelatihan' => $value->id,
                            'nama_peserta' => $data_peserta->name,
                            'wa' => $data_peserta->wa,
                            'pelatihan' => $peserta->judul,
                            'tgl_pendaftaran' => $peserta->created_at->toFormattedDateString(),
                            'status' => $value->status,
                            'alamat' => $data_peserta->alamat,
                        ];
                    }
                    $save[] = $data;
                }
            }
            if (!isset($save)) {
                $save[] = '';
            }
            $save = json_decode(json_encode($save));
            return view('peserta_pelatihan', ['data' => $save]);
        } elseif (Auth::user()->role == 'disnaker') {
            return view('peserta_pelatihan');
        }
    }
    public function hapus_berita($id)
    {
        if (Auth::user()->role == 'perusahaan') {
            try {
                PelatihanNaker::where('id', $id)->where('user_id', Auth::user()->id)->delete();
                PesertaPelatihanNaker::where('lowongan_id', $id)->delete();
                return back()->with('success', 'Lowongan Berhasil Dihapus');
            } catch (\Throwable $th) {
                return back()->with('error', $th->getMessage);
            }
        } elseif (Auth::user()->role == 'disnaker') {
            try {
                PelatihanNaker::where('id', $id)->delete();
                PesertaPelatihanNaker::where('lowongan_id', $id)->delete();
                return back()->with('success', 'Lowongan Berhasil Dihapus');
            } catch (\Throwable $th) {
                return back()->with('error', $th->getMessage);
            }
        }
    }
    public function berita_pelatihan($query)
    {
        if (Auth::user()->role == 'perusahaan') {
            $pelatihan = PelatihanNaker::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->where('type', $query)->get();
        } else {
            $pelatihan = PelatihanNaker::orderBy('created_at', 'DESC')->where('type', $query)->get();
        }
        foreach ($pelatihan as $item) {
            $postinger = User::where('id', $item->user_id)->first();
            $pelatihans['id'] = $item->id;
            $pelatihans['nama_postinger'] = $postinger->name;
            $pelatihans['image_postinger'] = $postinger->profile_photo_path;
            $pelatihans['type'] = $item->type;
            $pelatihans['judul'] = $item->judul;
            $pelatihans['nomor_wa_pendaftaran'] = $item->nomor_wa_pendaftaran;
            $pelatihans['lokasi_pelatihan'] = $item->lokasi_pelatihan;
            $pelatihans['link_pendaftaran'] = $item->link_pendaftaran;
            $pelatihans['image'] = url('berita/' . $item->image);
            $pelatihans['deskripsi'] = $item->deskripsi;
            $pelatihans['create_at'] = $item['created_at']->toFormattedDateString();
            $data_pelatihan[] = $pelatihans;
        }
        if (!isset($data_pelatihan)) {
            $data_pelatihan = [];
        }
        $save = json_decode(json_encode($data_pelatihan));
        return view('berita_pelatihan_view', ['data' => $save, 'query' => $query]);
    }

    public function tambah_berita_pelatihan()
    {
        return view('berita_pelatihan_add');
    }
    public function tambah_berita_pelatihan_add(Request $request)
    {
        if (Auth::user()->role == 'perusahaan' || Auth::user()->role == 'disnaker') {
            $data = $request->all();
            if (isset($data['file'])) {
                $random = Str::random(40);
                $file = $request->file('file');
                $tujuan_upload = 'berita';
                try {
                    $file->move($tujuan_upload, $random . '.' . $file->getClientOriginalExtension());
                    return response()->json(['success' => true])->cookie('berita', $random . '.' . $file->getClientOriginalExtension());
                } catch (\Throwable $th) {
                    return response()->json(['success' => false, 'message' => $th->getMessage]);
                }
            } else {
                $image = $request->cookie('berita');
                if ($image != '') {

                    unset($data['_token']);
                    $data['image'] = $image;
                    $data['user_id'] = Auth::user()->id;
                    try {
                        PelatihanNaker::create($data);
                        return back()->with('success', $data['type'] . ' Berhasil Terupload');
                    } catch (\Throwable $th) {
                        return back()->with('error', $th->getMessage());
                    }
                } else {
                    return back()->with('error', 'File gambar rusak');
                }
            }
        }
        return view('berita_pelatihan_add');
    }
}
