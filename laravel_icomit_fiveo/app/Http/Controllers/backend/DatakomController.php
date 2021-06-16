<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DatakomController extends Controller
{
    public function datakom()
    {
        $datakom = DB::table('profile_kom')->get();
        return view('backend.layouts.data_komunitas.data_komunitas', compact('datakom'));
    }
    public function create()
    {
        $datakom = null;
        return view('backend.layouts.data_komunitas.create_datakom' , compact('datakom'));
    }

    public function store(Request $request)
    {
        //tujuan file
        $photo = $request->file('logo_kom')->getClientOriginalName();
        $destination = base_path() . '/public/data_komunitas';
        $request->file('logo_kom')->move($destination, $photo);
        
        DB::table('profile_kom') ->insert([
            'nama_kom' => $request ->namakom,
            'id_prov' => $request ->namaprov,
            'id_kota' => $request ->namakota,
            'th_berdiri' => $request ->thnberdiri,
            'jml_anggota' => $request ->jmlanggota,
            'no_wa' => $request ->nowa,
            'instagram' => $request ->instagram,
            'desc_kom' => $request ->desckom,
            'logo_kom' => $photo,
            'id_admin_kom' => 1,
        ]);

        return redirect()->route('data_komunitas.datakom')
                        ->with('success', 'Data komunitas berhasil disimpan.');
    }
}
