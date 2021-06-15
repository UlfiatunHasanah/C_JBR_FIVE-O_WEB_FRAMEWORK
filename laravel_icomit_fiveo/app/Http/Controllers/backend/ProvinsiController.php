<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProvinsiController extends Controller
{
    public function provinsi()
    {
        $provinsi = DB::table('provinsi')->get();
        return view('backend.layouts.asal_komunitas.provinsi' , compact('provinsi'));
    }

    public function create()
    {
        $provinsi = null;
        return view('backend.layouts.asal_komunitas.create_provinsi' , compact('provinsi'));
    }

    public function store(Request $request)
    {
        DB::table('provinsi') ->insert([
            'id_prov' => $request ->idprov,
            'nama_prov' => $request ->namaprov,
        ]);

        return redirect('adminweb/provinsi')
                        ->with('success', 'Data provinsi anda berhasil disimpan.');
    }
}
