<?php

namespace App\Http\Controllers;
use App\pengguna;
use App\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
public function index()
    {
      
     return view('login.index');
        
    }

    
    function login(Request $kiriman){
    	$data1 = admin::where('email', $kiriman->email)->where('password', $kiriman->password)->get();
    	$data2 = pengguna::where('email', $kiriman->email)->where('password', $kiriman->password)->where('status','Disetujui')->get();
    
  if(count($data1)>0){

  	Auth::guard('admin')->LoginUsingId($data1[0]['id']);
  	return redirect('/admin-home');

}else if (count($data2)>0) {

	Auth::guard('pengguna')->LoginUsingId($data2[0]['id']);
  	return redirect('/home');

}else{

	return view ('login.gagal');
}

    }


    function logout(){
    	if(Auth::guard('admin')->check()){
    	Auth::guard('admin')->logout();	
    
    } else if(Auth::guard('pengguna')->check()){
    	Auth::guard('pengguna')->logout();	

    } 

return redirect('/');

    }


}