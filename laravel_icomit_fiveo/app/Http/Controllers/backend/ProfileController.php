<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile()
    {
        $profile_kom = DB::table('profile_kom')->get();
        return view('backend.layouts2.profile_komunitas.profile', compact('profile_kom'));
    }

    public function edit($id_kom)
    {
        $profile_kom = DB::table('profile_kom')->where('id_kom', $id_kom)->first();
        return view('backend.layouts2.profile_komunitas.create_profile', compact('profile_kom'));
    }
    
    public function create()
    {
        return view('backend.layouts2.profile_komunitas.create_profile');
    }

    public function store(Request $request)
    {
        //tujuan file
        $photo = $request->file('logo_kom')->getClientOriginalName();
        $destination = base_path() . '/public/data_komunitas';
        $request->file('logo_kom')->move($destination, $photo);
        
        DB::table('profile_kom') ->insert([
            'id_admin_kom' => $request -> id_admin_kom,
            'nama_kom' => $request ->nama_kom,
            'id_prov' => $request ->nama_prov,
            'id_kota' => $request ->nama_kota,
            'th_berdiri' => $request ->thn_berdiri,
            'jml_anggota' => $request ->jml_anggota,
            'link_wa' => $request ->link_wa,
            'link_ig' => $request ->link_ig,
            'desc_kom' => $request ->desc_kom,
            'logo_kom' => $photo,
        ]);

        return redirect()->route('profile_komunitas.profile')
                        ->with('success', 'Data profile komunitas anda berhasil disimpan.');
    }
}
