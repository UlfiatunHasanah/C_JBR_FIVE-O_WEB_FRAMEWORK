<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login()
    {
        return view('frontend.layouts.login');
    }

    public function postlogin (Request $request){
        // dd($request->all());
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        //Tampung informasi loginnya, dimana kolom type pertama bersifat dinamis
        //Berdasarkan value dari pengecekan diatas

        $login= [
            $loginType => $request ->username,
            'password' => $request ->passwword,
        ];

        if (Auth::attempt($request->only($login))){
            $akun = DB::table('users')->where('email', $request->email)->first();
            if($akun->level =='adminweb'){
                Auth::guard('adminweb')->LoginUsingId($akun->id);
                return redirect()->route('adminweb')->with('success','Selamat Datang Admin Website');

            }else if($akun->level =='adminkom'){
                    Auth::guard('adminkom')->LoginUsingId($akun->id);
                    return redirect()->route('adminkom')->with('success','Selamat Datang Admin Komunitas');
            }
        }

        return redirect()->route('login')->with(['error' => 'Email/Password salah!']);
    }

    public function logout(){
        if(Auth::guard('adminweb')->check()){
            Auth::guard('adminweb')->logout();
        } else if(Auth::guard('adminkom')->check()){
            Auth::guard('adminkom')->logout();
        }
        return redirect()->route('login')->with('success','Anda telah logout !');
        // Auth::logout();
    }
}
