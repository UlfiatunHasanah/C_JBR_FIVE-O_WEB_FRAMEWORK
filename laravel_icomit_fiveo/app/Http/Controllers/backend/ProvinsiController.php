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

    public function edit($id_prov)
    {
        $provinsi = DB::table('provinsi')->where('id_prov', $id_prov)->first();
        return view('backend.layouts.asal_komunitas.create_provinsi', compact('provinsi'));
    }

    public function create()
    {
        $provinsi = null;
        return view('backend.layouts.asal_komunitas.create_provinsi' , compact('provinsi'));
    }

    public function destroy($id_prov)
    {
        DB::table('provinsi')->where('id_prov', $id_prov)->delete();
        return redirect()->route('provinsi')
                        ->with('success', 'Data provinsi anda berhasil dihapus.');
    }

    public function store(Request $request)
    {
        DB::table('provinsi') ->insert([
            'id_prov' => $request ->id_prov,
            'nama_prov' => $request ->nama_prov,
        ]);

        return redirect('adminweb/provinsi')
                        ->with('success', 'Data provinsi anda berhasil disimpan.');
    }

    public function update(Request $request)
    {
        DB::table('provinsi') ->where('id_prov', $request ->id_prov)->update([
            'nama_prov' => $request ->nama_prov,
        ]);

        return redirect('adminweb/provinsi')
                        ->with('success', 'Data provinsi anda berhasil diperbarui.');
    }
}
