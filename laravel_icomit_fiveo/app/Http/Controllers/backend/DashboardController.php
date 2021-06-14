<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function adminweb()
    {
        return view('backend.layouts.template');
    }

    public function adminkom()
    {
        return view('backend.layouts2.dashboard2');
    }
}
