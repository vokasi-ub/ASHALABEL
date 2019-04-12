<?php  

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\review;
use Illuminate\Support\Facades\DB;

class reviewController extends Controller
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
	   $review = review::all();
       return view('reviews.index',['review' => $review]);
    }

    public function addform(){
        return view('reviews.addform');
    }
    public function editform($id){
		
		$data = review::where('idReview',$id)->get();
		$sts = review::all();
		return view('reviews.editform', compact('data','sts'));
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
		$id = $request->idProduk;
		
		$data = new review();
        $data->idProduk = $request->idProduk;
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->review = $request->review;
        $data->status = 'pending';
        $data->save();
		  
         return redirect('main-detail/'.$id);
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
		$data = review::find($id);
        $data->status = 'pending';
        $data->save();
		
		
       // DB::table('review')->where('idReview',$id)->update([
	//	'status' => $request->status
          //  ]);		
            return redirect('reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$data = review::find($id);
        $data->delete();
		
       // DB::table('review')->where('idReview',$id)->delete();
		return redirect('reviews');
    }
}
