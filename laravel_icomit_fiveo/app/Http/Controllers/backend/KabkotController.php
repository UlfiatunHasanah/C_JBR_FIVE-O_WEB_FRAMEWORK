<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KabkotController extends Controller
{
    public function kabkot()
    {
        $kab_kota = DB::table('kab_kota')->join('provinsi','kab_kota.id_prov','=','provinsi.id_prov')->get();
        return view('backend.layouts.asal_komunitas.kabkot' , compact('kab_kota'));
    }

    public function edit($id_kabkot)
    {
        $kab_kota = DB::table('kab_kota')->where('id_kabkot', $id_kabkot)->first();
        $provinsi = DB::table('provinsi')->get();
        $data = [
            'provinsi' => $provinsi
        ];
        return view('backend.layouts.asal_komunitas.create_kabkot', $data, compact('kab_kota'));
    }

    public function create()
    {
        $kab_kota = null;
        $provinsi = DB::table('provinsi')->get();
        $data = [
            'provinsi' => $provinsi
        ];
        return view('backend.layouts.asal_komunitas.create_kabkot' , $data);
        // echo json_encode($provinsi);
    }

    public function destroy($id_kabkot)
    {
        DB::table('kab_kota')->where('id_kabkot', $id_kabkot)->delete();
        return redirect('adminweb/kabkot')
                        ->with('Success', 'Data kabupaten/kota anda berhasil dihapus.');
    }


    public function store(Request $request)
    {
        DB::table('kab_kota') ->insert([
            'id_kabkot' => $request ->id_kabkot,
            'id_prov' => $request ->id_prov,
            'nama_kab_kota' => $request ->nama_kab_kota,
        ]);

        return redirect('adminweb/kabkot')
                        ->with('success', 'Data kabupaten/Kota anda berhasil disimpan.');
    }

    public function update(Request $request)
    {
        DB::table('kab_kota') ->where('id_kabkot', $request ->id_kabkot)->update([
            'id_kabkot' => $request ->id_kabkot,
            'id_prov' => $request ->id_prov,
            'nama_kab_kota' => $request ->nama_kab_kota,
        ]);

        return redirect('adminweb/kabkot')
                        ->with('success', 'Data kabupaten/Kota anda berhasil diperbarui.');
    }
}
