<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataKamarController;
use App\Http\Controllers\DataReservasiController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\PemesananController;
use App\Models\FasilitasHotel;
use App\Models\FasilitasKamar;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/pesanReservasi', PemesananController::class);

Route::resource('dataKamar', DataKamarController::class);
Route::resource('fasilitasHotel', FasilitasHotelController::class);
Route::resource('fasilitasKamar', FasilitasKamarController::class);

//Route::get('fasilitasKamar',[FasilitasKamarController::class,'update']);

Route::get('/dataReservasi', [DataReservasiController::class, 'index']);
Route::get('/dataReservasi/search', [DataReservasiController::class, 'cari']);
Route::get('/dataReservasi/filter', [DataReservasiController::class, 'tanggal']);

Route::get('/cetak', [PemesananController::class, 'cetakBukti']);

Auth::routes();
Route::get('/dataKamar', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
Route::get('/dataReservasi', [App\Http\Controllers\HomeController::class, 'resepsionis'])->name('home');

Route::get('/about',[FasilitasKamarController::class,'About']);

Route::get('/',function(){
    return view('index');
});

Route::get('/rooms',[FasilitasKamarController::class,'Rooms']);
Route::get('/details',[FasilitasKamarController::class,'Details']);

// Route::get('/details',function(){
//     return view('details');
// });