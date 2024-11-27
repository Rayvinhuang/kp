<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PengambilanBarangGudang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengambilan_barang_gudang', function (Blueprint $table) {
            $table->id('idPengambilanBarang');
            $table->unsignedBigInteger('idToko')->index()->nullable();
            $table->string('namaToko');
            $table->unsignedBigInteger('idBarang')->index()->nullable();
            $table->string('namaBarang');
            $table->unsignedBigInteger('idGudang')->index()->nullable();
            $table->string('namaGudang');
            $table->string('lokasi');
            $table->string('namaSopir');
            $table->timestamp('tanggalPengambilan');

            $table->foreign('idBarang')->references('idBarang')->on('barang');
            $table->foreign('idGudang')->references('idGudang')->on('gudang');
            $table->foreign('idToko')->references('idToko')->on('toko');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengambilan_barang_gudang');
    }
}
