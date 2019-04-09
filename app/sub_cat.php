<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sub_cat extends Model
{
    protected $table = 'sub_kategori';
	protected $fillabel = ['idSub','idKategori','namaSub'];
    public $timestamps = false;
}
