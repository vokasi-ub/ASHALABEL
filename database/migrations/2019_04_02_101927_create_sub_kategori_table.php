<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kategori', function (Blueprint $table) {
            $table->bigIncrements('idSub');
            $table->unsignedBigInteger('idKategori');
            $table->foreign('idKategori')->references('idKategori')->on('kategori')->onDelete('cascade');
            $table->string('namaSub');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_kategori');
        $table->dropForeign('idKategori');
    }
}
