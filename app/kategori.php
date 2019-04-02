<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
	protected $fillabel = ['idKategori','namaKategori'];
    public $timestamps = false;
}
