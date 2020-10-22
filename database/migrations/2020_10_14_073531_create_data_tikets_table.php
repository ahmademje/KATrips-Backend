<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tikets', function (Blueprint $table) {
            $table->id();
            $table->timestamp('waktu_berangkat', 0)->nullable();
            $table->timestamp('waktu_tiba', 0)->nullable();
            $table->string('gerbong_kode', 150);
            $table->integer('no_kursi');
            $table->integer('harga');
            $table->foreignId('kelas_id')->constrained('data_kelas')->onDelete('cascade');
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status_tikets')->onDelete('cascade');
            $table->foreignId('lokasi_berangkat')->constrained('data_stasiuns')->onDelete('cascade');
            $table->foreignId('lokasi_tiba')->constrained('data_stasiuns')->onDelete('cascade');
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
        Schema::dropIfExists('data_tikets');
    }
}
