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
        Schema::create('persediaan_barang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jumlahStok');
            $table->date('tanggal_update');
            $table->unsignedBigInteger('barangs');
            $table->unsignedBigInteger('staffs');

            $table->foreign('barangs')->references('id')->on('barang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('staffs')->references('id')->on('staff')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('persediaan_barang');
    }
};
