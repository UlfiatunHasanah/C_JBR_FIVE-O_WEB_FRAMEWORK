<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\pengguna;
use App\login_pengguna;
use App\pemesanan;
use App\room;


class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $userid = Auth::user()->id;
       $pengguna = \App\pengguna::where('id','=',$userid)->first();
        return view('user.home',['pengguna'=>$pengguna]);
    }

    


public function kom(Request $request) 
    {
        $userid = Auth::user()->id;
        $pengguna = \App\pengguna::where('id','=',$userid)->first();
        $keyword = $request->all() ;
        $keyword1 = $request->get('keyword1') ;
        $keyword2 = $request->get('keyword2') ;
      
        $pengguna1 = pengguna::where('status','Disetujui')->get();

        if($keyword){
            $pengguna1 = pengguna::where("prov","LIKE","%$keyword1%")->where("kab","LIKE","%$keyword2%")->get();

            
        }

        return view('user.komunitas',compact('pengguna','pengguna1'));
}



 public function detail($id)

    {
       $userid = Auth::user()->id;
       $pengguna = \App\pengguna::where('id','=',$userid)->first();
        $pengguna1 = pengguna::find($id); 
      

       return view ('user.detail',['pengguna'=>$pengguna],['pengguna1'=>$pengguna1]);
    }


public function profil()

    {
       $userid = Auth::user()->id;
       $pengguna = \App\pengguna::where('id','=',$userid)->first();
       
      

       return view ('user.profil',['pengguna'=>$pengguna]);
    }


public function update(Request $request, $id)
    {

     $pengguna = pengguna::find($id);
         $pengguna->update($request->all());
         
        if ($request ->hasFile('logo')) {
            $destination= "logo";
              $request->file('logo')->move($destination,$request->file('logo')->getClientOriginalName());
              $pengguna->logo = $request->file('logo')->getClientOriginalName();
              $pengguna->save();
          }
        
     

   

          return redirect ('/profil');  }

public function bantuan()
    {   
         $userid = Auth::user()->id;
       $pengguna = \App\pengguna::where('id','=',$userid)->first();
        return view('user.bantuan',['pengguna'=>$pengguna]);
    }


}
