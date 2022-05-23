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
        Schema::create('pesan_masuk', function (Blueprint $table) {
            $table->id('id_pesan_masuk');

            $table->foreignId('id_faskes_pengirim');
            $table->foreignId('id_faskes_penerima');

            $table->string('nomorBpjs');
            $table->string('deskripsiPesanMasuk');
            $table->integer('persetujuanPesanMasuk');
            $table->string('gambarPesanMasuk');
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
        Schema::dropIfExists('pesan_masuk');
    }
};
