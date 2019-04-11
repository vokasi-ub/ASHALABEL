<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class frontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$kategori = DB::Select('select * from kategori');
		$product = DB::select('select a.* , b.idKategori, c.idSub from produk a join sub_kategori c  on a.idSub =c.idSub
										join kategori b on b.idKategori = c.idKategori');
        return view('frontend.master',compact('kategori','product'));
    }
	public function detail($id)
	{
		$review = DB::select('select a.*,b.idProduk from review a join produk b on a.idProduk = b.idProduk where a.status != "pending"');
		$idTransaksi = 'ID-'.date('his');
		$tgl = date('d-m-Y');
		$product = DB::select('select a.*,b.*,c.* from produk a join sub_kategori b on a.idSub = b.idSub
										join kategori c on b.idKategori = c.idKategori
										 where a.idProduk=?',[$id]);
		return view('frontend.main-detail', compact('product','tgl','idTransaksi','review'));
	}
	
}
