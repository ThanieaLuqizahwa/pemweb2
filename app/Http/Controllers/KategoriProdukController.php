<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriProdukController extends Controller
{
    
    public function index()
    {
        $kategori_produk = new KategoriProduk();
        return view('admin.kategoriproduk.kategori_produk', ['kategori_produk' => $kategori_produk->getAllData()]);
    }

    
    public function create()
    {
         // tampilkan data table kategori produk
         $kategori_produk = KategoriProduk::all();
         return view('admin.kategoriproduk.create', compact('kategori_produk'));
    }

    
    public function store(Request $request)
    {
        $kategoriproduk = new KategoriProduk();
        $kategoriproduk->nama = $request->nama;
        $kategoriproduk->save();
        return redirect('admin/kategoriproduk');
        
    }

    
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        DB::table('kategoriproduk')->where('id',$id)->delete();
        return redirect('admin/kategoriproduk');
    }
}
