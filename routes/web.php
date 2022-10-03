<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\landing\landingController;
use App\Http\Controllers\admin\produkController;
use App\Http\Controllers\admin\stokProdukController;
use App\Http\Controllers\admin\kategoriController;
use App\Http\Controllers\admin\profileController;

// Route::get('/',function(){
// 	return redirect('/dashboard');
// });
Route::get('/landing',function(){
	return redirect('/rad-toys');
});
Route::group(['prefix'=>'rad-toys'],function(){
	Route::get('/',[landingController::class, 'main']);
});

Route::get('/admin',function(){
	return redirect('/admin/dashboard');
});
Route::group(['prefix'=>'admin'],function(){
	Route::get('/dashboard',[adminController::class, 'main'])->name('dashboard');

	Route::group(['prefix'=>'master'],function(){
		Route::group(['prefix'=>'kategori'],function(){
			Route::get('/',[kategoriController::class, 'main'])->name('kategori');
			Route::post('/form',[kategoriController::class, 'form'])->name('formKategori');
			Route::post('/save',[kategoriController::class, 'save'])->name('saveKategori');
			Route::post('/destroy',[kategoriController::class, 'destroy'])->name('destroyKategori');
			Route::post('/getKategori',[kategoriController::class, 'getKategori'])->name('getKategori');
		});

		Route::group(['prefix'=>'produk'],function(){
			Route::get('/',[produkController::class, 'main'])->name('produk');
			Route::post('/form',[produkController::class, 'form'])->name('formProduk');
			Route::post('/save',[produkController::class, 'save'])->name('saveProduk');
			Route::post('/destroy',[produkController::class, 'destroy'])->name('destroyProduk');
			Route::post('/getProduk',[produkController::class, 'getProduk'])->name('getProduk');
		});

		Route::group(['prefix'=>'profile'],function(){
			Route::get('/',[profileController::class, 'main'])->name('profile');
			Route::post('/form',[profileController::class, 'form'])->name('formProfile');
			Route::post('/save',[profileController::class, 'save'])->name('saveProfile');
			Route::post('/destroy',[profileController::class, 'destroy'])->name('destroyProfile');
			Route::post('/getProfile',[profileController::class, 'getProfile'])->name('getProfile');
		});

		Route::group(['prefix'=>'user'],function(){
			Route::get('/',[profileController::class, 'main'])->name('user');
			Route::post('/form',[profileController::class, 'form'])->name('formUser');
			Route::post('/save',[profileController::class, 'save'])->name('saveUser');
			Route::post('/destroy',[profileController::class, 'destroy'])->name('destroyUser');
			Route::post('/getProfile',[profileController::class, 'getProduk'])->name('getUser');
		});
	});

	Route::group(['prefix'=>'stok-produk'],function(){
		Route::get('/',[stokProdukController::class, 'main'])->name('stokProduk');
		Route::post('/form',[stokProdukController::class, 'form'])->name('formStokProduk');
		Route::post('/save',[stokProdukController::class, 'save'])->name('saveStokProduk');
		Route::post('/destroy',[stokProdukController::class, 'destroy'])->name('destroyStokProduk');
		Route::post('/detail',[stokProdukController::class, 'detail'])->name('detailStokProduk');
		Route::post('/getStok',[stokProdukController::class, 'getStok'])->name('getStokProduk');
	});
});

// Route::get('/',[landingController::class, 'main'])->name('landing');
// Route::get('/', function () {
// 	return view('welcome');
// });