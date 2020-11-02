<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pemesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamp('waktu_pesan');
            $table->integer('invoicecetak_no');
            $table->integer('total_harga');
            $table->foreignId('kodepembayaran_id')->constrained('kode_pembayarans')->onDelete('cascade');
            $table->foreignId('pembayaranstatus_id')->constrained('status_pembayarans')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('data_users')->onDelete('cascade');
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
        Schema::dropIfExists('data_pemesanans');
    }
}
