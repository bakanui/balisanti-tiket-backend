<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalKeberangkatanPenumpangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keberangkatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_jadwal');
            $table->bigInteger('id_penumpang');
            $table->timestamp('tanggal_keberangkatan');
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
        Schema::dropIfExists('keberangkatan');
    }
}
