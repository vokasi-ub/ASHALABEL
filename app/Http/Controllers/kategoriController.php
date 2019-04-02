<?php  

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\kategori;
use Illuminate\Support\Facades\DB;

class kategoriController extends Controller
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
       $kategori = DB::table('kategori')
       ->where('namaKategori','like',"%".$cari."%")
       ->paginate();
       //return data ke view
       return view('category.index',['kategori' => $kategori]);
    }

    public function addform(){
        return view('category.addform');
    }
    public function editform($id){
        $data = DB::table('kategori')->where('idKategori',$id)->get();
		return view('category.editform', compact('data'));
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
        DB::table('kategori')->insert([
            'namaKategori' => $request->namaKategori,
            
          ]);

         return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        DB::table('kategori')->where('idKategori',$id)->update([
            'namaKategori' => $request->namaKategori,
               ]);		
            return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('idKategori',$id)->delete();
		return redirect('category');
    }
}
