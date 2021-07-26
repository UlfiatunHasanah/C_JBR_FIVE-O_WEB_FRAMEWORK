<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengguna;

class ApiController extends Controller
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

		echo json_encode($pengguna);
}




 public function detail($id)

    {
         
        $pengguna = pengguna::find($id); 
      
        echo json_encode($pengguna);
    }

}
