<?php
namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index()
    {
        $provinsi = DB::table('provinsi')->get();
        return view('frontend.landing', compact('provinsi'));
    }

    

    public function faq()
    {
        return view('frontend.layouts.faq');
    }
}
