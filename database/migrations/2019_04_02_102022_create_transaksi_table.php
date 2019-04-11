<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('idTransaksi',40)->unique();
            $table->unsignedBigInteger('idProduk');
            $table->foreign('idProduk')->references('idProduk')->on('produk')->onDelete('cascade');
            $table->string('nama');
            $table->longText('alamat');
            $table->timestamp('tanggal')->useCurrent();
            $table->integer('jumlah');
            $table->double('total_harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
        $table->dropForeign('idProduk');
    }
}
