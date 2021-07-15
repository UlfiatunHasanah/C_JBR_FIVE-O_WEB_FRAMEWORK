<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(){
        return view('frontend.layouts.register');
    }

    public function saveregister(Request $request){
        // dd($request->all());

        User::create([
            'username' =>  $request-> username,
            'email' =>  $request-> email,
            'password' =>  bcrypt($request-> password),
            'level' =>  $request-> level,
            '_token' => Str::random(100),
        ]);

        return redirect()->route('login')->with(['success' => 'Registrasi Anda Berhasil']);
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'username' => ['required', 'string', 'max:255', 'unique:users'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:6', 'confirmed'],
    //     ]);
    // }

    // protected function create(array $data)
    // {
    //     return User::create([
    //         'username' => $data['username'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'level' => $data['level'],
    //     ]);
    // }  
}
