<?php

namespace App\Http\Controllers;
use App\pengguna;



use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {

        return view('daftar.index');
    }


    





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




          $daftar = "NO";
        if($request->hasFile('fkeg'))
        {
            $destination = "fkeg";
            $fkeg = $request->file('fkeg');
            $fkeg->move($destination, $fkeg->getClientOriginalName());
            $request->fkeg = $request->file('fkeg')->getClientOriginalName();
            $daftar = 'Ya';

        }
        
        if($daftar=='Ya'){


        $daftar = new pengguna;
      
        $daftar->nama = $request->nama; 
        $daftar->coname = $request->coname;
        $daftar->email = $request->email;
        $daftar->password = $request->password;
        $daftar->prov = $request->prov;
        $daftar->kab = $request->kab;
        $daftar->nohp = $request->nohp;
        $daftar->nowa = $request->nowa;
        $daftar->ins = $request->ins;
        $daftar->you = $request->you;
        $daftar->status = "Menunggu";
        
        
        $daftar->fkeg = $request->fkeg;
      
      
        $daftar->save();     
        
        }      

         return redirect('/login');


        

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
