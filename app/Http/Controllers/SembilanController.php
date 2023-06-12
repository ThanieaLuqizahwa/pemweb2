<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SembilanController extends Controller
{
    public function index(){
        return view('sembilan');
    }

    // buat function yang di dalam nya mengambil inputan form
    // dengan menggunakan parameter $request
    // dan lakukan pengecekan apakah nama dll sudah di isi atau belum (required)

    public function hasilsembilan(Request $request){
        $this->validate($request, [
            "nama" => 'required',
            "tgl_periksa" => 'required',
            "tgl_lahir" => 'required',
            "jk" => 'required',
        ]);
        return view('hasilsembilan', ['data' => $request]);
    }
}
