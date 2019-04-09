<?php  

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\transaksi;
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
       //mendenifisikan kata kuci
       $cari = $request->cari;
       //mencari data di database
       $trans = DB::table('transaksi')
       ->where('nama','like',"%".$cari."%")
       ->paginate();
       //return data ke view
       return view('transation.index',['transaksi' => $trans]);
    }

    public function addform(){
        return view('frontend.main-detail');
    }
	
    public function editform($id){
        $data = DB::table('transaksi')->where('idTransaksi',$id)->get();
		return view('transation.editform', compact('data'));
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
        DB::table('transaksi')->insert([
			'idTransaksi'=>$request->idTransaksi,
            'idProduk' => $request->idProduk,  
            'nama' => $request->nama,  
            'alamat' => $request->alamat,  
            'jumlah' => $request->jumlah,  
            'total_harga' => $request->total,  
          ]);
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
        DB::table('transaksi')->where('idTransaksi',$id)->update([
            'idProduk' => $request->idProduk,  
            'nama' => $request->nama,  
            'alamat' => $request->alamat,  
            'tanggal' => $request->tanggal,  
            'jumlah' => $request->jumlah,  
            'total_harga' => $request->total_harga,
               ]);		
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
        DB::table('transaksi')->where('idTransaksi',$id)->delete();
		return redirect('transation');
    }
	
	public function nota($id) {
		
		$data = DB::select('select a.*,b.* from transaksi a join produk b 
							on a.idProduk= b.idProduk where a.idTransaksi=?',[$id]);
		return view('frontend.nota', compact('data'));
	}
	
	
}
