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
        Schema::create('kredensial', function (Blueprint $table) {
            $table->id('id_kredensial');

            $table->string('namaPublik')->unique();
            $table->string('emailPublik');
            $table->string('tingkatPublik');
            $table->string('teleponPublik')->nullable();
            $table->string('deskripsiPublik')->nullable();
            $table->string('alamatPublik')->nullable();
            $table->string('faskesPicture')->nullable();
            $table->string('urlFaskes');
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
        Schema::dropIfExists('kredensial');
    }
};
