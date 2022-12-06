<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Negara;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory(250)->create();

        User::factory()->create([
            'name' => 'Bidang A',
            'wa' => '082244456708',
            'email' => 'dinaker@wicaksu.com',
            'password' => bcrypt('Jack03061997'),
            'role' => 'disnaker',

        ]);

        User::factory()->create([
            'name' => 'Wicaksono Bayu Aji',
            'wa' => '082271077877',
            'email' => 'wicaksu@wicaksu.com',
            'password' => bcrypt('Jack03061997'),
            'role' => 'user',
            'ktp' => '3519100306970001',
            'kk' => 'contoh nomor kk',
            'npwp' => '968400697621000',
            'alamat' => 'wates 35/10',

        ]);

        User::factory()->create([
            'name' => 'PT Periska Multi Usaha',
            'wa' => '082244456708',
            'email' => 'sitenar@sitenar.com',
            'password' => bcrypt('Jack03061997'),
            'role' => 'perusahaan',
            'npwp' => '968400697621000',
            'alamat' => 'Jl. Sikatan RT. 041 RW.002',
            'no_tlp' => '03514773997',
            'kode_pos' => '63181',
            'jenis_usaha' => 'Jasa Boga Untuk Suatu Event Tertentu (Event Catering)',
            'nama_pemilik_usaha' => 'Periksa,Pkbi & Pt Imss',
            'alamat_pemilik_usaha' => 'Jl. Yos Sudarso No. 71',

        ]);


        $url = "https://restcountries.com/v3.1/all";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($curl);
        curl_close($curl);
        $negaras = json_decode($resp);
        foreach ($negaras as $negara) {
            $save['nama'] = $negara->name->common;
            $save['latitude'] = $negara->latlng[0];
            $save['longitude'] = $negara->latlng[1];
            Negara::create($save);
        }
    }
}
