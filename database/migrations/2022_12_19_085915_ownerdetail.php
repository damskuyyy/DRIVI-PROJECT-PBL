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
        Schema::create('ownerdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->nullable()->index();
            $table->string('no_telpon', 45)->nullable();
            $table->string('alamat')->nullable();
            $table->string('nama_perusahaan');
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
        Schema::dropIfExists('ownerdetails');
    }
};
