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
        Schema::create('jadwal_pengiriman_barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barangs');
            $table->bigInteger('Stok_pengiriman');
            $table->date('tanggal_pengiriman');

            $table->foreign('barangs')->references('id')->on('barang')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('jadwal_pengiriman_barang');
    }
};
