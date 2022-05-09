<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faskes;
use App\Models\ketersediaan;
use App\Models\Kredensial;
use App\Models\Pesan;
use App\Models\PesanKeluar;
use App\Models\PesanMasuk;
use App\Models\Spesialis;

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
        Faskes::factory(2)->create();

        Ketersediaan::factory(2)->create();

        Kredensial::factory(2)->create();

        Pesan::factory(5)->create();

        PesanKeluar::factory(5)->create();

        PesanMasuk::factory(5)->create();

        Spesialis::factory(3)->create();




    }
}
