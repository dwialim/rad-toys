<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\StokProduk;
use DataTables, Validator;

class stokProdukController extends Controller{
	public function main(){
		return view('content.admin.stokProduk.main');
	}

	public function form(Request $request){
		$data['kategori'] = Kategori::all();
		$data['produk'] = Produk::all();
		if(!isset($request->id)){
			$data['kode'] = $this->kodeStok();
			$data['data'] = '';
			$data['page'] = 'Tambah';
		}else{
			$data['kode'] = '';
			$data['data'] = StokProduk::where('id',$request->id)->first();
			$data['page'] = 'Edit';
		}
		$content = view("content.admin.stokProduk.form",$data)->render();
		return ["status"=>"success","message"=>"Data berhasil diambil","data"=>$content];
	}

	public function save(Request $request){
		$rules = [
			'hargaProduk'    => 'required',
			'qtyProduk'      => 'required',
			'image'          => 'image|file|mimes:jpeg,jpg,png|max:2048',
			'kategoriProduk' => 'required',
			'namaProduk'     => 'required',
			'publish'        => 'required',
		];
		$messages = [
			'required' => 'Kolom Harus Diisi!',
		];
		$validator = Validator::make($request->all(),$rules,$messages);

		if(!$validator->fails()){
			$image = $request->file('image');

			if(!isset($request->id)){
				$stok = new StokProduk;
				$stok->kode_stok = $request->kodeStok;
			}else{
				$stok = StokProduk::find($request->id);
			}
			if($stok->qty==$stok->qty_awal){
				$stok->qty_awal = $request->qtyProduk;
			}
			$stok->kategori_id = $request->kategoriProduk;
			$stok->produk_id   = $request->namaProduk;
			$stok->qty         = $request->qtyProduk;
			$stok->harga       = preg_replace("/\D+/", "", $request->hargaProduk);
			$stok->publish     = $request->publish;	
			if(!empty($image)){
				if(!empty($stok->foto)&&file_exists(public_path().'/storage/'.$stok->foto)){
					$unlinkPath = public_path().'/storage/'.$stok->foto;
					unlink($unlinkPath);
				}
				$path       = $image->store('produk-image');
				$stok->foto = $path;
			}
			$stok->save();
			if($stok){
				if(!isset($request->id)){
					return ['status'=>'success','message'=>'Stok Berhasil Disimpan!'];
				}else{
					return ['status'=>'success','message'=>'Stok Berhasil Diperbarui!'];
				}
			}else{
				if(!isset($request->id)){
					return ['status'=>'error','message'=>'Stok Gagal Disimpan!'];
				}else{
					return ['status'=>'error','message'=>'Stok Gagal Diperbarui!'];
				}
			}
		}else{
			return $validator->messages();
		}
	}

	public function getStok(Request $request){
		if(request()->ajax()){
			$data = StokProduk::with(['kategori','produk'])->get();
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
					$txt = "<p class='text-center' style='margin:0;'>".$row->kode_stok."</p>";
					return $txt;
				})
				->addColumn('nama',function($row){
					$txt = "
						<div class='row'>
							<div class='col-sm-3'>
							</div>
							<div class='col-sm-9'>".ucwords($row->produk->nama_produk)."</div>
						</div>";
					return $txt;
				})
				->addColumn('kategori', function($row){
					$txt = "<p class='text-center' style='margin:0;'>".$row->kategori->nama_kategori."</p>";
					return $txt;
				})
				->rawColumns(['nama','kode','action','kategori'])
				->make(true);
		}
	}

	public function destroy(Request $request){
		$id = $request->id;
		$data = StokProduk::find($id);
		if($data){
			if(!empty($data->foto) && file_exists(public_path().'/storage/'.$data->foto)){
				$unlinkPath = public_path().'/storage/'.$data->foto;
				unlink($unlinkPath);
			}
			$data->delete();
			return ['status'=>'success','message'=>'Stok Berhasil Dihapus!'];
		}else{
			return ['status'=>'error','message'=>'Data Gagal Dihapus!'];
		}
	}

	public function detail(Request $request){
		$data['kategori'] = Kategori::all();
		$data['produk'] = Produk::all();
		$data['data'] = StokProduk::where('id',$request->id)->first();
		$data['page'] = 'Detail';
		$content = view("content.admin.stokProduk.detail",$data)->render();
		return ["status"=>"success","message"=>"Data berhasil diambil","data"=>$content];
	}
}