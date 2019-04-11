<?php  

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\sub_cat;
use App\kategori;
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
	   $sub_cat = sub_cat::all();
       return view('sub_cat.index', compact('sub_cat'));
    }

    public function addform()
	{
		return view('sub_cat.addform');
    }
    public function editform($id){

        $sub_cat = sub_cat::where('idSub',$id)->get();
        $kategori = kategori::all();
		
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
        $data = new sub_cat();
        $data->idKategori = $request->idKategori;
        $data->namaSub = $request->namaSub;
        $data->save();
         
      /*  DB::table('sub_kategori')->insert([
            'idKategori' => $request->idKategori,
            'namaSub' => $request->namaSub
          ]);
          
          */

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
        $data = sub_cat::find($id);
        $data->namaSub = $request->namaSub;
        $data->save();
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
        $data = sub_cat::find($id);
        $data->delete();
		return redirect('sub_cat');
    }
}
