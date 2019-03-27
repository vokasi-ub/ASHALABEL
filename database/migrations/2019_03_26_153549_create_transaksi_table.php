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
            $table->primary('idTransaksi');
            $table->string('idTransaksi',30);
            $table->string('idProduk',30);
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
    }
}
