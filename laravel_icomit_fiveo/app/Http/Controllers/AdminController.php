<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\admin;
use App\pemesanan;
use App\pengguna;
use App\room;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $pengguna = pengguna::all();
        return view('admin.index',['pengguna' => $pengguna]);
        
    }


    public function editstatus2($id)

    {
         
        $pengguna = pengguna::find($id); 
        $pengguna->delete();

        return redirect ('/admin-home');
    }


    public function editstatus1($id)

    {
         
        $pengguna = pengguna::find($id); 
        $pengguna->status = 'Disetujui';
        $pengguna->save();
        
        return redirect ('/admin-home');
    }
    
     public function list()
    {   
         $pengguna = pengguna::where('status' , 'Disetujui') -> get(); 
       
       
        return view('admin.list', ['pengguna' => $pengguna]);
        
    }


    public function detail($id)

    {
         
        $pengguna = pengguna::find($id); 
      

       return view ('admin.listdetail',['pengguna'=>$pengguna]);
    }
    

     

     
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
}
