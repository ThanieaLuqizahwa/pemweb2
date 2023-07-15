<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SembilanController;
use App\Http\Controllers\DelapanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SepuluhController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam',function() {
    return view('salam', [
        "nama"=>"Thaniea Luqizahwa",
        "umur"=>20
    ]);
});

Route::get('/nilai',function() {
    return view('nilai');
});

Route::get('/form',[FormController::class, 'index']);
Route::POST('/hasil',[FormController::class, 'hasil']);

Route::get('/sembilan',[SembilanController::class, 'index']);
Route::POST('/hasilsembilan',[SembilanController::class, 'hasilsembilan']);

Route::get('/delapan',[DelapanController::class, 'index']);
Route::POST('/hasildelapan',[DelapanController::class, 'hasildelapan']);

// route admin sepuluh
Route::prefix('admin')->group(function(){
    Route::get('/sepuluh',[SepuluhController::class, 'index']);
    Route::get('/about',[SepuluhController::class, 'index']);
});

// route admin
Route::group(['middleware' => ['auth', 'peran:admin-manager']], function(){
Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class, 'index']);
    Route::get('/produk',[ProdukController::class, 'index']);
    Route::get('/pesanan',[PesananController::class, 'index']);
    Route::get('/kategoriproduk',[KategoriProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('produk/delete/{id}', [ProdukController::class, 'destroy']);
    
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('pesanan/edit/{id}', [PesananController::class, 'edit']);
    Route::post('pesanan/update/{id}', [PesananController::class, 'update']);
    Route::get('pesanan/delete/{id}', [PesananController::class, 'destroy']);
    Route::get('/kategoriproduk/create', [KategoriProdukController::class, 'create']);
    Route::post('/kategoriproduk/store', [KategoriProdukController::class, 'store']);

    Route::get('/logout', [DashboardController::class, 'logout']);
});
});

// route frontend
Route::prefix('frontend')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/about',[SepuluhController::class, 'index']);
    Route::get('/sepuluh', [SepuluhController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
