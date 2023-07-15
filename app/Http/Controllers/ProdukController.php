<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' => $produk->getAllData()]);
    }

   
    public function create()
    {
        // tampilkan seluruh data table kategori produk
        $kategori_produk = KategoriProduk::all();
        // tampilkan data table kategori produk
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }


    public function store(Request $request)
    {
        // buat instance class baru dari model yang bernama produk
        // ambil data yang di inputkan user dengan menggunakan parameter request
        // lalau masukkan ke dalam kolom table produk
        // save data yag sudah di ambil menggunakan parameter request dengan method save()
        // kembalikan ke tampilan view produk setelah mengklik button simpan
        $produk = new Produk();
        $produk->kode = $request->kode; 
        $produk->nama = $request->nama; 
        $produk->harga_jual = $request->harga_jual; 
        $produk->harga_beli = $request->harga_beli; 
        $produk->stok = $request->stok; 
        $produk->min_stok = $request->min_stok; 
        $produk->deskripsi = $request->deskripsi; 
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }

   
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.edit', compact('produk','kategori_produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode; 
        $produk->nama = $request->nama; 
        $produk->harga_jual = $request->harga_jual; 
        $produk->harga_beli = $request->harga_beli; 
        $produk->stok = $request->stok; 
        $produk->min_stok = $request->min_stok; 
        $produk->deskripsi = $request->deskripsi; 
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka table produk
        // cari data yang ingin dihapus berdasarkan id nya
        // hapus data menggunakan method delete()
        DB::table('produk')->where('id',$id)->delete();
        return redirect('admin/produk');
    }
}