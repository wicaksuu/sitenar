<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPerusahaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Loker;
use App\Models\User;
use App\Models\DataPencaker;
use App\Models\PelatihanNaker;
use App\Models\PesertaPelatihanNaker;

class LokerController extends Controller
{
    //
    public function penerimaan_lowongan($query, $id)
    {
        if ($query == 'terima') {
            $status = 'Diterima';
        } else {
            $status = 'Ditolak';
        }
        try {
            DataPencaker::where('id', $id)->update(['status' => $status]);
            return back()->with('success', 'User Berhasil ' . $status);
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage);
        }
    }
    public function lamar($id, $name)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'lowongan_id' => $id,
            'status' => 'Menunggu'
        ];
        try {
            DataPencaker::create($data);
            return back()->with('success', 'Berhasil Melamar ke ' . $name);
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage);
        }
    }

    public function hapus_lowongan($id)
    {

        if (Auth::user()->role == 'perusahaan') {
            try {
                Loker::where('id', $id)->where('user_id', Auth::user()->id)->delete();
                DataPencaker::where('lowongan_id', $id)->delete();
                return back()->with('success', 'Lowongan Berhasil Dihapus');
            } catch (\Throwable $th) {
                return back()->with('error', $th->getMessage);
            }
        } elseif (Auth::user()->role == 'disnaker') {
            try {
                Loker::where('id', $id)->delete();
                DataPencaker::where('lowongan_id', $id)->delete();
                return back()->with('success', 'Lowongan Berhasil Dihapus');
            } catch (\Throwable $th) {
                return back()->with('error', $th->getMessage);
            }
        }
    }
    public function view_lowongan()
    {

        if (Auth::user()->role == 'perusahaan') {
            $loker = Loker::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get();
        } else {
            $loker = Loker::orderBy('created_at', 'DESC')->get();
            if (Auth::user()->role == 'user') {
                if (Auth::user()->nama_sekolah == '') {
                    return redirect('user-profile');
                }
                if (Auth::user()->jabatan_dalam_negeri == '') {
                    return redirect('user-profile');
                }
            }
        }

        foreach ($loker as $value) {
            $user = User::where('id', $value['user_id'])->first();
            if (Auth::user()->role == 'perusahaan' || Auth::user()->role == 'disnaker') {
                $DataPencaker = DataPencaker::orderBy('created_at', 'DESC')->where('lowongan_id', $value['id'])->where('status', 'Menunggu')->get();
            } else {
                $DataPencaker = DataPencaker::orderBy('created_at', 'DESC')->where('lowongan_id', $value['id'])->where('user_id', Auth::user()->id)->get();
            }
            foreach ($DataPencaker as $key) {
                $pencaker = User::where('id', $key['user_id'])->first();
                $dump['data_pencaker_id'] = $key->id;
                $dump['data_pencaker_status'] = $key->status;
                $dump['pencaker_id'] = $pencaker->id;
                $dump['pencaker_name'] = $pencaker->name;
                $dump['pencaker_image'] = $pencaker->profile_photo_path;
                $dump['pencaker_wa'] = $pencaker->wa;
                $dump['pencaker_email'] = $pencaker->email;
                $dump['pencaker_pendidikan_terakhir'] = $pencaker->pendidikan_terakhir;
                $dump['pencaker_tahun_kelulusan'] = $pencaker->tahun_kelulusan;
                $dump['pencaker_jurusan'] = $pencaker->jurusan;
                $dump['pencaker_nama_sekolah'] = $pencaker->nama_sekolah;
                $dump['pencaker_alamat'] = $pencaker->alamat;
                $data_pencaker[] = $dump;
                $total[] = '';
            }
            if (!isset($data_pencaker)) {
                $data_pencaker = [];
            }
            $data['daftar_pencaker']        = $data_pencaker;
            $data['lowongan_id']            = $value['id'];
            $data['judul_lowongan']         = $value['judul_lowongan'];
            $data['email']                  = $value['email'];
            $data['nomor_wa_pendaftaran']   = $value['nomor_wa_pendaftaran'];
            $data['lokasi_kerja']           = $value['lokasi_kerja'];
            $data['link_pendaftaran']       = $value['link_pendaftaran'];
            $data['create_at']              = $value['created_at']->toFormattedDateString();
            $data['deskripsi']              = $value['deskripsi'];
            $data['total_pelamar']          = count($data_pencaker);
            $data['image']                  = url('lowongan/' . $value['image']);
            $data['nama_perusahaan']        = $user->name;
            if ($user->profile_photo_path == '') {
                $data['image_perusahaan']       = url('assets/images/icons/icon.png');
            } else {
                $data['image_perusahaan']       = $user->profile_photo_path;
            }
            unset($data_pencaker);
            $saver[] = $data;
        }
        if (!isset($saver)) {
            $saver = [];
        }
        if (!isset($total)) {
            $total = [];
        }
        $save['data'] = $saver;
        $save['total'] = count($total);
        $save = json_decode(json_encode($save));
        return view('lowongan', ['data' => $save]);
    }

    public function tambah_lowongan()
    {
        return view('tambah_lowongan');
    }

    public function daftar_pelamar_diterima()
    {
        if (Auth::user()->role == 'perusahaan') {
            $loker = Loker::orderBy('created_at', 'DESC')->where('user_id', Auth::user()->id)->get();
        } else {
            $loker = Loker::orderBy('created_at', 'DESC')->get();
        }

        foreach ($loker as $value) {
            $user = User::where('id', $value['user_id'])->first();
            $DataPencaker = DataPencaker::where('lowongan_id', $value['id'])->where('status', 'Diterima')->get();
            foreach ($DataPencaker as $key) {
                $pencaker = User::where('id', $key['user_id'])->first();
                $dump['pencaker_id'] = $user->id;
                $dump['data_pencaker_id'] = $key->id;
                $dump['pencaker_name'] = $pencaker->name;
                $dump['pencaker_image'] = $pencaker->profile_photo_path;
                $dump['pencaker_wa'] = $pencaker->wa;
                $dump['pencaker_email'] = $pencaker->email;
                $dump['pencaker_pendidikan_terakhir'] = $pencaker->pendidikan_terakhir;
                $dump['pencaker_tahun_kelulusan'] = $pencaker->tahun_kelulusan;
                $dump['pencaker_jurusan'] = $pencaker->jurusan;
                $dump['pencaker_nama_sekolah'] = $pencaker->nama_sekolah;
                $dump['pencaker_alamat'] = $pencaker->alamat;
                $data_pencaker[] = $dump;
                $total[] = '';
            }
            if (!isset($data_pencaker)) {
                $data_pencaker = [];
            }
            $data['daftar_pencaker']        = $data_pencaker;
            $data['lowongan_id']            = $value['id'];
            $data['judul_lowongan']         = $value['judul_lowongan'];
            $data['email']                  = $value['email'];
            $data['nomor_wa_pendaftaran']   = $value['nomor_wa_pendaftaran'];
            $data['lokasi_kerja']           = $value['lokasi_kerja'];
            $data['link_pendaftaran']       = $value['link_pendaftaran'];
            $data['deskripsi']              = $value['deskripsi'];
            $data['total_pelamar']          = count($data_pencaker);
            $data['create_at']              = $value['created_at']->toFormattedDateString();
            $data['image']                  = url('lowongan/' . $value['image']);
            $data['nama_perusahaan']        = $user->name;
            if ($user->profile_photo_path == '') {
                $data['image_perusahaan']       = url('assets/images/icons/icon.png');
            } else {
                $data['image_perusahaan']       = $user->profile_photo_path;
            }
            unset($data_pencaker);
            $saver[] = $data;
        }
        if (!isset($saver)) {
            $saver = [];
        }
        if (!isset($total)) {
            $total = [];
        }
        $save['data'] = $saver;
        $save['query'] = 'diterima';
        $save['total'] = count($total);
        $save = json_decode(json_encode($save));
        return view('perusahaan.daftar_pelamar', ['data' => $save]);
    }

    public function daftar_pelamar($id)
    {
        if (Auth::user()->role == 'perusahaan') {
            $loker = Loker::orderBy('created_at', 'DESC')->where('id', $id)->where('user_id', Auth::user()->id)->get();
        } else {
            $loker = Loker::orderBy('created_at', 'DESC')->where('id', $id)->get();
        }

        foreach ($loker as $value) {
            $user = User::where('id', $value['user_id'])->first();
            $DataPencaker = DataPencaker::where('lowongan_id', $value['id'])->where('status', 'Menunggu')->get();
            foreach ($DataPencaker as $key) {
                $pencaker = User::where('id', $key['user_id'])->first();
                $dump['pencaker_id'] = $pencaker->id;
                $dump['data_pencaker_id'] = $key->id;
                $dump['pencaker_name'] = $pencaker->name;
                $dump['pencaker_image'] = $pencaker->profile_photo_path;
                $dump['pencaker_wa'] = $pencaker->wa;
                $dump['pencaker_email'] = $pencaker->email;
                $dump['pencaker_pendidikan_terakhir'] = $pencaker->pendidikan_terakhir;
                $dump['pencaker_tahun_kelulusan'] = $pencaker->tahun_kelulusan;
                $dump['pencaker_jurusan'] = $pencaker->jurusan;
                $dump['pencaker_nama_sekolah'] = $pencaker->nama_sekolah;
                $dump['pencaker_alamat'] = $pencaker->alamat;
                $data_pencaker[] = $dump;
                $total[] = '';
            }
            if (!isset($data_pencaker)) {
                $data_pencaker = [];
            }
            $data['daftar_pencaker']        = $data_pencaker;
            $data['lowongan_id']            = $value['id'];
            $data['judul_lowongan']         = $value['judul_lowongan'];
            $data['email']                  = $value['email'];
            $data['nomor_wa_pendaftaran']   = $value['nomor_wa_pendaftaran'];
            $data['lokasi_kerja']           = $value['lokasi_kerja'];
            $data['link_pendaftaran']       = $value['link_pendaftaran'];
            $data['deskripsi']              = $value['deskripsi'];
            $data['total_pelamar']          = count($data_pencaker);
            $data['create_at']              = $value['created_at']->toFormattedDateString();
            $data['image']                  = url('lowongan/' . $value['image']);
            $data['nama_perusahaan']        = $user->name;
            if ($user->profile_photo_path == '') {
                $data['image_perusahaan']       = url('assets/images/icons/icon.png');
            } else {
                $data['image_perusahaan']       = $user->profile_photo_path;
            }
            unset($data_pencaker);
            $saver[] = $data;
        }
        if (!isset($saver)) {
            $saver = [];
        }
        if (!isset($total)) {
            $total = [];
        }
        $save['data'] = $saver;
        $save['query'] = 'Pending';
        $save['total'] = count($total);
        $save = json_decode(json_encode($save));
        return view('perusahaan.daftar_pelamar', ['data' => $save]);
    }

    public function dashboard()
    {
        $loker = Loker::orderBy('created_at', 'DESC')->get();
        if (Auth::user()->role == 'perusahaan') {
            $laporan = DataPerusahaan::where('user_id', Auth::user()->id)
                ->paginate(6);

            foreach ($loker as $value) {
                $diterima  = 0;
                $menunggu  = 0;
                $user = User::where('id', $value['user_id'])->first();
                $DataPencaker = DataPencaker::where('lowongan_id', $value['id'])->get();
                foreach ($DataPencaker as $key) {
                    $pencaker = User::where('id', $key['user_id'])->first();
                    $dump['data_pencaker_id'] = $key->id;
                    $dump['data_pencaker_status'] = $key->status;
                    $dump['pencaker_id'] = $pencaker->id;
                    $dump['pencaker_name'] = $pencaker->name;
                    $dump['pencaker_image'] = $pencaker->profile_photo_path;
                    $dump['pencaker_wa'] = $pencaker->wa;
                    $dump['pencaker_email'] = $pencaker->email;
                    $dump['pencaker_pendidikan_terakhir'] = $pencaker->pendidikan_terakhir;
                    $dump['pencaker_tahun_kelulusan'] = $pencaker->tahun_kelulusan;
                    $dump['pencaker_jurusan'] = $pencaker->jurusan;
                    $dump['pencaker_nama_sekolah'] = $pencaker->nama_sekolah;
                    $dump['pencaker_alamat'] = $pencaker->alamat;
                    $data_pencaker[] = $dump;
                    $total[] = '';
                    if ($key->status == 'Diterima') {
                        $diterima++;
                    }
                    if ($key->status == 'Menunggu') {
                        $menunggu++;
                    }
                }
                if (!isset($data_pencaker)) {
                    $data_pencaker = [];
                }
                $data['daftar_pencaker']        = $data_pencaker;
                $data['lowongan_id']            = $value['id'];
                $data['create_at']              = $value['created_at']->toFormattedDateString();
                $data['judul_lowongan']         = $value['judul_lowongan'];
                $data['email']                  = $value['email'];
                $data['nomor_wa_pendaftaran']   = $value['nomor_wa_pendaftaran'];
                $data['lokasi_kerja']           = $value['lokasi_kerja'];
                $data['link_pendaftaran']       = $value['link_pendaftaran'];
                $data['deskripsi']              = $value['deskripsi'];
                $data['diterima']               = $diterima;
                $data['menunggu']               = $menunggu;
                $data['total']                  = $menunggu + $diterima;
                $data['total_pelamar']          = count($data_pencaker);
                $data['image']                  = url('lowongan/' . $value['image']);
                $data['nama_perusahaan']        = $user->name;
                if ($user->profile_photo_path == '') {
                    $data['image_perusahaan']       = url('assets/images/icons/icon.png');
                } else {
                    $data['image_perusahaan']       = $user->profile_photo_path;
                }
                unset($data_pencaker);
                $saver[] = $data;
            }
            if (!isset($saver)) {
                $saver = [];
            }
            if (!isset($total)) {
                $total = [];
            }
            $save['data'] = $saver;
            $save['total'] = count($total);
            $save = json_decode(json_encode($save));
            return view('perusahaan.dashboard', ['laporan' => $laporan, 'data' => $save]);
        } elseif (Auth::user()->role == 'user') {

            if (Auth::user()->nama_sekolah == '') {
                return redirect('user-profile');
            }
            if (Auth::user()->jabatan_dalam_negeri == '') {
                return redirect('user-profile');
            }
            foreach ($loker as $value) {
                $user = User::where('id', $value['user_id'])->first();
                if (Auth::user()->role == 'perusahaan' || Auth::user()->role == 'disnaker') {
                    $DataPencaker = DataPencaker::where('lowongan_id', $value['id'])->where('status', 'Menunggu')->get();
                } else {
                    $DataPencaker = DataPencaker::where('lowongan_id', $value['id'])->where('user_id', Auth::user()->id)->get();
                }
                foreach ($DataPencaker as $key) {
                    $pencaker = User::where('id', $key['user_id'])->first();
                    $dump['data_pencaker_id'] = $key->id;
                    $dump['data_pencaker_status'] = $key->status;
                    $dump['pencaker_id'] = $pencaker->id;
                    $dump['pencaker_name'] = $pencaker->name;
                    $dump['pencaker_image'] = $pencaker->profile_photo_path;
                    $dump['pencaker_wa'] = $pencaker->wa;
                    $dump['pencaker_email'] = $pencaker->email;
                    $dump['pencaker_pendidikan_terakhir'] = $pencaker->pendidikan_terakhir;
                    $dump['pencaker_tahun_kelulusan'] = $pencaker->tahun_kelulusan;
                    $dump['pencaker_jurusan'] = $pencaker->jurusan;
                    $dump['pencaker_nama_sekolah'] = $pencaker->nama_sekolah;
                    $dump['pencaker_alamat'] = $pencaker->alamat;
                    $data_pencaker[] = $dump;
                    $total[] = '';
                }
                if (!isset($data_pencaker)) {
                    $data_pencaker = [];
                }
                $data['daftar_pencaker']        = $data_pencaker;
                $data['lowongan_id']            = $value['id'];
                $data['judul_lowongan']         = $value['judul_lowongan'];
                $data['email']                  = $value['email'];
                $data['nomor_wa_pendaftaran']   = $value['nomor_wa_pendaftaran'];
                $data['lokasi_kerja']           = $value['lokasi_kerja'];
                $data['link_pendaftaran']       = $value['link_pendaftaran'];
                $data['deskripsi']              = $value['deskripsi'];
                $data['create_at']              = $value['created_at']->toFormattedDateString();
                $data['total_pelamar']          = count($data_pencaker);
                $data['image']                  = url('lowongan/' . $value['image']);
                $data['nama_perusahaan']        = $user->name;
                if ($user->profile_photo_path == '') {
                    $data['image_perusahaan']       = url('assets/images/icons/icon.png');
                } else {
                    $data['image_perusahaan']       = $user->profile_photo_path;
                }
                unset($data_pencaker);
                $saver[] = $data;
            }
            if (!isset($saver)) {
                $saver = [];
            }
            if (!isset($total)) {
                $total = [];
            }
            $save['data'] = $saver;
            $save['total'] = count($total);
            $save = json_decode(json_encode($save));

            // pelatihan

            $daftar_peserta = PelatihanNaker::orderBy('created_at', 'DESC')
                ->where('type', 'Pelatihan')
                ->get();
            foreach ($daftar_peserta as $peserta) {
                $PesertaPelatihanNaker = PesertaPelatihanNaker::orderBy('created_at', 'DESC')
                    ->where('user_id', Auth::user()->id)
                    ->where('lowongan_id', $peserta->id)
                    ->get();
                $perusahaan = User::where('id', $peserta->user_id)->first();

                $dump_pealtihan['perusahaan'] = $perusahaan->name;
                $dump_pealtihan['nama_pelatihan'] = $peserta->judul;
                $dump_pealtihan['lokasi_pelatihan'] = $peserta->lokasi_pelatihan;
                $dump_pealtihan['link_pendaftaran'] = $peserta->link_pendaftaran;
                $dump_pealtihan['email'] = $perusahaan->email;
                $dump_pealtihan['list_pelatihan_id'] = $peserta->id;

                if ($perusahaan->profile_photo_path == '') {
                    $dump_pealtihan['image_perusahaan']       = url('assets/images/icons/icon.png');
                } else {
                    $dump_pealtihan['image_perusahaan']       = $perusahaan->profile_photo_path;
                }

                foreach ($PesertaPelatihanNaker as $value) {
                    $data_peserta = User::where('id', $value->user_id)->first();
                    $data = [
                        'id_peserta' => $data_peserta->id,
                        'id_pelatihan' => $peserta->id,
                        'nama_peserta' => $data_peserta->name,
                        'wa' => $data_peserta->wa,
                        'pelatihan' => $peserta->judul,
                        'tgl_pendaftaran' => $peserta->created_at->toFormattedDateString(),
                        'status' => $value->status,
                        'alamat' => $data_peserta->alamat,
                        'image_perusahaan' => $dump_pealtihan['image_perusahaan'],
                        'perusahaan' => $dump_pealtihan['perusahaan'],
                        'lokasi_pelatihan' => $dump_pealtihan['lokasi_pelatihan'],
                        'link_pendaftaran' => $dump_pealtihan['link_pendaftaran'],

                    ];
                    $dump_pealtihan['status'] = $value->status;
                    $save_pelatihan[] = $data;
                    unset($data);
                }
                $perusahaan_pelatihan[] = $dump_pealtihan;
                unset($dump_pealtihan);
            }
            if (!isset($save_pelatihan)) {
                $save_pelatihan[] = '';
            }
            if (!isset($perusahaan_pelatihan)) {
                $perusahaan_pelatihan[] = '';
            }

            $save_pelatihan = json_decode(json_encode($save_pelatihan));
            $perusahaan_pelatihan = json_decode(json_encode($perusahaan_pelatihan));
            return view('user.dashboard', ['data' => $save, 'peserta' => $save_pelatihan, 'daftar_pelatihan' => $perusahaan_pelatihan]);
        }
    }

    public function upload_lowongan(Request $request)
    {
        if (Auth::user()->role == 'perusahaan' || Auth::user()->role == 'disnaker') {
            $data = $request->all();
            if (isset($data['file'])) {
                $random = Str::random(40);
                $file = $request->file('file');
                $tujuan_upload = 'lowongan';
                try {
                    $file->move($tujuan_upload, $random . '.' . $file->getClientOriginalExtension());
                    return response()->json(['success' => true])->cookie('image', $random . '.' . $file->getClientOriginalExtension());
                } catch (\Throwable $th) {
                    return response()->json(['success' => false, 'message' => $th->getMessage]);
                }
            } else {
                $image = $request->cookie('image');
                if ($image != '') {
                    if ($data['nomor_wa_pendaftaran'] == '') {
                        $data['nomor_wa_pendaftaran'] = 'Nomor Wa Kosong';
                    }
                    unset($data['_token']);
                    $data['image'] = $image;
                    $data['user_id'] = Auth::user()->id;
                    try {
                        Loker::create($data);
                        return redirect('daftar-lowongan')->with('success', 'Lowongan Berhasil Terupload');
                    } catch (\Throwable $th) {
                        return back()->with('error', $th->getMessage());
                        return back()->with('error', 'Lowongan Gagal Terupload');
                    }
                } else {
                    return back()->with('error', 'File gambar rusak');
                }
            }
        }
    }
    public function welcome()
    {
        $loker = Loker::orderBy('created_at', 'DESC')->paginate(5);
        $pengumuman = PelatihanNaker::orderBy('created_at', 'DESC')->paginate(5);

        foreach ($loker as $value) {
            $user = User::where('id', $value['user_id'])->first();
            $data['lowongan_id']            = $value['id'];
            $data['judul_lowongan']         = $value['judul_lowongan'];
            $data['email']                  = $value['email'];
            $data['nomor_wa_pendaftaran']   = $value['nomor_wa_pendaftaran'];
            $data['lokasi_kerja']           = $value['lokasi_kerja'];
            $data['link_pendaftaran']       = $value['link_pendaftaran'];
            $data['deskripsi']              = $value['deskripsi'];
            $data['create_at']              = $value['created_at']->toFormattedDateString();
            $data['image']                  = url('lowongan/' . $value['image']);
            $data['nama_perusahaan']        = $user->name;
            if ($user->profile_photo_path == '') {
                $data['image_perusahaan']       = url('assets/images/icons/icon.png');
            } else {
                $data['image_perusahaan']       = $user->profile_photo_path;
            }
            unset($data_pencaker);
            $saver[] = $data;
        }

        if (!isset($saver)) {
            $saver = [];
        }
        $save = json_decode(json_encode($saver));

        foreach ($pengumuman as $peserta) {
            $perusahaan = User::where('id', $peserta->user_id)->first();
            $dump_pealtihan['perusahaan'] = $perusahaan->name;
            $dump_pealtihan['nama_pelatihan'] = substr($peserta->judul, 0, 35);
            $dump_pealtihan['deskripsi'] = substr($peserta->deskripsi, 0, 200);
            $dump_pealtihan['type'] = $peserta->type;
            $dump_pealtihan['judul'] = substr($peserta->judul, 0, 35) . "...";
            $dump_pealtihan['_type'] = explode('.', $peserta->image)[1];
            $dump_pealtihan['image'] = url('berita/' . $peserta->image);

            switch ($dump_pealtihan['_type']) {
                case 'jfif':
                    $dump_pealtihan['content_type'] = 'image';
                    $dump_pealtihan['tubmails'] = '<img style="height: 200px" src="' . $dump_pealtihan['image'] . '" alt="image">';
                    break;
                case 'png':
                    $dump_pealtihan['content_type'] = 'image';
                    $dump_pealtihan['tubmails'] = '<img style="height: 200px" src="' . $dump_pealtihan['image'] . '" alt="image">';
                    break;
                case 'png':
                    $dump_pealtihan['content_type'] = 'image';
                    $dump_pealtihan['tubmails'] = '<img style="height: 200px" src="' . $dump_pealtihan['image'] . '" alt="image">';
                    break;
                case 'jpg':
                    $dump_pealtihan['content_type'] = 'image';
                    $dump_pealtihan['tubmails'] = '<img style="height: 200px" src="' . $dump_pealtihan['image'] . '" alt="image">';
                    break;
                case 'jpeg':
                    $dump_pealtihan['content_type'] = 'image';
                    $dump_pealtihan['tubmails'] = '<img style="height: 200px" src="' . $dump_pealtihan['image'] . '" alt="image">';
                    break;
                case 'mp4':
                    $dump_pealtihan['content_type'] = 'video';
                    $dump_pealtihan['tubmails'] = '<center><iframe class="embed-responsive-item" style="height: 200px"
                                        src="' . $dump_pealtihan['image'] . '" allowfullscreen></iframe></center>';
                    break;
            }

            $dump_pealtihan['lokasi_pelatihan'] = $peserta->lokasi_pelatihan;
            $dump_pealtihan['link_pendaftaran'] = $peserta->link_pendaftaran;
            $dump_pealtihan['email'] = $perusahaan->email;
            $dump_pealtihan['list_pelatihan_id'] = $peserta->id;
            $dump_pealtihan['create_at'] = $value['created_at']->toFormattedDateString();

            if ($perusahaan->profile_photo_path == '') {
                $dump_pealtihan['image_perusahaan']       = url('assets/images/icons/icon.png');
            } else {
                $dump_pealtihan['image_perusahaan']       = $perusahaan->profile_photo_path;
            }

            $perusahaan_pelatihan[] = $dump_pealtihan;
            unset($dump_pealtihan);
        }
        if (!isset($perusahaan_pelatihan)) {
            $perusahaan_pelatihan[] = '';
        }
        $perusahaan_pelatihan = json_decode(json_encode($perusahaan_pelatihan));

        return view('welcome', [
            'loker' => $save,
            'pengumuman' => $perusahaan_pelatihan,
            'count_lowongan' => count(Loker::get()),
            'count_perusahaan' => count(User::where('role', 'perusahaan')->get()),
            'count_pekerja' => count(User::where('role', 'user')->get())
        ]);
    }
}
