<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('idTransaksi');
            $table->unsignedBigInteger('idToko')->index()->nullable();
            $table->unsignedBigInteger('id')->index()->nullable();
            $table->string('first_name');
            $table->enum('tipePembayaran', ['cash', 'tempo']);
            $table->timestamp('tanggalTransaksi');
            $table->enum('status', ['lunas', 'belum lunas'])->default('belum lunas');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users');
            $table->foreign('idToko')->references('idToko')->on('toko');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
}
