<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillabel = ['idTransaksi','idProduk','nama','alamat','tanggal','jumlah','total_harga'];
    public $primaryKey = 'id';
    public $timestamps = false;

    public function produk(){
        return $this->belongsTo(produk::class,'idProduk','idProduk');
    }

}
