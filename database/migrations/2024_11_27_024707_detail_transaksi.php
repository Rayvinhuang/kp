<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('idDetailTransaksi');
            $table->unsignedBigInteger('idBarang')->index()->nullable();
            $table->string('namaBarang');
            $table->integer('jumlahBarang');
            $table->timestamp('hargaBarang');
            $table->timestamps();

            $table->foreign('idBarang')->references('idBarang')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
}
