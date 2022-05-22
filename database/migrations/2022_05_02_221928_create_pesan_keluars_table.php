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
        Schema::create('pesan_keluars', function (Blueprint $table) {
            $table->id();
            $table->integer('tujuanFaskes_id')->nullable();//id dari route binding
            $table->foreignId('faskes_id');//id yang auth
            $table->string('noBPJS');
            $table->text('deskripsi');
            $table->string('tujuanFaskes');
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
        Schema::dropIfExists('pesan_keluars');
    }
};
