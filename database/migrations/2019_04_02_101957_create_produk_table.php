<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('idProduk');
            $table->unsignedBigInteger('idSub');
            $table->foreign('idSub')->references('idSub')->on('sub_kategori')->onDelete('cascade');
            $table->string('nama');
            $table->longText('deskripsi');
            $table->integer('stok');
            $table->double('harga');
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
        $table->dropForeign('idSub');
    }
}
