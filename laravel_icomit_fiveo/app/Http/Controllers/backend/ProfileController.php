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
            'nama_kom' => $request ->namakom,
            'id_prov' => $request ->namaprov,
            'id_kota' => $request ->namakota,
            'th_berdiri' => $request ->thnberdiri,
            'jml_anggota' => $request ->jmlanggota,
            'no_wa' => $request ->nowa,
            'instagram' => $request ->instagram,
            'desc_kom' => $request ->desckom,
            'logo_kom' => $photo,
        ]);

        return redirect()->route('profile_komunitas.profile')
                        ->with('success', 'Data profile komunitas anda berhasil disimpan.');
    }
}
