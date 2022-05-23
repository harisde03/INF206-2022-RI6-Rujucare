<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $numberOfFaskes = 25;

        // \App\Models\Faskes::factory($numberOfFaskes)->create();
        // \App\Models\Kredensial::factory($numberOfFaskes)->create();
        // \App\Models\Ketersediaan::factory($numberOfFaskes)->create();
        // \App\Models\Spesialis::factory($numberOfFaskes * $numberOfFaskes)->create();
        // \App\Models\PesanMasuk::factory($numberOfFaskes * $numberOfFaskes)->create();
        // \App\Models\PesanKeluar::factory($numberOfFaskes * $numberOfFaskes)->create();

        \App\Models\Faskes::factory()->create([
            'email' => "zainoel-abidin@gmail.com",
            'password' => '$2a$12$cF2bPNxfGigYsEXKw0Z/weFojuUBjFjnO75IW1Abd9QGBDP/SX/mi',
        ]);

        \App\Models\Faskes::factory()->create([
            'email' => "rsia-aceh@gmail.com",
            'password' => '$2a$12$cF2bPNxfGigYsEXKw0Z/weFojuUBjFjnO75IW1Abd9QGBDP/SX/mi',
        ]);

        \App\Models\Faskes::factory()->create([
            'email' => "rumah-sakit-meutia@gmail.com",
            'password' => '$2a$12$cF2bPNxfGigYsEXKw0Z/weFojuUBjFjnO75IW1Abd9QGBDP/SX/mi',
        ]);

        \App\Models\Kredensial::factory()->create([
            'namaPublik' => "Rumah Sakit Umum Dr. Zainoel Abidin",
            'emailPublik' => "zainoel-abidin@gmail.com",
            'teleponPublik' => "065134565",
            'deskripsiPublik' => "Rumah Sakit Umum Terbesar di Aceh",
            'alamatPublik' => "Jl. Teuku Moh. Daud Beureueh No.108, Bandar Baru, Kec. Kuta Alam, Kota Banda Aceh, Aceh 24415",
            'tingkatPublik' => "Tingkat 1",
            'faskesPicture' => "",
            'urlFaskes' => "rumah-sakit-umum-dr-zainoel-abidin",
        ]);

        \App\Models\Kredensial::factory()->create([
            'namaPublik' => "Rumah Sakit Ibu dan Anak (RSIA) Aceh",
            'emailPublik' => "rsia-aceh@gmail.com",
            'teleponPublik' => "0651637796",
            'deskripsiPublik' => "Rumah Sakit Ibu dan Anak Terbesar di Aceh",
            'alamatPublik' => "Jalan Prof. A. Majid Ibrahim I No. 3, Meuraxa, Punge Jurong, Kec. Meuraxa, Kota Banda Aceh, Aceh 23116",
            'tingkatPublik' => "Tingkat 2",
            'faskesPicture' => "",
            'urlFaskes' => "rumah-sakit-ibu-dan-anak-rsia-aceh",
        ]);

        \App\Models\Kredensial::factory()->create([
            'namaPublik' => "Rumah Sakit Umum Meutia",
            'emailPublik' => "rumah-sakit-meutia@gmail.com",
            'teleponPublik' => "081370489708",
            'deskripsiPublik' => "Rumah Sakit Umum Terbesar di Meutia Aceh",
            'alamatPublik' => "Jl. Cut Mutia No.55, Kp. Baru, Kec. Baiturrahman, Kota Banda Aceh, Aceh 23116",
            'tingkatPublik' => "Tingkat 3",
            'faskesPicture' => "",
            'urlFaskes' => "rumah-sakit-umum-meutia",
        ]);

        \App\Models\Ketersediaan::factory()->create([
            'rujukanTersedia' => 45,
            'kamarTersedia' => 42,
        ]);

        \App\Models\Ketersediaan::factory()->create([
            'rujukanTersedia' => 26,
            'kamarTersedia' => 23,
        ]);

        \App\Models\Ketersediaan::factory()->create([
            'rujukanTersedia' => 25,
            'kamarTersedia' => 20,
        ]);
    }
}
