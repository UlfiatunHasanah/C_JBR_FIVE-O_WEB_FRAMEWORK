<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminkomController extends Controller
{
    public function admink()
    {
        $akun_admin_kom = DB::table('akun_admin_kom')->get();
        return view('backend.layouts.data_akun.admin_kom' , compact('akun_admin_kom'));
    }

    public function create()
    {
        $akun_admin_kom = null;
        return view('backend.layouts.data_akun.create_akun_admink' , compact('akun_admin_kom'));
    }

    public function edit($id_admin_kom)
    {
        $akun_admin_kom = DB::table('akun_admin_kom')->where('id_admin_kom', $id_admin_kom)->first();
        return view('backend.layouts.data_akun.create_akun_admink', compact('akun_admin_kom'));
    }
    public function destroy($id_admin_kom)
    {
        DB::table('akun_admin_kom')->where('id_admin_kom', $id_admin_kom)->delete();
        return redirect()->route('admink')
                        ->with('success', 'Data akun admin komunitas anda berhasil dihapus.');
    }


    public function store(Request $request)
    {
        DB::table('akun_admin_kom') ->insert([
            'username' => $request ->username,
            'email' => $request ->email,
            'password' => $request ->password,
            'ver_pass' => $request ->ver_pass,
        ]);

        return redirect('adminweb/admink')
                        ->with('success', 'Data akun admin komunitas anda berhasil disimpan.');
    }

    public function update(Request $request)
    {
        DB::table('akun_admin_kom') ->where('id_admin_kom', $request ->id_admin_kom)->update([
            'username' => $request ->username,
            'email' => $request ->email,
            'password' => $request ->password,
            'ver_pass' => $request ->ver_pass,
        ]);

        return redirect('adminweb/admink')
                        ->with('success', 'Data akun admin komunitas anda berhasil diperbarui.');
    }
}
