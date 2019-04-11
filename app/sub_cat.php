<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_cat extends Model
{
    protected $table = 'sub_kategori';
	protected $fillabel = ['idSub','idKategori','namaSub'];
    public $timestamps = false;
    public $primaryKey = 'idSub';

    public function kategori(){
        return $this->belongsTo(kategori::class,'idKategori', 'idKategori');
    }

    public function produk(){
        return $this->hasMany(produk::class,'idSub','idSub');
    }
}
