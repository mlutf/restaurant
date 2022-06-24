<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pesanan', function (Blueprint $table) {
            $table->id('kd_pesanan');
            $table->bigInteger('kd_menu');
            $table->string('nama_pelanggan');
            $table->string('no_meja');
            $table->string('tgl_pesan');
            $table->string('keterangan');
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
        Schema::dropIfExists('tb_pesanan');
    }
}
