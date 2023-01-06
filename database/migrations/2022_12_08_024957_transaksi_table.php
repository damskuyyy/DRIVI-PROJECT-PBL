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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('mobil_id');
            $table->foreign('mobil_id')->references('id')->on('mobils')->onDelete('cascade');
            $table->datetime('tanggal_transaksi')->default(now());
            $table->string('status_transaksi')->default('Dipesan');
            $table->datetime('tanggal_sewa');
            $table->datetime('tanggal_pengembalian');            
            $table->string('metode_pembayaran')->default('Bayar di Tempat');
            $table->string('status_pengembalian')->default('Proses Sewa');
            $table->integer('denda')->default('0');
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
        Schema::dropIfExists('transactions');
    }
};
