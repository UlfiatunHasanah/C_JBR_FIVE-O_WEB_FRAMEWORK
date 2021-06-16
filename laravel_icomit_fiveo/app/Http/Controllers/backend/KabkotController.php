<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KabkotController extends Controller
{
    public function kabkot()
    {
        $kab_kot = DB::table('kab_kota')->get();
        return view('backend.layouts.asal_komunitas.kabkot' , compact('kab_kot'));
    }

    public function create()
    {
        $kab_kot = null;
        return view('backend.layouts.asal_komunitas.create_kabkot' , compact('kab_kot'));
    }

    public function store(Request $request)
    {
        DB::table('kab_kota') ->insert([
            'id_kabkot' => $request ->idkabkot,
            'nama_kab_kota' => $request ->namakabkot,
        ]);

        return redirect('adminweb/kabkot')
                        ->with('success', 'Data kabupaten/Kota anda berhasil disimpan.');
    }
}
