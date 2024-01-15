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
        Schema::create('penjualan_barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barangs');
            $table->bigInteger('jumlahBarangKeluar');
            $table->decimal('harga_jual', 8, 2);

            $table->foreign('barangs')->references('id')->on('barang')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_keluar');
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
        Schema::dropIfExists('penjualan_barang');
    }
};
