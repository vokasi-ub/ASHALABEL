<?php  

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\produk;
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
	   
	   //mendenifisikan kata kuci
       $cari = $request->cari;
       //mencari data di database
       
       //return data ke view
	   $product = DB::select('select a.namaSub, b.* from sub_kategori a join produk b on a.idSub = b.idSub');
       return view('product.index',['produk' => $product]);
    }

    public function addform()
	{
		$sub_kategori = DB::SELECT('SELECT * From sub_kategori');
		return view('product.addform', compact('sub_kategori'));
    }
	
    public function editform($id)
	{
        $data = DB::table('produk')->where('idProduk',$id)->get();
		$sub_kategori = DB::SELECT('SELECT * From sub_kategori');
		return view('product.editform', compact('data'));
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
		
        DB::table('produk')->insert([
            'idSub' => $request->idSub,  
            'nama' => $request->nama,  
            'deskripsi' => $request->deskripsi,  
            'stok' => $request->stok,  
            'harga' => $request->harga,  
            'gambar' => $fileName  
          ]);

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
        DB::table('produk')->where('idProduk',$id)->update([
            'idSub' => $request->idSub,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $request->gambar,
           
               ]);		
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
        DB::table('produk')->where('idProduk',$id)->delete();
		return redirect('product');
    }
}
