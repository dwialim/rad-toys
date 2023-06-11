<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\StokProduk;

class Controller extends BaseController{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function kodeKategori(){
		$year = date("Y");
		$num = 0;
		$data = Kategori::select('kode_kategori')
			->where('kode_kategori','LIKE',"%$year%")
			->orderBy('kode_kategori','asc')
			->get();
		if($data){
			$cek = 0;
			$pat = []; // array pattern
			$notPat = []; // array tidak pattern
			foreach($data as $key => $val){
				$getNum = (int)substr($val->kode_kategori,8);
				$cek++;
				if($cek!=$getNum){
					array_push($notPat,$getNum); // mulai tidak pattern
				}else{
					array_push($pat,$getNum); // jika masih pattern
				}
			}
			$num = (int)end($pat); // ambil array pattern index terakhir
		}
		$nextKode = 'KR-'.date('Y'.'-'.sprintf("%03d",(string)$num+1));
		return $nextKode;
	}

	public function kodeProduk(){
		$year = date("Ym");
		$num = 0;
		$data = Produk::select('kode_produk')
			->where('kode_produk','LIKE',"%$year%")
			->orderBy('kode_produk','asc')
			->get();

		if($data){
			$cek = 0;
			$pat = [];
			$notPat = [];
			foreach($data as $key => $val){
				$getNum = (int)substr($val->kode_produk,10);
				$cek++;
				if($cek!=$getNum){
					array_push($notPat,$getNum);
				}else{
					array_push($pat,$getNum);
				}
			}
			$num = (int)end($pat);
		}
		$nextKode = 'KP-'.date('Ym'.'-'.sprintf("%03d",(string)$num+1));
		return $nextKode;
	}

	public function kodeStok(){
		$year = date("Ym");
		$num = 0;
		$data = StokProduk::select('kode_stok')
			->where('kode_stok','LIKE',"%$year%")
			->orderBy('kode_stok','asc')
			->get();

		if($data){
			$cek = 0;
			$pat = [];
			$notPat = [];
			foreach($data as $key => $val){
				$getNum = (int)substr($val->kode_stok,10);
				$cek++;
				if($cek!=$getNum){
					array_push($notPat,$getNum);
				}else{
					array_push($pat,$getNum);
				}
			}
			$num = (int)end($pat);
		}
		$nextKode = 'KS-'.date('Ym'.'-'.sprintf("%03d",(string)$num+1));
		return $nextKode;
	}
}
