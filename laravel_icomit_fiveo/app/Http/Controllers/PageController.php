<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengguna;

class PageController extends Controller
{
	public function guest(Request $request) 
	{
        $keyword = $request->all() ;
        $keyword1 = $request->get('keyword1') ;
        $keyword2 = $request->get('keyword2') ;
      
        $pengguna = pengguna::where('status','Disetujui')->get();

        if($keyword){
            $pengguna = pengguna::where("prov","LIKE","%$keyword1%")->where("kab","LIKE","%$keyword2%")->get();

            
        }



		return view('komunitas',compact('pengguna'));
}




 public function detail($id)

    {
         
        $pengguna = pengguna::find($id); 
      

       return view ('detail',['pengguna'=>$pengguna]);
    }

     public function tentang()
    {
        return view('tentang');
    }
    public function bantuan()
    {
        return view('bantuan');
    }

   
}
