<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKeretaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kereta_kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kereta_id')->constrained('data_keretas')->onDelete('cascade');
            $table->foreignId('kelas_id')->constrained('data_kelas')->onDelete('cascade');
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
        Schema::dropIfExists('data_kereta_kelas');
    }
}
