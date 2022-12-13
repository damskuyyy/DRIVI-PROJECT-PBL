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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user');
            $table->string('nama_mobil');
            $table->string('jenis_mobil');
            $table->integer('harga');
            $table->string('deskripsi');
            $table->integer('jumlah_kursi');
            $table->string('bahan_bakar');
            $table->string('jenis_transmisi');
            $table->string('mobil_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('mobils');
    }
};
