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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('role');
            $table->string('wa')->nullable();
            $table->string('ktp')->nullable();
            $table->string('kk')->nullable();
            $table->string('npwp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('village_id')->nullable();
            $table->string('regencie_id')->nullable();
            $table->string('province_id')->nullable();
            $table->string('district_id')->nullable();


            $table->string('agama')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('tahun_kelulusan')->nullable();
            $table->string('nama_sekolah')->nullable();

            $table->string('jabatan_dalam_negeri')->nullable();
            $table->string('wilayah_kerja_dalam_negeri')->nullable();
            $table->string('province_id_dalam_negeri')->nullable();
            $table->string('regencie_id_dalam_negeri')->nullable();
            $table->string('district_id_dalam_negeri')->nullable();
            $table->string('village_id_dalam_negeri')->nullable();
            $table->string('jabatan_luar_negeri')->nullable();
            $table->string('wilayah_kerja_luar_negeri')->nullable();
            $table->string('negara_tujuan_luar_negeri')->nullable();

            //perusahaan
            $table->string('no_tlp')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('nama_pemilik_usaha')->nullable();
            $table->string('jenis_usaha')->nullable();
            $table->string('alamat_pemilik_usaha')->nullable();
            $table->string('village_id_pemilik_usaha')->nullable();
            $table->string('regencie_id_pemilik_usaha')->nullable();
            $table->string('province_id_pemilik_usaha')->nullable();
            $table->string('district_id_pemilik_usaha')->nullable();
            $table->string('nomor_bpjs')->nullable();
            $table->string('omset')->nullable();
            $table->string('jumlah_tenaga_kerja')->nullable();
            // end perusahaan

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
