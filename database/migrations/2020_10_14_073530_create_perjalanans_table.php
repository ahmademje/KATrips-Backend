<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerjalanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perjalanans', function (Blueprint $table) {
            $table->id();
            $table->timestamp('waktu_berangkat', 0)->nullable();
            $table->timestamp('waktu_tiba', 0)->nullable();
            $table->foreignId('keretakelas_id')->constrained('data_kereta_kelas')->onDelete('cascade');
            $table->integer('harga');
            $table->foreignId('lokasi_berangkat_id')->constrained('data_stasiuns')->onDelete('cascade');
            $table->foreignId('lokasi_tiba_id')->constrained('data_stasiuns')->onDelete('cascade');
            $table->integer('penumpang_tersedia');
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
        Schema::dropIfExists('perjalanans');
    }
}
