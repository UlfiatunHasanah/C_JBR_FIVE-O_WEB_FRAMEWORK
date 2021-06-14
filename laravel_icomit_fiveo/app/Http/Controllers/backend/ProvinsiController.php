<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProvinsiController extends Controller
{
    public function provinsi(){
        return view('backend.layouts.asal_komunitas.provinsi');
    }
}
