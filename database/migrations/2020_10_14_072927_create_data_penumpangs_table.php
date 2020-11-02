<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPenumpangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_penumpangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ktp', 150);
            $table->char('no_ktp', 16)->unique();
            $table->foreignId('bayi_id')->nullable()->constrained('data_bayis')->onDelete('cascade');
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
        Schema::dropIfExists('data_penumpangs');
    }
}
