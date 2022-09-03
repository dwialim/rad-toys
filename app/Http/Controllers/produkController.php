<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produk;
use App\Models\Kategori;
use DataTables, Validator;

class produkController extends Controller{
	public function main(){
		return view('content.admin.master.produk.main');
	}

	public function form(Request $request){
		if(!isset($request->id)){
			$data['kode'] = $this->kodeProduk();
			$data['data'] = '';
			$data['page'] = 'Tambah';
		}else{
			$data['kode'] = '';
			$data['data'] = Produk::where('id',$request->id)->first();
			$data['page'] = 'Edit';
		}
		$content = view("content.admin.master.produk.form",$data)->render();
		return ["status"=>"success","message"=>"Data berhasil diambil","data"=>$content];
	}

	public function save(Request $request){
		// return $request->all();
		$rules = [
			'namaProduk' => 'required',
		];
		$messages = [
			'required' => 'Kolom Harus Diisi!',
		];
		$validator = Validator::make($request->all(),$rules,$messages);
		if(!$validator->fails()){
			$produk = new Produk;
			$produk->kode_produk = $request->kodeProduk;
			$produk->nama_produk = $request->namaProduk;
			$produk->save();
			if($produk){
				return ['status'=>'success','message'=>'Produk Berhasil Disimpan!'];
			}else{
				return ['status'=>'error','message'=>'Produk Gagal Disimpan!'];
			}
		}else{
			return $validator->messages();
		}
	}

	public function getProduk(Request $request){
		if(request()->ajax()){
			$data = Produk::orderBy('kode_produk','asc')->get();
			return DataTables::of($data)
				->addIndexColumn()
				->addColumn('action',function($row){
					$btn = "
						<div class='row'>
							<div class='col-sm-12 text-center'>
							<a href='javascript:' title='Detail' onclick=detail(".$row->id.")><i class='far fa-eye f-16 mr-15 text-info'></i></a> &nbsp;
							<a href='javascript:' title='Edit' onclick=updated(".$row->id.")><i class='far fa-edit f-16 mr-15 text-warning'></i></a> &nbsp;
							<a href='javascript:' title='Hapus' onclick=deleted(".$row->id.")><i class='far fa-trash-alt f-16 text-danger'></i></a>
							</div>
						</div>";
					return $btn;
				})
				->addColumn('kode',function($row){
					$txt = "
						<p class='text-center' style='margin:0;'>".$row->kode_produk."</p>";
					return $txt;
				})
				->addColumn('nama',function($row){
					$txt = "
						<div class='row'>
							<div class='col-sm-3'>
							</div>
							<div class='col-sm-9'>".ucwords($row->nama_produk)."</div>
						</div>";
					return $txt;
				})
            ->rawColumns(['kode','nama','action'])
            ->make(true);
      }
   }

   public function destroy(Request $request){
   		$id = $request->id;
   		$data = Produk::find($id);
   		if($data){
   			$data->delete();
   			return ['status'=>'success','message'=>'Data Berhasil Dihapus!'];
   		}else{
   			return ['status'=>'error','message'=>'Data Gagal Dihapus!'];
   		}
   }

   public function detail(Request $request){
   	$data['kategori'] = Kategori::all();
		$data['data'] = Produk::where('id',$request->id)->first();
		$data['page'] = 'Detail';
		$content = view("content.admin.master.produk.detail",$data)->render();
		return ["status"=>"success","message"=>"Data berhasil diambil","data"=>$content];
   }
}
