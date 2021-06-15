<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('backend.layouts2.profile_komunitas.profile');
    }
    public function create()
    {
        $profile_kom = null;
        return view('backend.layouts2.profile_komunitas.create_profile' , compact('profile_kom'));
    }

    public function store(Request $request)
    {
        DB::table('profile_kom') ->insert([
            'nama_kom' => $request ->namakom,
            'id_prov' => $request ->namaprov,
            'id_kota' => $request ->namakota,
            'th_berdiri' => $request ->thnberdiri,
            'jml_anggota' => $request ->jmlanggota,
            'no_wa' => $request ->nowa,
            'instagram' => $request ->ig,
            'desc_kom' => $request ->desckom,
            'logo_kom' => $request ->logokom,
        ]);

        return redirect()->route('profile_komunitas.profile')
                        ->with('success', 'Data profile komunitas anda berhasil disimpan.');
    }
}
