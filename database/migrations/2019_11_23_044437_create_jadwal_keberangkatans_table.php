<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalKeberangkatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_keberangkatans', function (Blueprint $table) {
            $table->string('id_jadwal')->primary();
            $table->time('jadwal');
            $table->string('status');
            $table->integer('harga');
            $table->string('id_armada');
            $table->string('id_nahkoda');
            $table->string('id_kapal');
            $table->string('id_rute');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_keberangkatans');
    }
}
