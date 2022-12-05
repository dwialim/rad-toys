<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ReviewCustomer;
use DataTables, Validator;

use App\Models\Kategori;
use App\Models\Produk;

class reviewCustomerController extends Controller{
	public function main(){
		if(request()->ajax()){
			$data = ReviewCustomer::get();
			$txt = "<p class='text-center' style='margin:0;'>";
			return DataTables::of($data)
				->addIndexColumn()
				->addColumn('nama',function($row) use($txt){
					$nama = $row->nama;
					$txt .= (!empty($nama)?ucwords($nama):'-')."</p>";
					return $txt;
				})
				->addColumn('alamat',function($row) use($txt){
					$alamat = $row->alamat;
					$txt .= (!empty($alamat)?$alamat:'-')."</p>";
					return $txt;
				})
				->addColumn('nomor',function($row) use($txt){
					$nohp = $row->nohp;
					$txt .= (!empty($nohp)?$nohp:'-')."</p>";
					return $txt;
				})
				->addColumn('action',function($row){
					$btn = "
						<div class='row'>
							<div class='col-sm-12 text-center'>
							<a href='javascript:void(0)' title='Detail' onclick=detail(".$row->id.")><i class='far fa-eye f-16 mr-15 text-info'></i></a> &nbsp;
							<a href='javascript:void(0)' title='Edit' onclick=updated(".$row->id.")><i class='far fa-edit f-16 mr-15 text-warning'></i></a> &nbsp;
							<a href='javascript:void(0)' title='Hapus' onclick=deleted(".$row->id.")><i class='far fa-trash-alt f-16 text-danger'></i></a>
							</div>
						</div>";
					return $btn;
				})
				->rawColumns(['nama','alamat','nomor','pesan','action'])
				->make(true);
		}
		return view('content.admin.reviewCustomer.main');
	}

	public function form(Request $req){
		// return $req->all();
		if(!isset($req->id)){
			$data['kode'] = $this->kodeStok();
			$data['data'] = '';
			$data['page'] = 'Tambah';
		}else{
			$data['kode'] = '';
			$data['data'] = ReviewCustomer::find($req->id);
			$data['page'] = 'Edit';
		}
		$content = view('content.admin.reviewCustomer.form',$data)->render();
		return ["status"=>"success","message"=>"Data berhasil diambil","data"=>$content];
	}
}