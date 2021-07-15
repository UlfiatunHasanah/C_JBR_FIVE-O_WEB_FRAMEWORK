<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function adminweb()
    {
        $dashboard = DB::table('profile_kom')->join('provinsi','profile_kom.id_prov','=','provinsi.id_prov')->get();
        return view('backend.layouts.dashboard' , compact('dashboard'));
    }

    public function adminkom()
    {
        return view('backend.layouts2.dashboard2');
    }

}
