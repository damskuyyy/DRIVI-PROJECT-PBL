<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->bigInteger('id_mobil');
            $table->datetime('tanggal_transaksi');
            $table->string('status_transaksi');
            $table->datetime('tanggal_sewa');
            $table->datetime('tanggal_pengembalian');            
            $table->string('metode_pembayaran');
            $table->string('status_pengembalian');
            $table->integer('denda');
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
        Schema::dropIfExists('failed_jobs');
    }
};
