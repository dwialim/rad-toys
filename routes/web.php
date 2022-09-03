<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\kategoriController;

Route::get('/',function(){
	return redirect('/dashboard');
});
Route::get('/dashboard',[adminController::class, 'main'])->name('dashboard');
Route::group(['prefix'=>'master'],function(){
	Route::group(['prefix'=>'produk'],function(){
		Route::get('/',[produkController::class, 'main'])->name('produk');
		Route::post('/form',[produkController::class, 'form'])->name('formProduk');
		Route::post('/save',[produkController::class, 'save'])->name('saveProduk');
		Route::post('/detail',[produkController::class, 'detail'])->name('detailProduk');
		Route::post('/destroy',[produkController::class, 'destroy'])->name('destroyProduk');
		Route::post('/getProduk',[produkController::class, 'getProduk'])->name('getProduk');
	});

	Route::group(['prefix'=>'kategori'],function(){
		Route::get('/',[kategoriController::class, 'main'])->name('kategori');
		Route::post('/form',[kategoriController::class, 'form'])->name('formKategori');
		Route::post('/save',[kategoriController::class, 'save'])->name('saveKategori');
		Route::post('/destroy',[kategoriController::class, 'destroy'])->name('destroyKategori');
		Route::post('/getKategori',[kategoriController::class, 'getKategori'])->name('getKategori');
	});
});

// Route::get('/',[landingController::class, 'main'])->name('landing');
// Route::get('/', function () {
// 	return view('welcome');
// });