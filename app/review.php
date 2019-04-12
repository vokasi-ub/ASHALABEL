<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table = 'review';
	protected $fillabel = ['idReview','nama','email','review','status','tanggal'];
	public $primaryKey = 'idReview';
    public $timestamps = false;
}
