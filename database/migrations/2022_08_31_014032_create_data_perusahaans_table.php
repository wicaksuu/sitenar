<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("kode_pendaftaran")->nullable();
            $table->string("name")->nullable();
            $table->string("no_tlp")->nullable();
            $table->string("wa")->nullable();
            $table->string("jenis_usaha")->nullable();
            $table->string("alamat")->nullable();
            $table->string("provinsi")->nullable();
            $table->string("kabupaten")->nullable();
            $table->string("kecamatan")->nullable();
            $table->string("desa")->nullable();
            $table->string("kode_pos")->nullable();
            $table->string("nama_pemilik_usaha")->nullable();
            $table->string("alamat_pemilik_usaha")->nullable();
            $table->string("provinsi_pemilik_usaha")->nullable();
            $table->string("kabupaten_pemilik_usaha")->nullable();
            $table->string("kecamatan_pemilik_usaha")->nullable();
            $table->string("desa_pemilik_usaha")->nullable();
            $table->string("nomor_akte_pendirian")->nullable();
            $table->string("pendirian_perusahaan")->nullable();
            $table->string("perpindahan_perusahaan")->nullable();
            $table->string("status_perusahaan")->nullable();
            $table->string("jumlah_cabang_di_indonesia")->nullable();
            $table->string("jumlah_cabang_di_luar_indonesia")->nullable();
            $table->string("status_kepemilikan")->nullable();
            $table->string("status_permodalan")->nullable();
            $table->string("asal_negara")->nullable();
            $table->string("waktu_kerja")->nullable();
            $table->string("sektor_pertambangan")->nullable();
            $table->string("sektor_esdm")->nullable();
            $table->string("sektor_perikanan")->nullable();
            $table->string("instalasi_pengolahan_limbah")->nullable();
            $table->string("pihak_ketiga")->nullable();
            $table->string("tingkat_upah_terendah")->nullable();
            $table->string("tingkat_upah_tertinggi")->nullable();
            $table->string("fasilitas_keselamatan_dan_kesehatan")->nullable();
            $table->string("fasilitas_kesejahteraan")->nullable();
            $table->string("nomor_bpjs")->nullable();
            $table->string("program_jaminan_kesehatan")->nullable();
            $table->string("program_jkk")->nullable();
            $table->string("program_jht")->nullable();
            $table->string("program_jkm")->nullable();
            $table->string("program_jp")->nullable();
            $table->string("perangkat_hubungan_kerja")->nullable();
            $table->string("perangkat_organisasi_keterangan")->nullable();
            $table->string("sudah_mempunyai_perencanaan_tenaga_kerja")->nullable();
            $table->string("rencana_jumlah_pekerja")->nullable();
            $table->string("rencana_jumlah_pekerja_laki_laki")->nullable();
            $table->string("jumlah_pekerja_terakhir")->nullable();
            $table->string("jumlah_pekerja_laki_laki_terakhir")->nullable();
            $table->string("jumlah_penerimaan_pekerja_dalam_12_bulan_terakhir")->nullable();
            $table->string("jumlan_pekerja_yang_berhenti_dalam_12_bulan_terakhir")->nullable();
            $table->string("program_pelatihan_bagi_pekerja")->nullable();
            $table->string("program_pemagangan")->nullable();
            $table->string("tanggal_lapor")->nullable();
            $table->string("tanggal_lapor_kembali")->nullable();
            $table->string("asal_tenaga_kerja")->nullable();
            $table->integer("status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_perusahaans');
    }
};
