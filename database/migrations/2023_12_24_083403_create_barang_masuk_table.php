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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('barangs');
            $table->unsignedBigInteger('suppliers');
            $table->bigInteger('jumlahBarangMasuk');
            $table->date('tanggal_masuk');
            $table->decimal('harga_beli', 8, 2);

            $table->foreign('barangs')->references('id')->on('barang')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('suppliers')->references('id')->on('supplier')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('barang_masuk');
    }
};
