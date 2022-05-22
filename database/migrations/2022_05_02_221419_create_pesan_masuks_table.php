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
        Schema::create('pesan_masuks', function (Blueprint $table) {
            $table->id();
            $table->integer('asalFaskes_id')->nullable();//pesan  yang sudah terautifikasi
            $table->foreignId('faskes_id');// arh faskes tujuannya
            $table->string('noBPJS');
            $table->text('deskripsi');
            $table->string('asalFaskes');
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
        Schema::dropIfExists('pesan_masuks');
    }
};
