<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;

Route::get('/',[landingController::class, 'main'])->name('landing');

// Route::get('/', function () {
// 	return view('welcome');
// });