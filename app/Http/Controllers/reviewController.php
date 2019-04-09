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
       $review = DB::table('review')
       ->where('tanggal','like',"%".$cari."%")
       ->paginate();
       //return data ke view
       return view('reviews.index',['review' => $review]);
    }

    public function addform(){
        return view('reviews.addform');
    }
    public function editform($id){
        $data = DB::table('review')->where('idReview',$id)->get();
		return view('reviews.editform', compact('data'));
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
        DB::table('review')->insert([
            'nama' => $request->nama,
			'email' => $request->email,
			'review' => $request->review,
			'status' => $request->status,
			'tanggal' => $request->tanggal,
            
          ]);

         return redirect('reviews');
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
        DB::table('review')->where('idReview',$id)->update([
            'nama' => $request->nama,
			'email' => $request->email,
			'review' => $request->review,
			'status' => $request->status,
			'tanggal' => $request->tanggal,
               ]);		
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
        DB::table('review')->where('idReview',$id)->delete();
		return redirect('reviews');
    }
}
