<?php

namespace App\Http\Controllers;
use App\pengguna;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   
    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/index');
    	}
    	return redirect()->back()->with('gagal','Email atau Password salah atau tidak tepat');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'admin') {
            return redirect('/admin-home');
        }else if (Auth()->user()->role == 'pengguna') {
            return redirect('/home');
       
        }
    }
}
