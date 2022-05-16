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
        Schema::create('kredensials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faskes_id');
            $table->string('namaPublik');
            $table->string('emailPublik')->unique();
            $table->string('teleponPublik')->nullable();
            $table->text('deskripsiPublik');
            $table->text('alamatPublik');
            $table->string('faskesPicture')->nullable();
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
        Schema::dropIfExists('kredensials');
    }
};
