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


        PesanKeluar::factory(10)->create();

        PesanMasuk::factory(10)->create();

        Spesialis::factory(10)->create();




    }
}
