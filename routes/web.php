<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\produkController;

Route::get('/',function(){
	return redirect('/dashboard');
});
Route::get('/dashboard',[adminController::class, 'main'])->name('dashboard');
Route::group(['prefix'=>'master'],function(){
	Route::group(['prefix'=>'produk'],function(){
		Route::get('/',[produkController::class, 'main'])->name('produk');
		Route::post('/form',[produkController::class, 'form'])->name('addProduk');
	});
});

// Route::get('/',[landingController::class, 'main'])->name('landing');
// Route::get('/', function () {
// 	return view('welcome');
// });