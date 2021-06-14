<?php
namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return view('frontend.landing');
    }

    public function login()
    {
        return view('frontend.layouts.login');
    }

    public function register()
    {
        return view('frontend.layouts.register');
    }
}
