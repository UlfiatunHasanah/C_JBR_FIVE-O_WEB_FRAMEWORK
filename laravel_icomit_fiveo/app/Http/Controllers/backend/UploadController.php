<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function upload(){
        return view('backend.layouts2.profile_komunitas.profile');
    }

    public function proses_upload(Request $request){
        $this->validate($request, [
            'logo_kom' => 'required' ,
        ]);

        //menyimpan data file yang diupload ke variabel $file
        $logokom= $request->file('logo_kom');

        //tujuan file
    $tujuan_upload = 'data_komunitas';
    $logokom->move($tujuan_upload, $logokom->getClientOriginalName());


    }
}
