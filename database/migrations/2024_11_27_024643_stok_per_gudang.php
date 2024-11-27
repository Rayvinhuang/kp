<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StokPerGudang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_per_gudang', function (Blueprint $table) {
            $table->id('idStok');
            $table->unsignedBigInteger('idGudang')->index()->nullable();
            $table->unsignedBigInteger('idBarang')->index()->nullable();
            $table->integer('jumlahStok');
            $table->timestamps();

            $table->foreign('idBarang')->references('idBarang')->on('barang');
            $table->foreign('idGudang')->references('idGudang')->on('gudang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_per_gudang');
    }
}
