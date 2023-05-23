<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelapanController extends Controller
{
    public function index(){
        return view('delapan');
    }

    // buat function yang di dalam nya mengambil inputan form
    // dengan menggunakan parameter $request
    // dan lakukan pengecekan apakah nama dll sudah di isi atau belum (required)

    public function hasildelapan(Request $request){
        $this->validate($request, [
            "nama" => 'required',
            "email" => 'required',
            "lokasi" => 'required',
            "jenis_kelamin" => 'required',
            "skill" => 'required',
        ]);
        return view('hasildelapan', ['data' => $request]);
    }
}
