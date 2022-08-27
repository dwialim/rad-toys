<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Kategori;
use App\Models\Produk;

class Controller extends BaseController{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function kodeKategori(){
		$year = date("Y");
		$num = 0;
		$data = Kategori::select('kode_kategori')
			->where('kode_kategori','LIKE',"%$year%")
			->orderBy('kode_kategori','desc')
			->first();

		if($data){
			$num = (int)substr($data->kode_kategori,8);
		}
		$nextKode = 'KR-'.date('Y'.'-'.sprintf("%04d",(string)$num+1));
		return $nextKode;
	}

	public function kodeProduk(){
		$date = date("Ym");
		$num = 0;
		$data = Produk::select('kode_barang')
			->where('kode_barang','LIKE',"%$date%")
			->orderBy('kode_barang','desc')
			->first();

		if($data){
			$num = (int)substr($data->kode_kategori,8);
		}
		$nextKode = 'KP-'.date('Ymd'.'-'.sprintf("%04d",(string)$num+1));
		return $nextKode;
	}
}
