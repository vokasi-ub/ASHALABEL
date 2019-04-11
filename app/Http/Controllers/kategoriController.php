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
       
       //return data ke view
       $kategori = kategori::all();
       return view('category.index', compact('kategori'));
    }

    public function addform(){
        return view('category.addform');
    }
    public function editform($id){
        $data = kategori::where('idKategori',$id)->get();
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
        $data = new kategori();
        $data->namaKategori = $request->namaKategori;
        $data->save();
         
         return redirect('category');
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
        $data = kategori::find($id);
        $data->namaKategori = $request->namaKategori;
        $data->save();	
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
        $data = kategori::find($id);
        $data->delete();

		return redirect('category');
    }
}
