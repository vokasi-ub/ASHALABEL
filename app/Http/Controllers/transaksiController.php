<?php  

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\transaksi;
use App\produk;
use Illuminate\Support\Facades\DB;

class transaksiController extends Controller
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
       $trans = transaksi::all();
       return view('transation.index',['transaksi' => $trans]);
    }
	
    public function editform($id){

        $data = transaksi::where('idTransaksi',$id)->get();
        $product = produk::all();

		return view('transation.editform', compact('data','product'));
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
        $id = $request->idTransaksi;
        $idProduk = $request->idProduk;
		$stok = $request->stok;
		$jumlah = $request->jumlah;
		
        $data = new transaksi();
        $data->idTransaksi = $request->idTransaksi;
        $data->idProduk = $request->idProduk;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->total;
        $data->save();
		
		
		$dataProduct = produk::find($idProduk);
        $dataProduct->stok = $stok - $jumlah;
		$dataProduct->save();
		
         return redirect('nota/'.$id);
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
        $data = transaksi::find($id);
        $data->idTransaksi = $request->idTransaksi;
        $data->idProduk = $request->idProduk;
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jumlah = $request->jumlah;
        $data->total_harga = $request->total;
        $data->save();
        
       	
            return redirect('transation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = transaksi::find($id);
        $data->delete();
		return redirect('transation');
    }
	
	public function nota($id) {
		
		$data = DB::select('select a.*,a.nama as pelanggan,b.* from transaksi a join produk b 
							on a.idProduk= b.idProduk where a.idTransaksi=?',[$id]);
		return view('frontend.nota', compact('data'));
	}
	
	
}
