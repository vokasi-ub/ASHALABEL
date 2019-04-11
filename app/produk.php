<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';
    protected $fillabel = ['idProduk','idSub','nama','deskripsi','stok','harga','gambar'];
    public $timestamps = false;
    public $primaryKey = 'idProduk';

    public function sub_cat(){
        return $this->belongsTo(sub_cat::class,'idSub','idSub');
    }
}
