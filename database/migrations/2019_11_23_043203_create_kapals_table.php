<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKapalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kapals', function (Blueprint $table) {
            $table->string('id_kapal')->primary();
            $table->string('nama_kapal');
            $table->string('mesin');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('dimension');
            $table->integer('kapasitas_penumpang');
            $table->integer('kapasitas_crew');
            $table->integer('kilometer');
            $table->string('id_armada');
            $table->bigInteger('id_jenis');
            $table->bigInteger('id_status');
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
        Schema::dropIfExists('kapals');
    }
}
