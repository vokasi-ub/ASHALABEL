<?php  

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\sub_cat;
use Illuminate\Support\Facades\DB;

class sub_catController extends Controller
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
	   $sub_cat = DB::select('select a.namaKategori, b.* from kategori a join sub_kategori b on a.idKategori = b.idKategori');
       return view('sub_cat.index', compact('sub_cat'));
    }

    public function addform()
	{
		$kategori = DB::SELECT('SELECT * From kategori');
        return view('sub_cat.addform', compact('kategori'));
    }
    public function editform($id){
        $sub_cat = DB::table('sub_kategori')->where('idSub',$id)->get();
		$kategori = DB::SELECT('SELECT * From kategori');
		return view('sub_cat.editform', compact('sub_cat','kategori'));
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
        DB::table('sub_kategori')->insert([
            'idKategori' => $request->idKategori,
            'namaSub' => $request->namaSub
          ]);

         return redirect('sub_cat');
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
        DB::table('sub_kategori')->where('idSub',$id)->update([
            'namaSub' => $request->namaSub,
               ]);		
            return redirect('sub_cat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('sub_kategori')->where('idSub',$id)->delete();
		return redirect('sub_cat');
    }
}
