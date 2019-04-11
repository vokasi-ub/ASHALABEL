<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillabel = ['idKategori','namaKategori'];
    public $primaryKey = 'idKategori';
    public $timestamps = false;

    public function sub_cat(){
        return $this->hasMany(sub_cat::class);
    }
}
