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
            $table->string('gerbong_kode', 150);
            $table->integer('no_kursi');
            $table->integer('harga');
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status_tikets')->onDelete('cascade');
            $table->foreignId('perjalanan_id')->constrained('perjalanans')->onDelete('cascade');
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
