<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DatakomController extends Controller
{
    public function datakom()
    {
        $datakom = DB::table('profile_kom')->join('provinsi','profile_kom.id_prov','=','provinsi.id_prov')->get();
        return view('backend.layouts.data_komunitas.data_komunitas', compact('datakom'));
    }
    public function create()
    {
        $datakom = null;
        $provinsi = DB::table('provinsi')->get();
        $kab_kota = DB::table('kab_kota')->get();
        $admink = DB::table('akun_admin_kom')->get();
        $data = [
            'provinsi' => $provinsi,
            'kab_kota' => $kab_kota,
            'akun_admin_kom' => $admink,
        ];
        return view('backend.layouts.data_komunitas.create_datakom' , $data, compact('datakom'));
    }

    public function edit($id_kom)
    {
        $datakom = DB::table('profile_kom')->where('id_kom', $id_kom)->first();
        return view('backend.layouts.data_komunitas.create_datakom' , compact('datakom'));
    }

    public function destroy($id_kom)
    {
        $photo = DB::table('profile_kom')->where('id_kom', $id_kom)->first();
        File::delete('logo_kom', $photo->destination);
        DB::table('profile_kom')->where('id_kom', $id_kom)->delete();
        return redirect()->route('provinsi')
                        ->with('success', 'Data komunitas anda berhasil dihapus.');
    }

    public function store(Request $request)
    {
        //tujuan file
        $photo = $request->file('logo_kom')->getClientOriginalName();
        $destination = base_path() . '/public/data_komunitas';
        $request->file('logo_kom')->move($destination, $photo);
        
        DB::table('profile_kom') ->insert([
            'id_admin_kom' => $request ->id_admin_kom,
            'nama_kom' => $request ->nama_kom,
            'id_prov' => $request ->id_prov,
            'id_kabkot' => $request ->id_kabkot,
            'th_berdiri' => $request ->th_berdiri,
            'jml_anggota' => $request ->jml_anggota,
            'link_wa' => $request ->link_wa,
            'link_ig' => $request ->link_ig,
            'desc_kom' => $request ->desc_kom,
            'logo_kom' => $photo,
        ]);

        return redirect()->route('data_komunitas.datakom')
                        ->with('success', 'Data komunitas berhasil disimpan.');
    }

    public function update(Request $request)
    {
        //tujuan file
        $photo = $request->file('logo_kom')->getClientOriginalName();
        $destination = base_path() . '/public/data_komunitas';
        $request->file('logo_kom')->move($destination, $photo);
        
        DB::table('profile_kom') ->where('id_kom', $request ->id_kom)->update([
            'id_admin_kom' => $request ->id_admin_kom,
            'nama_kom' => $request ->nama_kom,
            'id_prov' => $request ->id_prov,
            'id_kabkot' => $request ->id_kabkot,
            'th_berdiri' => $request ->thn_berdiri,
            'jml_anggota' => $request ->jml_anggota,
            'link_wa' => $request ->link_wa,
            'link_ig' => $request ->link_ig,
            'desc_kom' => $request ->desc_kom,
            'logo_kom' => $photo,
        ]);

        return redirect()->route('data_komunitas.datakom')
                        ->with('success', 'Data komunitas berhasil diperbarui.');
    }

}
