<?php  

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\produk;
use App\kategori;
use App\sub_cat;

use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
	   //mendenifisikan kata kunci
       $cari = $request->cari;
       //mencari data di database
       
       //return data ke view
       $product = produk::all();
       return view('product.index',compact('product'));
    }

    public function addform()
	{
		$sub_kategori = sub_cat::all();
		return view('product.addform', compact('sub_kategori'));
    }
	
    public function editform($id)
	{
        $data = produk::where('idProduk',$id)->get();
        $sub_cat = sub_cat::all();
       
        return view('product.editform', compact('data','sub_cat'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("image/", $fileName);

        $data = new produk();
        $data->idSub = $request->idSub;
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->stok = $request->stok;
        $data->harga = $request->harga;
        $data->gambar = $fileName;
        $data->save();

         return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = produk::find($id);
        $data->idSub = $request->idSub;
        $data->nama = $request->nama;
        $data->deskripsi = $request->deskripsi;
        $data->stok = $request->stok;
        $data->harga = $request->harga;
        $data->save();

        return redirect('product');
    }
	
	  public function updateImg(Request $request, $id)
    {
		$file       = $request->file('foto');
        $fileName   = $file->getClientOriginalName();
        $request->file('foto')->move("image/", $fileName);
		
        $data = produk::find($id);
        $data->gambar = $fileName;
        $data->save();

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = produk::find($id);
        $data->delete();

		return redirect('product');
    }
}
