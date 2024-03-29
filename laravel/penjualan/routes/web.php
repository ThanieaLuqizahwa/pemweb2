<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DelapanController;

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

Route::get('/delapan',[DelapanController::class, 'index']);
Route::POST('/hasildelapan',[DelapanController::class, 'hasildelapan']);
